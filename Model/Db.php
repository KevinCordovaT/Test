<?php
class conexion{
    public $driver;
    public $host;
    public $user;
    public $password;
    public $database;
    public $conn;

    public function __contruct(){
        $this->driver  = 'mysql';
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'TestGit';

        $this->get_connection();
    }

    public function get_connetion(){
        $this->conn = new PDO($this->driver.':'.'host='.$this->host.';'.'dbname='.$this->database,
        $this->user,$this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME utf8'));

        if(!$this->conn){
            echo 'No se conecto';
        }
    }
}
class cliente extends conexion{
    public function insertCliente($name,$email,$password){
        $sql = 'CALL insertClientes(?,?,?)';
        $obj = new conexion();
        $statement = $obj->conn->prepare($sql);

        $statement->bindparam(1,$name);
        $statement->bindparam(2,$email);
        $statement->bindparam(3,$password);

        if ($statement->execute()){
            echo 'Cliente Registrado';

        }
    }
    public function loginCliente($email,$password){
        $sql = 'CALL loginCliente()';
        $obj = new conexion();
        $statement = $obj->conn->prepare($sql);

        $statement->bindparam(1,$email);
        $statement->bindparam(2,$password);

        if($statement->execute()){
            echo 'Hola de nuevo';
        }

    }
}
?>
