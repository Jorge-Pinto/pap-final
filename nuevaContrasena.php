<?php
    session_start();
    $email=$_POST['email'];
    $contrasenanew=$_POST['contrasenanew'];
    require("funcionConexion.php");
    $con=conexion("pap");
    $accion="update usuarios set contrasena='$contrasenanew' where correo='$email'";
    $result=mysqli_query($con,$accion);
    mysqli_close($con);
    ?>
