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
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #fafdff, #5f71af);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
 .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
 .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
  .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
  .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
  .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
  .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
  input[type="radio"]{
   display: none;
 }
  .button{
   height: 45px;
   margin-top: 27px;
   margin-right: 89px;
 }
  .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #9faeb8, #8d6b99);
 }
  .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
 .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
   .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

body{
  background-image: url("./assets/img/fondoinicioses.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script>


    $(document).ready(function(){
      $("#enviar").click(function(){
            var exp1=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            var exp2=/^[0-9]{9}$/;
            var errores2="";
            if(!$("#email").val().match(exp1)){
                errores2+="<p align='left'>-No ha introducido de manera correcta el correo electrónico</p>";
            }
            if($("#email").val()==""){
                errores2+="<p align='left'>-No ha introducido nada en el campo del correo electrónico</p>";
            }
            if(!$("#contrasenanew").val().match(exp2)){
                errores2+="<p align='left'>-No ha introducido de manera correcta la contraseña</p>";
            }
            if($("#contrasenanew").val()==""){
                errores2+="<p align='left'>-No ha introducido nada en el campo de la contraseña</p>";
            }
            if($("#contrasenanew2").val()!==$("#contrasenanew").val()){
                errores2+="<p align='left'>-No coinciden las contraseñas  \n";
            }
            if(errores2!=""){
              Swal.fire({
              title: '¡Rellena todos tus datos personales!',
              html: errores2,
              icon: 'error',
              confirmButtonText: 'Vale',
              backdrop:false,
              position: 'top',
              background: '#EAE7EC',
              width: '600px'
        })
            }
            else{
              recordarPassword();
            }
      })
    })

    function recordarPassword(){
            var email=$("#email").val();
            var contrasenanew=$("#contrasenanew").val();
            

            var peticion = $.ajax({
            url: "nuevaContrasena.php",
            type: "POST",
            async: true, // no es obligario es asincrono por defecto
            data: { //Variable que vamos a mandar al servidor
                email: email,
                contrasenanew: contrasenanew,
               
            },
            success: function(data) { //cuando nos devuelve una respuesta favorable entra en el success
              Swal.fire({
              title: '¡Usted ha cambiado su contraseña de manera correcta!',
              icon: 'success',
              backdrop:false,
              position: 'top',
              background: '#EAE7EC',
              showConfirmButton: false,
              width: '600px',
              html: 'Será redirigido en unos segundos al inicio de sesión.'
              })
              setTimeout(() => {  window.location.href="iniciarsesion.php"; }, 2500);

        },
        error: function(){
          Swal.fire({
              title: '¡Los datos que ha introducido no coinciden!',
              icon: 'error',
              backdrop:false,
              position: 'top',
              background: '#EAE7EC',
              showConfirmButton: false,
              width: '600px',
              })

        }

        //error: function() { 
         
        })
        }
        



  </script>

  </head>

<body>
  
  <div class="container">
    <div class="title">Cambiar Tu Contraseña</div>
    <div class="content">
    <form id="formu" action="inicioSesion.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Correo electrónico</span>
            <input type="text" id="email" name="email" placeholder="Introduce tu Correo electrónico">
          </div>
          <div class="input-box">
            <span class="details">Nueva Contraseña</span>
            <input type="number" id="contrasenanew" name="contrasenanew" placeholder="Introduce tu nueva contraseña">
          </div>
          <div class="input-box">
            <span class="details">Confirmar Contraseña</span>
            <input type="number" id="contrasenanew2" name="contrasenanew2" placeholder="Confirma tu nueva contraseña">
          </div>
    
        <div class="button">
        <input type="button" id="enviar" value="Cambiar Contraseña">
        </div>
        </div>
      </form>
        </div>
        
        <a href="registrarse.php">¿Todavía no estás registrado? Haga click Aquí.</a><br><br>
        <a href="olvidocontrasena.php">¿Has olvidado tu contraseña?</a>
      
  </div>

    <!-- Bootstrap core JS-->
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- Core theme JS-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>    

</body>