<?php

session_start();
$correoRec=$_SESSION["sesion2"];
$correoAdmin="admin@gmail.com";
if($correoAdmin==$correoRec){

?>    
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <title>Creative - Start Bootstrap Theme</title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
     rel="stylesheet" type="text/css" />
   <!-- Third party plugin CSS-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
     rel="stylesheet" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="css/styles.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

    table,tr,td{
        border: 1px solid black;
        margin-left: 100px;
    }
    body{
      background-image: url("./assets/img/fondoadmin.jpg");
      background-size: 100% 100%;
    }
    




    </style>
  
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Pieza por Pieza</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         
          <li class="nav-item">
            <a class="nav-link" href="index.php#inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#quienesom">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#productos">Nuestros Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#footer">Contacto</a>
          </li>

          <li class="nav-item dropdown"> 
           <?php
              if(isset($_SESSION["sesion1"])){
                echo "<li class='nav-item'><a href='carrito.php' class='nav-link navbar-link-2 waves-effect'><i class='fas fa-shopping-cart pl-0'></i></a></li>
                <li class='nav-item dropdown'> 
                <a style='cursor:pointer' class='nav-link dropdown-toggle' data-toggle='dropdown'>".$_SESSION["sesion1"]."</a>
                <div class='dropdown-menu' style='background-color:#c3cace'>
                <a class='dropdown-item' href='actualizarCuenta.php'>Actualiza tu cuenta</a>
                <a class='dropdown-item' href='listadoCompras.php'>Mis compras</a>
                <a class='dropdown-item' href='cierreSesion.php'>Cerrar Sesión</a>
              </div>";
                

                //echo "<a class='nav-link js-scroll-trigger' href='cierreSesion.php'>".$_SESSION["sesion1"]."</a>";

              }else{
                echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='./iniciarsesion.php'>Iniciar sesion</a></li>";
              }
            ?>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <div style="height: 80px;"></div>
  <?php
  $tabla=$_GET["tabla"];
  echo "<h3 style='margin-left: 382px; margin-top: 100px; color: white'>Registros de la tabla $tabla</h3>";
  ?>

<div class="container" style="margin-left: 280px">
		<div class="row">
			<div class="col">
				<table class="table table-striped table-bordered table-hover table-dark">
				
					<tbody>
					

		
                <?php


               
                require("funcionConexion.php");
                $con=conexion("pap");
                $acentos = mysqli_query($con,"SET NAMES 'utf8'");

                $accion="SELECT * FROM pap.$tabla;";
                $result=mysqli_query($con,$accion);
                $cantidad= mysqli_num_rows($result);

              
                        for($i=0;$i<$cantidad;$i++){
                        $cantidades=mysqli_num_rows($result);
                        $datos=mysqli_fetch_row($result);
                        echo "<tbody><tr>";
                        foreach($datos as $clave => $valor){
                            echo "<td>$valor";
                            echo "</td>";
                        }
                        echo "<td><a style='color: black;' href='./eliminarAdmin.php?posicion=$datos[0]&tabla=$tabla'></a></td><td><a style='color: black'; href='./eliminarAdmin.php?posicion=$datos[0]&tabla=$tabla'><i class='fas fa-trash-alt'></i></a></td></tr>";
                        

                        }
                        

                    
                

                ?>
					</tbody>
          </table>

          </div>
          </div>
          </div>

<div id="footer"></div>
   <div class="footer-dark" style="background-color: rgb(32, 32, 32);">
     <footer>
       <div class="container">
         <div class="row">
         <div class="col-sm-6 col-md-3 item text">
             <h3>Sobre nosotros</h3>
             <ul>
               <li><p>Pieza por Pieza © Desde 1999</p></li>
               <li><p>Telf: +34 656789345 / +91 4563789</p></li>
               <li><p>Calle Salamanca 43, Edificio 3</p></li>
               <li><p>PiezaporPieza@gmail.com</p></li>

             </ul>
           </div>
           <div class="col-sm-6 col-md-3 item text">
             <h3>Nuestros Servicios</h3>
             <ul>
               <li><p>Compra de vehículos y sus componentes</p></li>
               <li><p>Visualizador en 3D de todos nuestros modelos</p></li>
               <li><p>Compra segura y al mejor precio</p></li>
             </ul>
           </div>
           <div class="col-md-6 item text">
             <h3>Redes Sociales</h3>
             <p>Si tiene alguna duda o consulta, puede contactar con nosotros a través de nuestro Twitter , Facebook , Instagram , o ver nuestro canal de Youtube.
             Descarga también nuestra App IOS/Android.</p>
           </div>
           <div class="line"></div><br>
           <div class="col item social"><a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a><a href="https://es-es.facebook.com/"><i
                 class="fab fa-facebook"></i></a><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a><a href="https://www.instagram.com/"><i
                 class="fab fa-instagram"></i></a><a href="https://www.apple.com/es/ios/app-store/"><i class="fab fa-app-store-ios"></i></a><a href="https://play.google.com/store?hl=es&gl=US"><i class="fab fa-android"></i></a></div>
           </div>
         <p class="copyright">Pieza por Pieza © 2021</p>
       </div>
     </footer>
   </div>


   

  
   <!-- Bootstrap core JS-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

   
   <!-- Third party plugin JS-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
   <!-- Core theme JS-->
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  
</body>
</html>

<?php
   
}
else{
    header("location: inicioSesion.php");
}


?>
