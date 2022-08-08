<?php 

include('db.php');

$ID=$_POST['txtID'];
$NOMBRE=$_POST['txtNombre'];
$APELLIDO=$_POST['txtApellido'];
$DIRECCION=$_POST['txtDireccion'];
$CORREO=$_POST['txtCorreo'];
$CONTRASEÑA=$_POST['txtContraseña'];

mysqli_query($conexion,"UPDATE `usuarios` SET `Nombre` = '$NOMBRE', `Apellido` = '$APELLIDO', 
`Dirección` = '$DIRECCION', `Correo` = '$CORREO', `Contraseña` = '$CONTRASEÑA' WHERE `ID` = '$ID';") or die("error al actualizar");

mysqli_close($conexion);
header("location:mostar.php");
?>