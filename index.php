<?php

session_start();
$_SESSION["pagina"]="0";

?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
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

 </head>


 <body id="page-top">
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
     <div class="container">
       <a style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"
         class="navbar-brand js-scroll-trigger" href="#page-top">Pieza Por Pieza</a>
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
         data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
         aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto my-2 my-lg-0">
           <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#inicio">Inicio</a></li>
           <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#quienesom">Quienes Somos</a></li>
           <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#productos">Nuestros Productos</a></li>
           <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#footer">Contacto</a></li>
           <?php
              if(isset($_SESSION["sesion1"])){
                echo "<li class='nav-item'><a href='carrito.php' class='nav-link navbar-link-2 waves-effect'><i class='fas fa-shopping-cart pl-0'></i></a></li>
                <li class='nav-item dropdown'> 
                <a style='cursor:pointer' class='nav-link dropdown-toggle' data-toggle='dropdown'>".$_SESSION["sesion1"]."</a>
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
   <!-- Masthead-->
   <header>
     <div id="inicio"></div>
     <div class="overlay"></div>
     <video style="width: 100%;" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
       <source src="./assets/img/Nuevo Audi A3 Sportback, conéctate a la emoción..mp4" type="video/mp4">
     </video>
     <div class="container h-100">
       <div class="d-flex h-100 text-center align-items-center">
         <div class="w-100 text-white">
         </div>
       </div>
     </div>
   </header>




   <section class="page-section" id="quienesom" style="background-color: rgb(214, 214, 214);">
     <div class="container">
       <h2 class="text-center mt-0">Compra Coches y Piezas cuando y donde quieras</h2>
       <hr class="divider my-4" />
       <div class="row">
         <div class="col-lg text-center">
           <div class="mt-5">
             <img style="width: 110px;height: 109px;" src="./assets/img/mbricartadd_99553.png">
             <h3 class="h4 mb-2">Quiénes Somos</h3>
             <p class="text-muted mb-0">Empresa Española dedicada a la venta de vehículos de una manera diferente.</p>
           </div>
         </div>
         <div class="col-lg text-center">
           <div class="mt-5">
             <img style="width: 120px;height: 110px;" src="./assets/img/car_side_vehicle_transport_icon_123466.png">
             <h3 class="h4 mb-2">Marcas exclusivas al mejor precio</h3>
             <p class="text-muted mb-0">Tenemos los vehículos de moda. Piezas de recambio y visor 3D de los mismos.</p>
           </div>
         </div>
         <div class="col-lg text-center">
           <div class="mt-5">
             <img style="width: 98px;height: 112px;"
               src="./assets/img/seo-social-web-network-internet_174_icon-icons.com_61537.png">
             <h3 class="h4 mb-2">Estamos conectados</h3>
             <p class="text-muted mb-0">Únete al mundo de Pieza por Pieza y empieza a disfrutar!</p>
           </div>
         </div>
       </div>

       <section class="page-section" id="quienesom" style="background-color: rgb(214, 214, 214);">
     
       <h2 class="text-center mt-0">Encuentre los productos más exclusivos de Pieza por Pieza.</h2>
       <hr class="divider my-4" />
       <h4 class="text-center mt-0" style="color:#757575">Desde las marcas de automóviles más exclusivas hasta los mejores componentes para instalar en tu vehículo.</h4>
       
       </div>

       

       

    

     <?php
        include 'busqueda.php'; 
       ?><br><br>

   </section>


   <br><br>

   <div class="container">



     <div class="row">
       <div class="col-lg-6">

         <div class="heading-block" style="margin-top: 50px;">
           <div class="sub-heading">LOCALIZACIÓN</div>
           <h2>Nuestras oficinas repartidas por <br />toda Europa</h2>
         </div>
         <p>Nuestra sede se encuentra en la zona centro de la capital española, concretamente la Calle Salamanca , punto de inicio de nuestra cooperativa desde el año 1999. </p>
         <div class="mt-3">
           <a href="https://www.google.com/maps/place/Calle+Salamanca,+28020+Madrid/@40.4539854,-3.7029295,17z/data=!3m1!4b1!4m5!3m4!1s0xd4229002b5cc875:0x57590bcb6b1aeb32!8m2!3d40.4539854!4d-3.7007408" class="btn btn-danger">Acceder a la localización</a>

         </div>
       </div>
       <div class="col-lg-6">

         <div class="map-responsive">
           <iframe
             src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Calle+Salamanca+Madrid"
             width="558" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
       </div>
     </div>

   </div>

   <br><br>

   <div id="productos"></div>
   <div class="container">

             <div class="row">
               <div class="col-md-4">
                 <div class="card mb-2">
                   <img class="card-img-top" src="./assets/img/motor.jpg" alt="Card image cap">
                   <div class="card-body">
                     <h4 class="card-title">La Mejor Mecánica Al Mejor Precio</h4>
                     <p class="card-text">Tendrás a tu disposición los mejores componentes para tu vehículo. Todo de primera calidad, porque somos Pieza por Pieza.</p>
                     <a class="btn btn-danger" href="./piezasImp.php">Acceder</a>
                   </div>
                 </div>
               </div>

               <div class="col-md-4 clearfix d-none d-md-block">
                 <div class="card mb-2">
                   <img class="card-img-top" src="./assets/img/ruedas.jpg" alt="Card image cap">
                   <div class="card-body">
                     <h4 class="card-title">Las Mejores Ruedas Del Mercado</h4>
                     <p class="card-text">Tenemos los modelos más exclusivos de neumáticos , tanto deportivo como gama media, para que puedas fardar de ruedas cuando y donde quieras.</p>
                       <a class="btn btn-danger" href="./ruedas.php">Acceder</a>
                   </div>
                 </div>
               </div>

               <div class="col-md-4 clearfix d-none d-md-block">
                 <div class="card mb-2">
                   <img class="card-img-top" src="./assets/img/aceites.jpg" alt="Card image cap">
                   <div class="card-body">
                     <h4 class="card-title">Complementos Para Tus Vehículos</h4>
                     <p class="card-text">Poseemos los complementos que todo conductor debe tener. Si quieres comprar al mejor precio, no lo dudes, Pieza por Pieza ha llegado.</p>
                       <a class="btn btn-danger" href="./complementos.php">Acceder</a>
                   </div>
                 </div>
               </div>
             </div>


     </div>
   </div>


   <br><br><br>

   <div class="jumbotron jumbotron-fluid"
     style="background-color: rgb(211, 211, 211); background-image: url(./assets/img/marcas.jpeg); background-repeat: no-repeat; background-size: 100% 100%;">
     <div class="container">
       <h1 class="display-4" style="color: white; font-family: 'Brush Script MT', cursive;">Tenemos Los Modelos Más
         Exclusivos</h1>

     </div>
   </div>









   <!-- About-->

   <!-- Services-->

   <!-- Portfolio-->
   
     <div class="container-fluid p-0">
       <div class="row no-gutters">
         <div class="col-lg-4 col-sm-6" style="text-align: center;">
            <a href="./Audi.php"><img class="img-fluid" src="./assets/img/audi.png" alt="" /></a>

           
         </div>
         <div class="col-lg-4 col-sm-6" style="text-align: center;">
           <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
            <a href="./Range_Rover.php"><img class="img-fluid" src="./assets/img/range.png" alt="" /></a>

           </a>
         </div>
         <div class="col-lg-4 col-sm-6" style="text-align: center;">
           <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
            <a href="./Porsche.php"><img class="img-fluid" src="./assets/img/porsche.jpg" alt="" /></a>

           </a>
         </div>
         <div class="col-lg-4 col-sm-6" style="text-align: center;">
           <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">
            <a href="./Peugeot.php"><img class="img-fluid" src="./assets/img/peugeot.jpg" alt="" /></a>

           </a>
         </div>
         <div class="col-lg-4 col-sm-6" style="text-align: center;">
           <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg">
            <a href="./Fiat.php"><img class="img-fluid" src="./assets/img/fiat.jpg" alt="" /></a>

           </a>
         </div>
         <div class="col-lg-4 col-sm-6" style="text-align: center;">
           <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">
            <a href="./Mazda.php"><img class="img-fluid" src="./assets/img/mazda.png" alt="" /></a>



           </a>
         </div>
       </div>
     </div>
   </div><br><br>
   <!-- Call to action-->
  


   <!-- Footer-->

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
   <script src="js/scripts.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
 </html>