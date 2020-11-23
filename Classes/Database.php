<?php

session_start();
    class Database{
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'tennis_school';
        public $conn;




        public function __construct()
        {
            $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);

            if($this->conn->connect_error){
                die($this->conn->connect_error."ERROR CONNECTING TO DATABASE");
            }else{
                return $this->conn;
            }
        }


    }
?>