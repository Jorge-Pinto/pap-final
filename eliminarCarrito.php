<?php

session_start();
$producto=$_GET["posicion"];
unset($_SESSION['carritoMuestra'][$producto]);
header("location: carrito.php");
/*if(isset($_SESSION['carritoMuestra'])){
    echo "<h5 style='margin-top: 50px;'>Su carrito de compras está vacío. Añada productos para poder tramitarlos.</h5>";

}*/



?>