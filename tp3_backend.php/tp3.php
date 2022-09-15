<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3 de php</title>
    

</head>

<body>
    <?php

    //Vinculamos el loing con php 
    $usuario =  $_POST["usuario"];
    $pass  = $_POST["pass"];

    //Creamos las variables para validar usuario y contraseña 

    $ckusuario = "usuario";
    $ckpass = "pass";

    //Creamos un IF para validacion de datos: 
    if ($usuario == $ckusuario && $pass == $ckpass) {
        //echo "Correcto!"; 
        header("location:./principal.html");
    } else { 

        header("location:./login.html");
        
    }

    ?>
   
</body>

</html>