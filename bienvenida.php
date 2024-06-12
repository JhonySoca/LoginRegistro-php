<?php 
session_start();
if(!isset($_SESSION['usuario'])){

    echo'<script>
    alert("por favor debes iniciar session");
    window.location="assets/index.php";
    </script>';
    //header("location:index.php");
    session_destroy();
    die();
    
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENIDO</h1>

    <a href="php/cerrar_sesion.php">cerrar sesion</a>
    
</body>
</html>

