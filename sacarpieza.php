<?php

        //$accion="select distinct origen from vuelos";
        
    
        $marca=$_POST['marca'];
        require("funcionConexion.php");
        $con=conexion("pap"); //La base de datos
        $acentos = mysqli_query($con,"SET NAMES 'utf8'");

        $accion="select id_pieza,modelo,precio,especificaciones from piezas where modelo='$marca'";
        $result=mysqli_query($con,$accion);
        $cantidad= mysqli_num_rows($result);

        for($i=0;$i<$cantidad;$i++){
                $datos=mysqli_fetch_array($result);
                echo "<h3>Información de la pieza:</h3> <br> <b>Modelo:</b> $datos[modelo] <br><hr> <b>Precio: </b> Desde $datos[precio] € <br><hr> <b>Especificaciones:</b> $datos[especificaciones] <br><hr><a style='margin-left:40px' href='./anadirCarrito.php?id=$datos[id_pieza]' class='btn btn-primary'>Añadir al carrito</a> ";
        }
        mysqli_close($con);
?>