<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$direccion=$_POST['txtDireccion'];
$correo=$_POST['txtCorreo'];
$contraseña=$_POST['txtContraseña'];


$consulta="INSERT INTO `usuarios` ( `Nombre`, `Apellido`, `Dirección`, `Correo`, `Contraseña`) VALUES ('$nombre', '$apellido', '$direccion', '$correo', '$contraseña');";

$result=mysqli_query($conexion,$consulta) or die ("error de registro");
echo "registro exitoso";

mysqli_close($conexion);





?>