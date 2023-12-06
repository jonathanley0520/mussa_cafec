<?php
include("./conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!empty($_POST)){
        $id = $_POST["id"];
        $categoria = $_POST["categoria"];
        $nombreInstitucion = $_POST["nombreInstitucion"];
        $nombreParticipantes = $_POST["nombreParticipantes"];
        $correo = $_POST["correo"];
        $telefono= $_POST["telefono"];
        // $archivos = $_FILE["archivos"];
        // Corrige la consulta SQL y añade comillas a los valores de texto
        $sql = $conexion->query("UPDATE robotica SET 
        categoria='$categoria' ,nombreInstitucion='$nombreInstitucion', nombreParticipantes='$nombreParticipantes', correo='$correo', telefono='$telefono' WHERE id='$id'");
        
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