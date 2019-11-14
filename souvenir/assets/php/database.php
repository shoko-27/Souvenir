<?php
class Database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "souvenir";
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->database);

        if($this->conn->connect_error){
            die("Connect Error:".$this->conn->connect_error);
        }
        return $this->conn;
    }

}

?>