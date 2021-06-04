<?php

class Menu
{
    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    public function get_all()
    {
        $sql1 = "SELECT * FROM menu";
        $result = $this->db->query($sql1);
        $menu = $result->fetch_all(MYSQLI_ASSOC);

        return $menu;
    }
}
