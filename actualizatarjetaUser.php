<?php
    $correo=$_POST["email"];
    $numerotarjeta=$_POST["numerotarjeta"];
    $fechaexp=$_POST["fechaexp"];
    $cvv=$_POST["cvv"];
    require("funcionConexion.php");
    $con=conexion("pap");
    $accion="update usuarios set numero_tarjeta='$numerotarjeta',ccid=$cvv,fechaexp='$fechaexp' where correo='$correo'";

    $result=mysqli_query($con,$accion);

    mysqli_close($con);
    
    






?>

