<?php
 include ("./conexion.php");
use function PHPSTORM_META\sql_injection_subst; 

      $nombreInstitucion=$_POST["nombreInstitucion"];                           
      $nombrePonente=$_POST["nombrePonente"];
      $correo=$_POST["correo"];
      $telefono=$_POST["telefono"];
      $tituloProyecto=$_POST["tituloProyecto"];
      $archivos= $_FILES ["archivos"]['name'];
      $archivoTemporal = $_FILES['archivos']['tmp_name'];

      $carpetaDestino ='sennova/';

      if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino,0777,true);
      }

       $archivos = $carpetaDestino.$archivos;
                   $archivosMovido = false;
                   
      if(move_uploaded_file($archivoTemporal,$archivos)){
        $archivoMovido = true;
      }
      
if($archivoMovido){
    
    $mysql = $conexion->query("INSERT INTO poster VALUES ('id','$nombreInstitucion','$nombrePonente','$correo','$telefono','$tituloProyecto','$archivos')");

      if ($mysql==1){
        echo "registrado";
         header('location:Formulario_poster.php');
      }else{
         echo'<div class="alert">error al registrar</div>';

      }
}else{
    echo'<div class="alert">error al subir el archivo</div>';
}
      

?>