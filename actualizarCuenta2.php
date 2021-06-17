<?php
    session_start();
    $idees=$_SESSION["sesion3"];
    $email=$_POST["email"];
    $contrasena=$_POST['contrasena'];
    $nombrecomp=$_POST['nombrecomp'];
    $nombusuario=$_POST['nombusuario'];
    $telefono=$_POST['telefono'];
    $gender=$_POST['gender'];
    $direccion=$_POST['direccion'];
    require("funcionConexion.php");
    $con=conexion("pap");
    $acentos = mysqli_query($con,"SET NAMES 'utf8'");

    $accion="update usuarios set correo='$email',contrasena='$contrasena',nombre='$nombrecomp',nombre_usuario='$nombusuario',telefono='$telefono',sexo='$gender',direccion='$direccion' where id_usuario='$idees'";
    $result=mysqli_query($con,$accion);
    if($result){
        echo "<h5>Actualizado correctamente</h5>";
    }else{
        echo "<h5>No actualizado</h5>";

    }
    mysqli_close($con);
