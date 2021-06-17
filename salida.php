
<style>

a{
  color: black;
}
a:hover{
  text-decoration:none;
  color: #5D64A0;
}


</style> 

<?php 
if(isset($_POST['txtbusca'])):
  if($_POST['txtbusca']==""){
    $txtbusca="   ";
  }
  else{
    $txtbusca=$_POST['txtbusca'];
  }
  include "funcionConexion.php";
   //$user=new ApptivaDB();  
   $con=conexion("pap");
   $acentos = mysqli_query($con,"SET NAMES 'utf8'");
   $accion="select * from Vehiculos where modelo like '%".$txtbusca."%'";
   $accion2="select * from Piezas where modelo like '%".$txtbusca."%'";

   $result=mysqli_query($con,$accion);
   $result2=mysqli_query($con,$accion2);

   $html="";
 foreach ($result as $v){
  $html.="<h5><a href='./".$v['id_vehiculo']."V.php' id='resul'>".$v['modelo']." ></a></h5><hr>";
  
 }
 foreach ($result2 as $v){
  $html.="<h5><a href='./".$v['id_pieza']."P.php' id='resul'>".$v['modelo']." ></a></h5><hr>";
  
 }
 if($txtbusca=="   "){
  $html="";
 }
 elseif($html==""){
   $html="<h5>No existe ninguna coincidencia...</h5>";
 }


endif;
echo $html;
?>



