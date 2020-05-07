<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($name == '' || $email == '' || $password == ''){
        echo "No deje campos vacios!";
    }
    else{
        require ("../Model/Db.php");
        $obj = new Cliente();
        $result= $obj->Registrar($name,$email,$password);
        echo $result;
    }
}
?>