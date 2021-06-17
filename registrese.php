<?php

$email=$_POST["email"];
$contrasena=$_POST["contrasena"];
$nombrecomp=$_POST["nombrecomp"];
$nombusuario=$_POST["nombusuario"];
$telefono=$_POST["telefono"];
$gender=$_POST["gender"];
$direccion=$_POST["direccion"];



require("funcionConexion.php");
$con=conexion("pap");
$accion="insert into usuarios (correo, contrasena, nombre,nombre_usuario, sexo, direccion,telefono) values('$email','$contrasena','$nombrecomp','$nombusuario','$gender','$direccion','$telefono')";
$result=mysqli_query($con,$accion);
?>