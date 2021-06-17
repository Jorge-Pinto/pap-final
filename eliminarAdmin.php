<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

$tabla=$_GET["tabla"];
require("funcionConexion.php");
$con=conexion("pap"); //La base de datos
$acentos = mysqli_query($con,"SET NAMES 'utf8'");

echo "<div></div>";
$consulta="SELECT COLUMN_NAME
FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$tabla'";

$result=mysqli_query($con,$consulta);
$cantidad= mysqli_num_rows($result);
$datos=mysqli_fetch_row($result);
$id=$_GET["posicion"];

$idcol=$datos[0];
$accion="select * from pap.$tabla where $idcol=$id";
$result2=mysqli_query($con,$accion);
$cantidad2= mysqli_num_rows($result2);
for($i=0;$i<$cantidad2;$i++){
        $datos=mysqli_fetch_array($result2);
        $accion2="delete from $tabla where $idcol=$id";
        $result3=mysqli_query($con,$accion2);
        ?>
        <script>
                alert("El registro ha sido eliminado");
                window.location="<?php echo "mostrarAdmin.php?tabla=$tabla" ?>";


        </script>

        <?php
        
         
        

}
mysqli_close($con);






?>