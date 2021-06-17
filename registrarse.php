

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
 .user-details .address{
  margin-bottom: 15px;
  width: 100%;
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
   margin: 35px 0
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
   background: linear-gradient(135deg, #fafdff, #8d6b99);
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
  form .category{
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




<script>

$(document).ready(function(){


$("#enviar").click(function(){
      var exp1=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/; //correo
      var exp2=/^[0-9]{9}$/; //contraseña
      var exp3=/^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
      var exp4=/^[a-z0-9_\\_\ü]+$/; //nombreu
      var exp5=/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{3}$/; //telefono
      var errores2="";
      if(!$("#email").val().match(exp1)){
        errores2+="<p align='left'>-No ha introducido de manera correcta el correo</p>";
      }
      if($("#email").val()==""){
        errores2+="<p align='left'>-No ha introducido nada en el campo del correo</p> ";
      }
      if(!$("#contrasena").val().match(exp2)){
        errores2+="<p align='left'>-No ha introducido de manera correcta la contraseña</p>";
      }
      if($("#contrasena").val()==""){
        errores2+="<p align='left'>-No ha introducido nada en el campo de la contraseña</p> ";
        // falta comparar con la otra contraseña "ccontra"
      }
      if($("#contrasena2").val()==""){
        errores2+="<p align='left'>-No ha introducido nada en el campo de la contraseña</p> ";
        // falta comparar con la otra contraseña "ccontra"
      }
      if($("#contrasena2").val()!==$("#contrasena").val()){
        errores2+="<p align='left'>-No coinciden las contraseñas \n";
        // falta comparar con la otra contraseña "ccontra"
      }

      if(!$("#nombrecomp").val().match(exp3)){
        errores2+="<p align='left'>-No ha introducido de manera correcta el nombre completo</p>";
      }
      if($("#nombrecomp").val()==""){
        errores2+="<p align='left'>-No ha introducido nada en el campo del nombre completo</p> ";

      }if(!$("#nombusuario").val().match(exp4)){
        errores2+="<p align='left'>-No ha introducido de manera correcta el nombre de usuario</p> ";
      }
      if($("#nombusuario").val()==""){
        errores2+="<p align='left'>-No ha introducido nada en el campo del nobre de usuario</p> ";

      }if(!$("#telefono").val().match(exp5)){
        errores2+="<p align='left'>-No ha introducido de manera correcta el teléfono</p> ";
      }
      if($("#telefono").val()==""){
        errores2+="<p align='left'>-No ha introducido nada en el campo del teléfono</p> ";
      }
      if(!$($("#gender").attr('checked', true))){
        errores2+="<p align='left'>-No ha indicado opción en género</p> ";
      }
      if(errores2!=""){
        
        Swal.fire({
        title: '¡Rellena todos tus datos personales!',
        //text: errores2,
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
        registrarse();
      }
    })

  })

    function registrarse(){
            var email=$("#email").val();
            var contrasena=$("#contrasena").val();
            //var ccontra=$("#contrasena").val();
            var nombrecomp=$("#nombrecomp").val();
            var nombusuario=$("#nombusuario").val();
            var telefono=$("#telefono").val();
            var gender=$("input[name='gender']:checked").val();
            var direccion=$("#direccion").val();


            var peticion = $.ajax({
            url: "registrese.php",
            type: "POST",
            async: true, // no es obligario es asincrono por defecto
            data: { //Variable que vamos a mandar al servidor
                email: email,
                contrasena: contrasena,
                nombrecomp: nombrecomp,
                nombusuario: nombusuario,
                telefono: telefono,
                gender: gender,
                direccion: direccion
            },
            success: function() {
              Swal.fire({
              title: '¡Usted se ha registrado Correctamente!',
              //text: errores2,
              icon: 'success',
              backdrop:false,
              position: 'top',
              background: '#EAE7EC',
              width: '600px',
              showConfirmButton: false,
              html: 'Será redirigido en unos segundos al inicio de sesión.'
              })
              setTimeout(() => {  window.location.href="iniciarsesion.php"; }, 2500);
              

            }
        })
        } 

  </script>
</head>

<body>
<div class="container">
    <div class="title">Registro</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nombre Completo</span>
            <input type="text" id="nombrecomp" name="nombrecomp" placeholder="Enter your name" >
          </div>
          <div class="input-box">
            <span class="details">Nombre de Usuario</span>
            <input type="text" id="nombusuario" name="nombusuario" placeholder="Enter your username" >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="email" name="email" placeholder="Enter your email" >
          </div>
          <div class="input-box">
            <span class="details">Teléfono Móvil</span>
            <input type="text" id="telefono" name="telefono" placeholder="Enter your number" >
          </div>
          <div class="input-box">
            <span class="details">Contraseña</span>
            <input type="text" id="contrasena" name="contrasena" placeholder="Enter your password" >
          </div>
          <div class="input-box">
            <span class="details">Confirmar Contraseña</span>
            <input type="text" id="contrasena2" name="contrasena2" placeholder="Confirm your password" >
          </div>
          <div class="input-box address">
            <span class="details">Dirección de Facturación</span>
            <input type="text" id="direccion" name="direccion" placeholder="Introduzca su dirección" >
          </div>

        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Femenino">
          <input type="radio" name="gender" id="dot-2" value="Masculino">
          <input type="radio" name="gender" id="dot-3" value="Nocontesta">
          <span class="gender-title">Género</span>
          <div class="category">
            <label for="dot-1">   
            <span class="dot one"></span>
            <span class="gender">Mujer</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Hombre</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">N/A</span>
            </label>
          </div>
        </div>
        

        <div class="button">
          <input type="submit" id="enviar" value="Register">
        </div>
    </div>
  </div>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- Core theme JS-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>    

    
</body>
</html>

