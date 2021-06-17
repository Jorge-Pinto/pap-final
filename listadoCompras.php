

<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

@import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Poppins:wght@600&display=swap');

* {
    box-sizing: border-box
}

body {
    font-family: 'Poppins', sans-serif;
    color: #666;
    background-image: url("./assets/img/fondoadmin.jpg");
    background-size: 100% 100%;
}


.h2 {
    color: #444;
    font-family: 'PT Sans', sans-serif
}

thead {
    font-family: 'Poppins', sans-serif;
    font-weight: bolder;
    font-size: 20px;
    color: #666
}

img {
    width: 140px;
    height: 140px;
    border-radius: 20px;
}

.name {
    display: inline-block
}

.bg-blue {
    background-color: #EBF5FB;
    border-radius: 8px
}

.fa-check,
.fa-minus {
    color: blue
}

.bg-blue:hover {
    background-color: #3e64ff;
    color: #eee;
    cursor: pointer
}

.bg-blue:hover .fa-check,
.bg-blue:hover .fa-minus {
    background-color: #3e64ff;
    color: #eee
}

.table thead th,
.table td {
    border: none
}

.table tbody td:first-child {
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px
}

.table tbody td:last-child {
    border-bottom-right-radius: 10px;
}

#spacing-row {
    height: 10px
}

@media(max-width:575px) {
    .container {
        width: 125%;
        padding: 20px 10px
    }
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



            <?php


    $idusers=$_SESSION["sesion3"];
    require("funcionConexion.php");
    $con=conexion("pap");
    $acentos = mysqli_query($con,"SET NAMES 'utf8'");

    $accion="SELECT * FROM Registro_de_compras where usuarios='$idusers'";
    $result=mysqli_query($con,$accion);
    $cantidad= mysqli_num_rows($result);
    if($cantidad==""){
      
        echo "<h5 style='margin-top: 150px; margin-left: 500px; color: white;'>Su carrito de compras está vacío. Añada productos para poder tramitarlos.</h5>";
    }
    else{

      echo "<div class='container rounded mt-5 bg-white p-md-5' >
      <div class='h2 font-weight-bold'>Listado de Compras</div>
      <div class='table-responsive'>
          <table class='table'>
              <thead>
                  <tr>
                      <th scope='col' class='text-center'>Localizador de compra</th>
                      <th scope='col' class='text-center'>Usuarios</th>
                      <th scope='col' class='text-cente'>Vendedor</th>
                      <th scope='col' class='text-center'>Producto</th>
                      <th scope='col' class='text-center'>Fecha de Compra</th>
                      <th scope='col' class='text-center'>Importe</th>

  
                  </tr>
              </thead>";

      for($i=0;$i<$cantidad;$i++){
        $datos=mysqli_fetch_row($result);

        
                echo "<tbody><tr class='bg-blue'>
        <td class='pt-2 align-middle text-center'>
            $datos[0]
        </td>
        <td class='pt-3 mt-1 align-middle text-center'>$datos[1]</td>
        <td class='pt-3 align-middle text-center'>$datos[2]</td>
        <td class='pt-3 align-middle text-center'><img src='./assets/img/".$datos[3].".jpeg' alt=''></td>
        <td class='pt-3 align-middle text-center'>$datos[4]</td>
        <td class='pt-3 align-middle text-center'>$datos[5]</td>

        </tr>
        <tr id='spacing-row'>
            <td></td>
        </tr>";
        
   
    

    }
      
    }
    
    


           



                ?>




            
            </tbody>
        </table>
    </div>
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




