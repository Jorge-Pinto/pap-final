<?php
session_start();
if ($conexion = mysqli_connect('localhost', 'root', '','pap'))
      {
          mysqli_set_charset($conexion,'utf8');
   $consulta2 = "select contrasena from usuarios WHERE correo='".$_POST['email']."'";
                           if ($resultado= mysqli_query($conexion, $consulta2))
                           {
                               while ($fila = mysqli_fetch_row($resultado))
                               {
                                   foreach ($fila as $key => $valor) {
                                       
                                  echo "$valor";
                                    $_SESSION["sesion2prov"]=$_POST['email'];
                                      
                                  }
                                    
                                   }
                               }
    
    $consulta3 = "select nombre_usuario from usuarios WHERE correo='".$_POST['email']."'";
                           if ($resultado= mysqli_query($conexion, $consulta3))
                           {
                               while ($fila = mysqli_fetch_row($resultado))
                               {
                                   foreach ($fila as $key => $valor) {
                                       
                                 $_SESSION["sesion1prov"]=$valor;
                                      
                                  }
                                    
                                   }
                               }

    $consulta4 = "select id_usuario from usuarios WHERE correo='".$_POST['email']."'";
                           if ($resultado= mysqli_query($conexion, $consulta4))
                           {
                               while ($fila = mysqli_fetch_row($resultado))
                               {
                                   foreach ($fila as $key => $valor) {
                                       
                                 $_SESSION["sesion3"]=$valor;
                                      
                                  }
                                    
                                   }
                               }

     $consulta5 = "select ccid from usuarios WHERE correo='".$_POST['email']."'";
                               if ($resultado= mysqli_query($conexion, $consulta5))
                               {
                                   while ($fila = mysqli_fetch_row($resultado))
                                   {
                                       foreach ($fila as $key => $valor) {
                                           
                                     $_SESSION["sesion4"]=$valor;
                                          
                                      }
                                        
                                       }
                                   }






                           }


                           if (isset($_SESSION["sesion1prov"])) {

                            $_SESSION["sesion1"]=  $_SESSION["sesion1prov"];
                            $_SESSION["sesion2"]=  $_SESSION["sesion2prov"];
                                  
                    }
                    
                    
                        
      




    
    
    






?>