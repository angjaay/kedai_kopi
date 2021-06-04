<?php
include("db_config.php");

class User
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
     * Registration
     */
    public function store($id, $nama, $password)
    {
        $password = md5($password);
        $sql = "SELECT * FROM kasir id_kasir='$id'";

        // Checking if the id is available
        $check = $this->db->query($sql);
        $count_row = $check->num_rows;

        // If the id is not in db then insert to the table
        if ($count_row == 0) {
            $sql1 = "INSERT INTO kasir SET id='$id', nama_kasir='$nama', password='$password'";
            $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Login
     */
    public function login($id, $password)
    {
        $password = md5($password);
        var_dump($id, $password);
        $sql2 = "SELECT id_kasir FROM kasir WHERE id_kasir='$id' AND password='$password'";
        // Checking if the id and the password is macthes
        $result = $this->db->query($sql2);
        $user_data = $result->fetch_assoc();
        $count_row = $result->num_rows;

        if ($count_row == 1) {
            // this login var will use for the session thing
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user_data['id'];
            return true;
        } else {
            return false;
        }
    }

    /**
     * Getting the User
     */
    public function get_user($id)
    {
        $sql3 = "SELECT id, nama_kasir FROM KASIR WHERE id='$id'";
        $result = mysqli_query($this->db, $sql3);
        $user_data = mysqli_fetch_array($result);

        return $user_data;
    }

    /**
     * Start the session
     */
    public function get_session()
    {
        return $_SESSION['login'];
    }

    /**
     * Destroying the session
     */
    public function logout()
    {
        $_SESSION['login'] = false;
        session_destroy();
    }
}
