<?php

class Menu
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

    /**
     * Get all menu from database
     * 
     * @return $menu[]
     */
    public function get_all()
    {
        $sql1 = "SELECT * FROM menu";
        $result = $this->db->query($sql1);
        $menu = $result->fetch_all(MYSQLI_ASSOC);

        return $menu;
    }

    /**
     * Store menu to the database
     * 
     * @param $post
     * @return Location::/page_menu/index.php
     */
    public function store($post)
    {
        $nama_menu = $post['nama_menu'];
        $id_menu = $post['id_menu'];
        $id_kategori = $post['id_kategori'];
        $status = $post['status'];
        $deskripsi = $post['deskripsi'];
        $harga = $post['harga'];
        $gambar = $post['gambar'];

        $$sql1 = "SELECT id_menu, nama_menu FROM menu
            WHERE id_menu = '$id_menu' AND nama_menu = '$nama_menu'";

        // Checking if the nama_menu is available
        $check = $this->db->query($sql1);
        $count_row = $check->num_rows;

        // If the nama_menu is not in db then insert it to table
        if ($count_row == 0) {
            $sql2 = "INSERT INTO menu 
                VALUES(
                    '$id_menu',
                    '$id_kategori',
                    '$nama_menu',
                    '$deskripsi',
                    '$harga',
                    '$status',
                    '$gambar'
                    )";
            $result = mysqli_query($this->db, $sql2) or die(mysqli_connect_errno() . "Data cannot inserted");
            return $result;
        } else {
            return false;
        }
    }
}
