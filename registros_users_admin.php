<?php
include 'conexion.php';
$usuario = $_REQUEST ['usuario'];
$email = $_REQUEST ['correo'];
$contraseña = $_REQUEST ['clave01'];

$sql = "INSERT INTO usuarios(usuario,contraseña,email)
VALUES (\"$usuario\",\"$contraseña\",\"$email\")";



if (mysqli_query ($conn, $sql)) {
    header("location:TablaRegistro_users.php");
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error ($conn);

}
mysqli_close ($conn);
?>
