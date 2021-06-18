<?php

class Transaksi
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    public function store($tggl, $total, $pembeli, $id_kasir)
    {
        $sql1 = "INSERT INTO transaksi(tgl, total, pembeli, id_kasir) VALUES(
            '$tggl', '$total', '$pembeli', '$id_kasir'
        )";
        $query = $this->db->query($sql1);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    public function view($id)
    {
        $sql1 = "SELECT * FROM transaksi WHERE no_struk = '$id'";
        $result = $this->db->query($sql1);
        $transaksi = $result->fetch_assoc();

        return $transaksi;
    }
}
