<?php
include("db_config.php");

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
}
