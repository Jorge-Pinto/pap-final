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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script>
    $(document).ready(function(){

$('.radio-group .radio').click(function(){
$('.radio').addClass('gray');
$(this).removeClass('gray');
});

$('.plus-minus .plus').click(function(){
var count = $(this).parent().prev().text();
$(this).parent().prev().html(Number(count) + 1);
});

$('.plus-minus .minus').click(function(){
var count = $(this).parent().prev().text();
$(this).parent().prev().html(Number(count) - 1);
});

/*$("#botonCompra").click(function(){
    var errores=
})*/

});
// validaciones tarjeta  de crédito
$("#botonCompra").click(function(){
      var exp6=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/; //fecha
      var exp5=/^[0-9]{16}$/; //numero de la tarjeta
      var exp4=/^[a-zA-Z-' ]*$/; //nombre
      var exp7=/^[0-9]{3}$/; //tres

      var errores2="";
      if(!$("#cname").val().match(exp4)){
        errores2+="No ha introducido de manera correcta el combre \n";
      }
      if($("#cname").val()==""){
        errores2+="No ha introducido nada en el campo del correo \n";
      }
      if(!$("#cnum").val().match(exp5)){
        errores2+="No ha introducido de manera correcta los numeros de la tarjeta \n";
      }
      if($("#cnum").val()==""){
        errores2+="No ha introducido nada en el campo de los numeros de la tarjeta \n";

      }if(!$("#exp").val().match(exp6)){
        errores2+="No ha introducido de manera correcta la fecha \n";
      }
      if($("#exp").val()==""){
        errores2+="No ha introducido nada en el campo de la fecha \n";

      }if(!$("#cvv").val().match(exp7)){
        errores2+="No ha introducido de manera correcta los tres dígitos \n";
      }
      if($("#cvv").val()==""){
        errores2+="No ha introducido nada en el campo de los tres dígitos \n";
      }
      if(errores2!=""){
        alert("Ha cometido los siguientes errores \n"+errores2);
      }
      else{
        compra();
      }
    })

    function compra(){
            var cname=$("#cname").val();
            var valor=$("#valor").val();
            var cvv=$("#cvv").val();
            var cnum=$("#nu").val();
            var sumador=$("#sumador").val();

            var peticion = $.ajax({
            url: "listcom.php",
            type: "POST",
            async: true, // no es obligario es asincrono por defecto
            data: { //Variable que vamos a mandar al servidor
                cname: cname,
                valor: valor,
                cvv: cvv,
                cnum: cnum,
                sumador: sumador
            },
            success: function(data) { //cuando nos devuelve una respuesta favorable entra en el success
            $("#resp").html(peticion.responseText);
        }
        })
        } 

</script> 
   <style>
    body {
color: #000;
overflow-x: hidden;
height: 100%;
background-color: #fff;
background-repeat: no-repeat
}

.plus-minus {
position: relative
}

.plus {
position: absolute;
top: -4px;
left: 2px;
cursor: pointer
}

.minus {
position: absolute;
top: 8px;
left: 5px;
cursor: pointer
}

.vsm-text:hover {
color: #FF5252
}

.book,
.book-img {
width: 100%;
height: 201px;
border-radius: 5px
}

.book {
margin: 20px 15px 5px 15px
}

.border-top {
border-top: 1px solid #EEEEEE !important;
margin-top: 20px;
padding-top: 15px
}

.card {
margin: 40px 0px;
padding: 40px 50px;
border-radius: 20px;
border: none;
box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2)
}

input,
textarea {
background-color: #F3E5F5;
padding: 8px 15px 8px 15px;
width: 100%;
border-radius: 5px !important;
box-sizing: border-box;
border: 1px solid #F3E5F5;
font-size: 15px !important;
color: #000 !important;
font-weight: 300
}

input:focus,
textarea:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;
border: 1px solid #9FA8DA;
outline-width: 0;
font-weight: 400
}

button:focus {
-moz-box-shadow: none !important;
-webkit-box-shadow: none !important;
box-shadow: none !important;
outline-width: 0
}

.pay {
width: 80px;
height: 40px;
border-radius: 5px;
border: 1px solid #673AB7;
margin: 10px 20px 10px 0px;
cursor: pointer;
box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2)
}

.gray {
-webkit-filter: grayscale(100%);
-moz-filter: grayscale(100%);
-o-filter: grayscale(100%);
-ms-filter: grayscale(100%);
filter: grayscale(100%);
color: #E0E0E0
}

.gray .pay {
box-shadow: none
}

#tax {
border-top: 1px lightgray solid;
margin-top: 10px;
padding-top: 10px
}

.btn-blue {
border: none;
border-radius: 10px;
background-color: #673AB7;
color: #fff;
padding: 8px 15px;
margin: 20px 0px;
cursor: pointer
}

.btn-blue:hover {
background-color: #311B92;
color: #fff
}

#checkout {
float: left
}

#check-amt {
float: right
}

@media screen and (max-width: 768px) {

.book,
.book-img {
    width: 100px;
    height: 150px
}

.card {
    padding-left: 15px;
    padding-right: 15px
}

.mob-text {
    font-size: 13px
}

.pad-left {
    padding-left: 20px
}
}
</style>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
        </nav><br><br>
</head>
<body>

    <div class="container px-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-3">
                <h4 class="heading">Tu Cesta</h4>
            </div>
            <div class="col-9">
                <div class="row text-center">
                    <div class="col-3">
                        <h6 class="mt-2">Modelo</h6>
                    </div>
                    <div class="col-3">
                        <h6 class="mt-2">Color</h6>
                    </div>
                    <div class="col-3">
                        <h6 class="mt-2">Precio</h6>
                    </div>
                    <div class="col-3">
                        <h6 class="mt-2"></h6>
                    </div>
                </div>
            </div>
        </div>
        

        <?php

        $sumador=0;
        $envio=10;
        $auto=$_SESSION['carritoMuestra'];
        
        require("funcionConexion.php");
        
        foreach($auto as $clave => $valor){
        $con=conexion("pap"); //La base de datos
        $acentos = mysqli_query($con,"SET NAMES 'utf8'");
        $accion="select modelo,color,precio from vehiculos Where id_vehiculo='$valor'";
        $result=mysqli_query($con,$accion);
        $cantidad= mysqli_num_rows($result);

        for($i=0;$i<$cantidad;$i++){
                $datos=mysqli_fetch_array($result);
                echo "<div class='row d-flex justify-content-center border-top'>
                <div class='col-3'>
                    <div class='row d-flex'>
                        <div class='book' id='contador'> <img src='./assets/img/$valor.jpeg' class='book-img'> </div>
                    </div>
                </div>
                <div class='my-auto col-9'>
                    <div class='row text-center'>
                        <div class='col-3'>
                            <p class='mob-text'>$datos[modelo]</p>
                        </div>
                        <div class='col-3'>
                            <p class='mob-text'>$datos[color]</p>
                        </div>
                        
                        <div class='col-3'>
                            <p class='mob-text'>Desde $datos[precio] €</p>
                        </div>
                        <div class='col-3'>
                        <a href='./eliminarCarrito.php?posicion=$clave'><i style='color:black;' id='Eliminar'  class='fas fa-trash-alt'></i></a>
                        </div>

                        
                    </div>
                </div>
            </div>";
            $sumador+=$datos['precio'];
        }
        
        mysqli_close($con);
        }
    

        ?>

<?php


$auto=$_SESSION['carritoMuestra'];
foreach($auto as $clave => $valor){
$con=conexion("pap"); //La base de datos
$acentos = mysqli_query($con,"SET NAMES 'utf8'");
$accion="select modelo,precio,especificaciones from piezas Where id_pieza='$valor'";
$result=mysqli_query($con,$accion);
$cantidad= mysqli_num_rows($result);

for($i=0;$i<$cantidad;$i++){
        $datos=mysqli_fetch_array($result);
        echo "<div class='row d-flex justify-content-center border-top'>
        <div class='col-3'>
            <div class='row d-flex'>
                <div class='book' id='contador'> <img src='./assets/img/$valor.jpeg' class='book-img'> </div>
            </div>
        </div>
        <div class='my-auto col-9'>
            <div class='row text-center'>
                <div class='col-3'>
                    <p class='mob-text'>$datos[modelo]</p>
                </div>
                <div class='col-3'>
                    <p class='mob-text'>No Alterable</p>
                </div>
                
                <div class='col-3'>
                    <p class='mob-text'> Desde $datos[precio] €</p>
                </div>
                <div class='col-3'>
                <a href='./eliminarCarrito.php?posicion=$clave'><i style='color:black;' id='Eliminar'  class='fas fa-trash-alt'></i></a>
                </div>

                
            </div>
        </div>
    </div>";
    $sumador+=$datos['precio'];
}

mysqli_close($con);
}


?>
       
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-3 radio-group">
                            <div class="row d-flex px-3 radio"> <img class="pay" src="https://i.imgur.com/WIAP9Ku.jpg">
                                <p class="my-auto">Credit Card</p>
                            </div>
                            <div class="row d-flex px-3 radio gray"> <img class="pay" src="https://i.imgur.com/OdxcctP.jpg">
                                <p class="my-auto">Debit Card</p>
                            </div>
                            <div class="row d-flex px-3 radio gray mb-3"> <img class="pay" src="https://i.imgur.com/cMk1MtK.jpg">
                                <p class="my-auto">PayPal</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row px-2">
                                <div class="form-group col-md-6"> <label class="form-control-label">Name on Card</label> <input type="text" id="cname" name="cname" placeholder="Johnny Doe"> </div>
                                <div class="form-group col-md-6"> <label class="form-control-label">Card Number</label> <input type="text" id="cnum" name="cnum" placeholder="1111 2222 3333 4444"> </div>
                            </div>
                            <div class="row px-2">
                                <div class="form-group col-md-6"> <label class="form-control-label">Expiration Date</label> <input type="text" id="exp" name="exp" placeholder="MM/YYYY"> </div>
                                <div class="form-group col-md-6"> <label class="form-control-label">CVV</label> <input type="text" id="cvv" name="cvv" placeholder="***"> </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Subtotal</p>
                                <h6 class="mb-1 text-right" id="precioFinalSin"><?php echo $sumador ?> €</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4">
                                <p class="mb-1 text-left">Envío a concesionario</p>
                                <h6 class="mb-1 text-right">10€</h6>
                            </div>
                            <div class="row d-flex justify-content-between px-4" id="tax">
                                <p class="mb-1 text-left">Total (IVA incluído)</p>
                                <h6 class="mb-1 text-right" id="precioFinal"><?php echo $sumador + $envio ?> €</h6>
                            </div> <button class="btn-block btn-blue" id="botonCompra"> <span> <span id="checkout">Pagar</span> <span id="check-amt"><?php echo $sumador + $envio ?> €</span> </span> </button>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   <!-- Bootstrap core JS-->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
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