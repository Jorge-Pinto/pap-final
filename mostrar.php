<?php
session_start();
require("funcionConexion.php");
$id=$_POST['id'];
$con=conexion("pporp"); 
$acc="select modelo,color,potencia,medidias,precio from vehiculos where id_vehiculo='$id'"; 
$result=mysqli_query($con, $acc);
$cantidad=mysqli_num_rows($result);
for($i=0; $i<$cantidad; $i++) {
    $datos=mysqli_fetch_array($result);
    echo "$vehiculos[modelo] <br> $vehiculos[color] <br> $vehiculos[potencia] <br> $vehiculos[medidas] <br> $vehiculos[precio]";
}
mysqli_close($con);
?>