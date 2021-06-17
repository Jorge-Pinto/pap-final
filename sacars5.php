<?php

        //$accion="select distinct origen from vuelos";
        
        session_start();
        $marca=$_POST['marca'];
        require("funcionConexion.php");
        $con=conexion("pap"); //La base de datos
        $acentos = mysqli_query($con,"SET NAMES 'utf8'");

        $accion="select id_vehiculo,modelo,color,potenciaCV,medidas,combustible,precio from vehiculos where modelo='$marca'";
        $result=mysqli_query($con,$accion);
        $cantidad= mysqli_num_rows($result);

        for($i=0;$i<$cantidad;$i++){
                $datos=mysqli_fetch_array($result);
                if(isset($_SESSION["sesion1"])){
                        echo "<h3>Información del vehículo:</h3> <br> <b>Modelo:</b> $datos[modelo] <br><hr>  <b>Color del modelo:</b> $datos[color] <br><hr> <b>Potencia(CV):</b> $datos[potenciaCV] <br><hr> <b>Medidas:</b> $datos[medidas] <br><hr>  <b>Combustible:</b> $datos[combustible] <br><hr>  <b>Precio: </b>Desde $datos[precio]€ <br><hr><a style='margin-left:40px' href='./anadirCarrito.php?id=$datos[id_vehiculo]' class='btn btn-primary'>Añadir al carrito</a>";

                }
                else{
                        echo "<h3>Información del vehículo:</h3> <br> <b>Modelo:</b> $datos[modelo] <br><hr>  <b>Color del modelo:</b> $datos[color] <br><hr> <b>Potencia(CV):</b> $datos[potenciaCV] <br><hr> <b>Medidas:</b> $datos[medidas] <br><hr>  <b>Combustible:</b> $datos[combustible] <br><hr>  <b>Precio: </b>Desde $datos[precio]€ <br><hr> <h6 style= 'color: red'> Inicie sesión para adquirir el producto</h6>";

                }
        }
        mysqli_close($con);
?>









