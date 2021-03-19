<?php
class Database
{
    private $servername = '127.0.0.1';
    private $db_username = 'root';
    private $db_password = 'Ninomiya_820';
    private $database = 'hotelnino';
    public $conn;

    //CONSTRUCTOR
    public function __construct()
    {
        $this->conn = new mysqli(
            $this->servername,
            $this->db_username,
            $this->db_password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die('Connection Error:' . $this->conn->connect_error);
        }

        return $this->conn;
    }
}
