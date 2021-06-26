<?php

class Kategori
{
    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    public function store($id_kat, $nama_kat)
    {
        $sql1 = "INSERT INTO kategori(id_kategori, nama_kategori) VALUES(
            '$id_kat', '$nama_kat'
        )";
        $query = $this->db->query($sql1);
        if ($query == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get all kategori from database
     * 
     * @return $kategori[]
     */
    public function get_all()
    {
        $sql1 = "SELECT * FROM kategori";
        $result = $this->db->query($sql1);
        $kategori = $result->fetch_all(MYSQLI_ASSOC);
        return $kategori;
    }

    public function store()
    {
        $id_kategori   = $_POST['id_kategori'];
        $nama_kategori = $_POST['nama_kategori'];

        $check = $this->db->query($sql);
        $count_row = $check->num_rows;
        
        ?><!--
        if ($count_row == 0) {
            $sql = "INSERT INTO kategori
                    VALUES(
                    '$id_kategori',
                    '$nama_kategori'
                    )";
            $result = mysqli_query($this->db, $sql) or die(mysqli_connect_errno() . "Data cannot inserted");
            return header('location:../admin_page/index.php');
            } else {
                return false;
            }else {
            return false;
        }
        --><?php
    }
}
