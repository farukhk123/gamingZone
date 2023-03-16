<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class DB
{
    private $dbHost = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "123456";
    private $dbName = "project4data";
    private $db;
    public function __construct()
    {
        if (!isset($this->db)) {
            try {
                $conn = new PDO("mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName, $this->dbUsername, $this->dbPassword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db = $conn;
            } catch (PDOException $e) {
                die("Failed to connect with MySQL: " . $e->getMessage());
                
            }
        }
    }

    public function insert($table, $userList)
    {
        $i = 0;
        foreach ($userList as $key => $value):

            if ($i == 0):
                $sql = "INSERT INTO $table set $key='$value'";
            else:
                $sql = $sql . ",   `$key`='$value'";
            endif;

            $i = $i + 1;
        endforeach;
     
        $query = $this->db->prepare($sql);
        $update = $query->execute();
        return $update;
    }
}