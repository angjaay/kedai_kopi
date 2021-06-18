<?php

class DetailTransaksi
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

    public function store($no_struk, $id_menu, $jumlah, $harga)
    {
        $sql1 = "INSERT INTO detail_transaksi VALUE(
            '$no_struk', '$id_menu', '$jumlah', '$harga'
        )";

        $query = $this->db->query($sql1);

        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }
}
