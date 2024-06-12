<?php

   include'conexion_be.php';

$nombre_completo= $_POST['nombre_completo'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

//encriptamiento de contraseña
$contrasena=hash('sha512', $contrasena);

$query="insert into usuarios(nombre_completo, correo, usuario, contrasena)
VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//verificar que el correo no se repita en la base de datos

$verificar_correo=mysqli_query($conexion, "select * FROM usuarios where correo='$correo' ");
if(mysqli_num_rows($verificar_correo)>0){
    echo'<script>
    alert("este correo ya esta registrado, intenta con otro diferente");
    window.location="../assets/index.php";
    </script>';
    exit();
};

//verificar que el nombre de usuario no se repita en la base de datos

$verificar_usuario=mysqli_query($conexion, "select * FROM usuarios where usuario='$usuario' ");
if(mysqli_num_rows($verificar_usuario)>0){
    echo'<script>
    alert("este usuario ya esta registrado, intenta con otro diferente");
    window.location="../assets/index.php";
    </script>';
    exit();
};

$ejecutar=mysqli_query($conexion, $query);

if($ejecutar){
  echo
    '<script>
    alert("registro exitoso");
    window.location="../assets/index.php";
    </script>';
}else{
  echo'
    <script>
    alert("fallo en el registro");
    </script>';
};

mysqli_close($conexion);
?>