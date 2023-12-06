<?php
include("./conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!empty($_POST)){
        $id = $_POST["id"];
        $nombreInstitucion = $_POST["nombreInstitucion"];
        $nombrePonenten = $_POST["nombrePonenten"];
        $correo = $_POST["correo"];
        $telefono= $_POST["telefono"];
        $tituloProyecto = $_POST["tituloProyecto"];
        // $archivos = $_FILE["archivos"];
        // Corrige la consulta SQL y añade comillas a los valores de texto
        $sql = $conexion->query("UPDATE poster SET nombreInstitucion='$nombreInstitucion', nombrePonenten='$nombrePonenten', correo='$correo', telefono='$telefono',tituloProyecto='$tituloProyecto' WHERE id='$id'");
        
        if ($sql === TRUE) {
            header("Location: administrador.php");
        } else {
            echo "<div class='alert-danger'>Error al modificar producto</div>";
        }
    }
    else {
        echo "<div class='alert-warning'>Campos vacíos</div>";
    }
}
?>
