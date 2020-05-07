<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro UwU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="width: 40%;" class="container">
        <br>
        <div class="text-center">
            <h3>Eres joto</h3>
        </div>
        <br>
        <form method="POST">
            <input class="form-control" type="text" placeholder="Name" id="name" required>
            <br>

            <input class="form-control" type="email" placeholder="Email" id="em" required>
            <br>

            <input class="form-control" type="password" name="password" id="pwd" placeholder ="Password" required>
            <br>

            <div class="text-center">
                <button class="btn btn-primary" id="signup" type="submit">Registrar</button>
                <br><br>
                <p>Ya tengo una cuenta <a href="../">Login</a></p>
            </div>
        </form>
        <script>
                document.querySelector("#signup").addEventListener("click", registrar);

                function registrar() {

                    var name = $("#name").val();
                    var email = $("#em").val();
                    var password = $("#pwd").val();
 
                    console.log(name,email,password);

                    $.ajax({
                        url: "../Controller/registro.php",
                        type: "POST",
                        data: {"name": name, "email": email, "password": password},
                        success: function(data){
                            alert(data);
                        },
                        error: function () {
                            alert (":(");
                        }
                    });
                }

        </script>
    </div>
    
</body>
</html>