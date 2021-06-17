<?php

session_start();
$producto=$_GET["posicion"];
unset($_SESSION['carritoMuestra'][$producto]);
header("location: carrito.php");


?>