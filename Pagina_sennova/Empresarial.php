<?php
 include ("./conexion.php");
use function PHPSTORM_META\sql_injection_subst; 

      $nombreInstitucion=$_POST["nombreInstitucion"];                           
      $nombreProyecto=$_POST["nombreProyecto"];
      $numPersonas=$_POST["numPersonas"];
      $archivoNombre= $_FILES ["archivos"]['name'];
      $archivoTemporal =  $_FILES['archivos']['tmp_name'];

      $carpetaDestino = 'poster/';

      if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino,0777,true);
      }

      $archivo = $carpetaDestino.$archivoNombre;
        $archivoMovido = false;
      if(move_uploaded_file($archivoTemporal,$archivo)){
        $archivoMovido = true;
      }
      
if($archivoMovido){
    
    $mysql = $conexion->query("INSERT INTO feria (`nombreInstitucion`, `nombreProyecto`, `numPersonas`, `archivos`) VALUES ('$nombreInstitucion','$nombreProyecto','$numPersonas','$archivoNombre')");

      if ($mysql==1){
        echo "registrado";
         header('location:Formulario_feria.php');
      }else{
         echo'<div class="alert">error al registrar</div>';

      }
}else{
    echo'<div class="alert">error al subir el archivo</div>';
}
      

?>