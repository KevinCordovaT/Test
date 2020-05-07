<?php

    class Conexion{
        private $driver;
        private $host;
        private $user;
        private $password;
        private $database;
        public $conn;

        public function __construct() {
            
            $this->driver = "mysql";
            $this->host = "127.0.0.1";
            $this->user = "root";
            $this->password = "";
            $this->database = "testgit";

            $this->get_connection();
        }
        public function get_connection(){
            
            $this->conn = new PDO($this->driver.":"."host=".$this->host.";"."dbname=".$this->database,
                $this->user,$this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            
            if (!$this->conn) {
                echo "error al conectar";
            }
        }
    }

    class Cliente extends Conexion{

        public function Registrar($name,$email,$password){
            $sql = "CALL insertClientes(?,?,?)";
            $statement = $this->conn->prepare($sql);

            $statement->bindParam(1,$name);
            $statement->bindParam(2,$email);
            $statement->bindParam(3,$password);

            if ($statement->execute()) {
                echo "XD";
            }else{
                return "Error";
            }
        }

    }
    
