<?php
$cname=$_POST["cname"];
$valor=$_POST["valor"];
$cvv=$_POST["cvv"];
$cnum=$_POST["cnum"];
$sumador=$_POST["suamdor"];

require("funcionConexion.php");
$con=conexion("pap");
$accion="insert into usuarios (correo, contrasena, nombre,nombre_usuario, sexo, direccion) values('$email','$contrasena','$nombrecomp','$nombusuario','$gender','$direccion')";
$result=mysqli_query($con,$accion);
?>