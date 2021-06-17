
<?php

session_start();
$_SESSION["pagina"]="21V.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
        <link href="css/stylemodels.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

        <script>


          $(document).ready(function(){
            infoaudirs5();

          })

          function infoaudirs5(){
            var marca="Mazda-RX7";
            var peticion = $.ajax({
            url: "sacars5.php",
            type: "POST",
            async: true, // no es obligario es asincrono por defecto
            data: { //Variable que vamos a mandar al servidor
               marca: marca
            },
            success: function() { //cuando nos devuelve una respuesta favorable entra en el success
            $("#listars5").html(peticion.responseText);
        }
        }

        )}


        </script>



    </head>
    

                        
        

  <body>
  
    <div class="container" style="background-color: rgb(214, 214, 214);">
      <div class="row">
        <div class="col-lg" style="margin-right: 50px;">

                          <!-- Import the component -->
                <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

                <!-- Use it like any other HTML element -->
                <model-viewer id="hola" src="./3Dmazda-RX7/scene.gltf" alt=" A Range-Rover-Evoque"  auto-rotate camera-controls></model-viewer>


        </div>


    <div class="col-lg">

      <div style="margin-top: 110px;" class="card">
        <div class="card-body">
          <ul>
            <li style="list-style: none;" id="listars5"></li>
          </ul>
        </div>


      </div>


    </div>
    </div>

    </div>
  
   



  
  



  <div class="footer-dark" style="background-color: rgb(32, 32, 32);">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Services</h3>
            <ul>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Hosting</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">Company</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>Company Name</h3>
            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus
              elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
          </div>
          <div class="line"></div><br>
          <div class="col item social"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i
                class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-youtube"></i></a><a href="#"><i
                class="fab fa-instagram"></i></a></div>
        </div>
        <p class="copyright">Pieza por Pieza © 2021</p>
      </div>
    </footer>
  </div>

  


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