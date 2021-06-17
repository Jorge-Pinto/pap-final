
<?php

$email=$_POST["email"];
$clave=$_POST["clave"];
$pregunta=$_POST["pregunta"];
$respuesta=$_POST["respuesta"];
$fechanac=$_POST["fechanac"];
$pais=$_POST["pais"];
$nombre=$_POST["nombre"];
$ingresoo=$_POST["ingresoo"];




require("funcionConexion.php");
$con=conexion("ajax");
$accion="insert into usuarios values('$email','$clave','$nombre','$fechanac','$pais','$ingresoo','$pregunta','$respuesta')";
$result=mysqli_query($con,$accion);
if($result==0){
    header("location: registrarse.php");
    

}
else{
    ?>  <script>alert("Se ha registrado correctamente");
    <?php
    
    header("location: index.php");

    ?>

}




mysqli_close($con);


?>