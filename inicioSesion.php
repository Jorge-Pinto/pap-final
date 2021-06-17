
<?php
session_start();
$email=$_POST['email'];
$contrasena=$_POST['contrasena'];
require("funcionConexion.php");
$con=conexion("pap");
$accion="select correo,contrasena,nombre_usuario from usuarios where correo='$email' and contrasena='$contrasena'";
$result=mysqli_query($con,$accion);
$cantidad= mysqli_num_rows($result);

if($cantidad==0){
    header("location: iniciarsesion.php");
    
}
else{
    
    for($i=0;$i<$cantidad;$i++){
        $datos=mysqli_fetch_array($result);
        $nombre=$datos['nombre_usuario'];
        $_SESSION["sesion1"]=$nombre;
       

    }
    

    
    mysqli_close($con);

    switch ($_SESSION["pagina"]) {
        case 0:
            header("location: index.php");
            break;
        case 1:
            header("location: Audi.php");
            break;
        case 2:
            header("location: Range_Rover.php");
            break;
        case 3:
            header("location: Porsche.php");
            break;
        case 4:
            header("location: Peugeot.php");
            break;
        case 5:
            header("location: Fiat.php");
            break;
        case 6:
            header("location: Mazda.php");
            break;
        case 7:
            header("location: piezasImp.php");
            break;
        case 8:
            header("location: ruedas.php");
            break;
        case 9:
            header("location: complementos.php");
            break;
        case 10:
            header("location: 10V.php");
            break;
        case 11:
            header("location: 18V.php");
            break;
        case 12:
            header("location: 16V.php");
            break;
        case 13:
            header("location: 11V.php");
            break;
        case 14:
            header("location: 20V.php");
            break;
        case 15:
            header("location: 15V.php");
            break;
        case 16:
            header("location: 12V.php");
            break;
        case 17:
            header("location: 19V.php");
            break;
        case 18:
            header("location: 13V.php");
            break;
        case 19:
            header("location: 17V.php");
            break;
        case 20:
            header("location: 14V.php");
            break;
        case 21:
            header("location: 21V.php");
            break;
        case 22:
            header("location: 29P.php");
            break;
        case 23:
            header("location: 23P.php");
            break;
        case 24:
            header("location: 26P.php");
            break;
        case 25:
            header("location: 24P.php");
            break;
        case 26:
            header("location: 22P.php");
            break;
        case 27:
            header("location: 30P.php");
            break;
        case 28:
            header("location: 28P.php");
            break;
        case 29:
            header("location: 27P.php");
            break;
        case 30:
            header("location: 25P.php");
            break;
        
    }
            


    
    
    

}




?>