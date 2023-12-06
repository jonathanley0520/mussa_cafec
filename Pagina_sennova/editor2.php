<?php
include("./conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!empty($_POST)){
        $id = $_POST["id"];
        $ejeTematico = $_POST["ejeTematico"];
        $InstituciónParticipación = $_POST["InstituciónParticipación"];
        $nombrePrograma = $_POST["nombrePrograma"];
        $fichaPrograma = $_POST["fichaPrograma"];
        $nombrePonente = $_POST["nombrePonente"];
        $CorreoContacto = $_POST["CorreoContacto"];
        $NúmeroTeléfono = $_POST["NúmeroTeléfono"];
        $tituloProyecto = $_POST["tituloProyecto"];
        $tipoProyecto = $_POST["tipoProyecto"];
        // $archivos = $_FILE["archivos"];
        
        // Corrige la consulta SQL y añade comillas a los valores de texto
        $sql = $conexion->query("UPDATE ponente SET ejeTematico='$ejeTematico', InstituciónParticipación='$InstituciónParticipación', nombrePrograma='$nombrePrograma', fichaPrograma='$fichaPrograma', nombrePonente='$nombrePonente', CorreoContacto='$CorreoContacto', NúmeroTeléfono='$NúmeroTeléfono', tituloProyecto='$tituloProyecto', tipoproyecto='$tipoProyecto' WHERE id='$id'");
        
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
