<?php
 include ("./conexion.php");
use function PHPSTORM_META\sql_injection_subst; 

      $ejeTematico=$_POST["ejeTematico"];                           
      $institucion=$_POST["institucion"];
      $nombrePrograma=$_POST["nombrePrograma"];
      $fichaPrograma=$_POST["fichaPrograma"];
      $nombrePonente=$_POST["nombrePonente"];
      $correo=$_POST["correo"];
      $telefono=$_POST["telefono"];
      $tituloProyecto=$_POST["tituloProyecto"];
      $tipoProyecto=$_POST["tipoProyecto"];
      $archivos= $_FILES ["archivos"]['name'];
      $archivoTemporal = $_FILES['archivos']['tmp_name'];

      $carpetaDestino = 'ponente/';

      if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino,0777,true);
      }

       $archivos = $carpetaDestino.$archivos;
                   $archivosMovido = false;
                   
      if(move_uploaded_file($archivoTemporal,$archivos)){
        $archivoMovido = true;
      }
      
if($archivoMovido){
    
    $mysql = $conexion->query("INSERT INTO ponente VALUES ('id','$ejeTematico','$institucion','$nombrePrograma' ,' $fichaPrograma','$nombrePonente','$correo','$telefono','$tituloProyecto','$tipoProyecto','$archivos')");

      if ($mysql==1){
        echo "registrado";
         header('location:./Formulario_ponente.php');
      }else{
         echo'<div class="alert">error al registrar</div>';

      }
}else{
    echo'<div class="alert">error al subir el archivo</div>';
}
      

?>