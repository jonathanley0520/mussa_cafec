<?php
include("./conexion.php");
$id = $_GET["id-robotica"];

$sql = $conexion->query("SELECT * FROM robotica  WHERE id = $id");

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

<form class="posterForm" method="POST">
    <h5 class="EditarInformacion"></h5>
    <input type="hidden" name="id" value="<?= $_GET["id-robotica"] ?>">


    <?php
    include("./editor4.php");
    while ($datos = $sql->fetch_object()) {
    ?>
        
        <label for="categoria">Categoría de Participación:</label>
        <select id="categoria" name="categoria" required>
            <option value="seleccione"<?php if ($datos->categoria == 'seleccione') echo ' selected'; ?>>Seleccione</option>
            <option value="seguidorLinea"<?php if ($datos->categoria == 'seguidorLinea') echo ' selected'; ?>>Robot Seguidor de Línea</option>
            <option value="miniSumo"<?php if ($datos->categoria == 'miniSumo') echo ' selected'; ?>>Mini Sumo</option>
            <option value="futbolero"<?php if ($datos->categoria == 'futbolero') echo ' selected'; ?>>Futbolero</option>
            <option value="deServicio"<?php if ($datos->categoria == 'deServicio') echo ' selected'; ?>>De Servicio</option>
        </select>


        <label for="nombreInstitucion">nombreInstitucion:</label>
        <input type="text" id="nombreInstitucion" name="nombreInstitucion" value="<?= $datos->nombreInstitucion?>">

        <label for="nombreParticipantes">nombreParticipantes:</label>
        <input type="text" id="nombreParticipantes" name="nombreParticipantes" value="<?= $datos->nombreParticipantes ?>">

        <label for="correo">correo:</label>
        <input type="text" id="correo" name="correo"value="<?=$datos->correo ?>">


        <label for="telefono">telefono:</label>
        <input type="text" id="telefono" name="telefono"value="<?=$datos->telefono?>">
         
    <?php } ?>

    <input type="file" id="archivos" name="archivos" accept=".pdf,.doc,.docx,.ppt,.pptx" multiple>
    <button type="submit" class="btn btn-primary" name="btnregistrar" href="./administrador.php" value="ok">EDITAR</button>
</form>
</body>
</html>

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
        