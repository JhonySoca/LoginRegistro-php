<?php
session_start();
include 'conexion_be.php';

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$contrasena=hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "select * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena' ");

if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']=$correo;
header("location:../bienvenida.php");
exit();
}else{
    echo'
    <script>
    alert("Bienvenido al sistema");
    window.location="../assets/index.php";
    </script>
    ';
    exit();
}

