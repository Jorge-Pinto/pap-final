<?php

session_start();
$producto=$_GET["id"];
$_SESSION["carritoMuestra"][]=$producto;
header("location: carrito.php")


?>