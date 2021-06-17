<?php
    $correo=$_POST["email2"];
    require("funcionConexion.php");
    $con=conexion("pap");
    $accion="select * from usuarios where correo='$correo'";

    $result=mysqli_query($con,$accion);
    mysqli_close($con);
    






?>

