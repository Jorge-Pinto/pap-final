
<?php

session_start();
$_SESSION["pagina"]="5";

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
        <link href="css/stylemazda.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">Pieza por Pieza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="./index.html">Inicio
                        <span class="sr-only">(current)</span>
                      </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Quienes Somos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nuestros Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contacto</a>
                </li>
      
                <li class="nav-item dropdown"> 
           <?php
              if(isset($_SESSION["sesion1"])){
                echo "<a style='cursor:pointer' class='nav-link dropdown-toggle' data-toggle='dropdown'>".$_SESSION["sesion1"]."</a>
                <div class='dropdown-menu' style='background-color:#c3cace'>
                <a class='dropdown-item' href='#'>Actualiza tu cuenta</a>
                <a class='dropdown-item' href='#'>Mis compras</a>
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


    </head>
    

                        
        

  <body>
  
  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./assets/img/logofiat.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <p class="lead"> Empresa multinacional alemana fabricante de automóviles de alta gama y deportivos.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./assets/img/cochesfiat.jpeg')">
          <div class="carousel-caption d-none d-md-block">
            <p class="lead"> Empresa multinacional alemana fabricante de automóviles de alta gama y deportivos.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>


  
  
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1 class="display-4">La Gama Nuevo Tipo</h1> 
      <p class="lead"> Histórica Gama italiana de automóviles, bajo la que se comercializan vehículos desde 1899, origen del mayor grupo industrial italiano, Fiat S.p.A., propiedad de Stellantis.</p>
    </div>
  </section>

  <div class="container">

    <div class="row">

        <div class="col-lg-6">

            <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="./assets/img/fiat500.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <ul class="list-group">
                        <li id="cartaA" class="list-group-item"><h4 class="card-title">Fiat 500</h4></li>
                        <li id="cartaA" class="list-group-item">Deportivo Coupé</li>
                        <li id="cartaA" class="list-group-item">3 Puertas</li>
                        <li id="cartaA" class="list-group-item">Colores Disponibles: <div style="display:inline-flex;"><div id="color1"></div>
                            <div id="color2"></div>
                            <div id="color3"></div>
                            <div id="color4"></div>
                            <div id="color5"></div>
                            

                            
                            </div>
                        </li>

                    </ul>

                    <br>

                    <a href="./13V.php" class="btn btn-danger">Acceder al modelo</a>


                </div>
              </div>
            
        </div>

        <div class="col-lg-6">

            <div class="card img-fluid" style="width:500px">
                <img class="card-img-top" src="./assets/img/fiat850.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <ul class="list-group">
                        <li id="cartaA" class="list-group-item"><h4 class="card-title">Fiat 850</h4></li>
                        <li id="cartaA" class="list-group-item">Deportivo Coupé</li>
                        <li id="cartaA" class="list-group-item">3 Puertas</li>
                        <li id="cartaA" class="list-group-item">Colores Disponibles: <div style="display:inline-flex;"><div id="color1"></div>
                            <div id="color6"></div>
                            <div id="color2"></div>
                            
                            </div>
                        </li>

                    </ul>

                    <br>

                    <a href="./17V.php" class="btn btn-danger">Acceder al modelo</a>

                </div>
              </div>


            
        </div>
    </div>

  </div>

  <br><br>


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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>