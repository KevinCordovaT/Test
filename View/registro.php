<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro UwU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/registro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div>
        <form action="POST">
            <input class="form-control" type="text" placeholder="Name" id="name" name="name" required>
            <input class="form-control" type="text" placeholder="Email" id="em" name="email" required>
            <input class="form-control" type="password" name="password" id="pwd" placeholder ="Password" required>
        </form>
    </div>
<?php
if ($_SERVER['REQUEST-METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['password'];
    $password = $_POST['password'];

    if ($name == '' || $email == '' || $password == ''){
        echo "<script> alert('No deje campos vacios!')";
    }else{
        require ("../Model/Db.php");
        $obj = new conexion();
        $result= $obj->insertCliente($name,$email,$password);
        var_dump($result);
    }
}
?>
</body>
</html>