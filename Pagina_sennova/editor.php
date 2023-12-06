<?php
include("./conexion.php");
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombreInstitucion"]) and !empty($_POST["nombreProyecto"]) and!empty($_POST["numPersonas"]) and!empty($_POST["archivos"])){
        $id=$_POST["id"];
        $nombreInstitucion=$_POST["nombreInstitucion"];
        $nombreProyecto=$_POST["nombreProyecto"];
        $numPersonas=$_POST["numPersonas"];
        $archivos=$_POST["archivos"];
        $sql=$conexion->query("update feria set nombreInstitucion='$nombreInstitucion',nombreProyecto='$nombreProyecto',numPersonas='$numPersonas',archivos='$archivos'where id='$id'");
        if($sql==1){
        if($sql==1){
            header("location:administrador.php");
        }else{
          echo"<div class='alert-danger'>Error al modificar producto</div>";  
        }
    }else{
        echo "<div class='alert-warning'<campos vacios</div>";
    }
}
}
?>
