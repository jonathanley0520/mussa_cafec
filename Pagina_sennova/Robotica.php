<?php
 include ("./conexion.php");
use function PHPSTORM_META\sql_injection_subst; 

   if (empty($_POST["categoria"])or empty($_POST["nombreInstitucion"])or empty($_POST["nombreParticipantes"])or empty($_POST["correo"])or empty($_POST["telefono"])){
   echo "error";
   }else{
     
    $categoria=$_POST["categoria"];                           
    $nombreInstitucion=$_POST["nombreInstitucion"];
    $nombreParticipantes=$_POST["nombreParticipantes"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];


       $sql=$conexion->query ("INSERT INTO  Robotica values('id','$categoria','$nombreInstitucion',' $nombreParticipantes','$correo','$telefono')");

      if ($sql==1){
         header('location:Formulario_robotica.php');
      }else{
         echo'<div class="alert">error al registrar</div>';

      }
}


?>