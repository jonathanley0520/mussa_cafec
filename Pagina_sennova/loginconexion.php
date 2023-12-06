<?php
 include ("./conexion.php");
use function PHPSTORM_META\sql_injection_subst; 

   if (empty($_POST["correo"])or empty($_POST["password"])){
   echo "error";
   }else{
     
      $correo=$_POST["correo"];                           
      $contraseña=$_POST["password"];
      
       $sql=$conexion->query ("INSERT INTO login values('id','$correo','$contraseña')");
      if ($sql==1){
         header('location:administrador.php');
      }else{
         echo'<div class="alert">error al registrar</div>';
      }
      
}


?>