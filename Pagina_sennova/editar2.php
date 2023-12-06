<?php
include("./conexion.php");
$id = $_GET["id-ponente"];

$sql = $conexion->query("SELECT * FROM ponente  WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>

<form class="ponenteForm" method="POST">
    <h5 class="EditarInformacion"></h5>
    <input type="hidden" name="id" value="<?= $_GET["id-ponente"] ?>">

    <?php
    include("./editor2.php");
    while ($datos = $sql->fetch_object()) {
       
    ?>

        <label for="ejeTematico">ejeTematico:</label>
        <input type="text" id="ejeTematico" name="ejeTematico" value="<?= $datos->ejeTematico ?>">

        <label for="Institucion">Institucion:</label>
        <input type="text" id="Institucion" name="InstituciónParticipación" value="<?= $datos->InstituciónParticipación ?>">

        <label for="Programa">Programa:</label>
        <input type="text" id="Programa" name="nombrePrograma" value="<?= $datos->nombrePrograma ?>">

        <label for="ficha">ficha:</label>
        <input type="text" id="ficha" name="fichaPrograma" value="<?= $datos->fichaPrograma ?>">

        <label for="nombre">nombre:</label>
        <input type="text" id="nombre" name="nombrePonente" value="<?= $datos->nombrePonente ?>">

        <label for="correo">correo:</label>
        <input type="text" id="correo" name="CorreoContacto" value="<?= $datos->CorreoContacto ?>">

        <label for="telefono">telefono:</label>
        <input type="text" id="telefono" name="NúmeroTeléfono" value="<?= $datos->NúmeroTeléfono?>">

        <label for="proyecto">proyecto:</label>
        <input type="text" id="proyecto" name="tituloProyecto" value="<?= $datos->tituloProyecto ?>">

        <label for="tipoproyecto">tipoproyecto:</label>
        <input type="text" id="tipoproyecto" name="tipoProyecto" value="<?= $datos->tipoProyecto ?>"> 
         
        <label for="archivos">Subir Archivos (PDF, Word, PowerPoint, máx. 20MB):</label>
        <input type="text" id="archivos" name="archivos" value="<?= $datos->archivos ?>">

        <?php } ?>
      <input type="file" id="archivos" name="archivos" accept=".pdf,.doc,.docx,.ppt,.pptx" multiple>
      <button type="submit" class="btn btn-segundary" name="btnregistrar" href="./administrador.php" value="ok">EDITAR</button>
    
</form>
<style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        #formulario {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #333;
        }

        select, input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        button {
            background-color: #39a900;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #resultado {
            margin-top: 20px;
        }
        </style>
</body>
</html>