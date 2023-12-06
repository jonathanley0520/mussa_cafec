<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ponente</title>
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
</head>
<body>
    <div id="formulario">
        <h1>Formulario Ponente</h1>
        <form class="ponenteForm" action="./ponente.php" enctype="multipart/form-data" method="POST">
            <label for="ejeTematico">Eje Temático:</label>
            <input type="text" id="ejeTematico" name="ejeTematico" required>

            <label for="institucion">Institución de Participación:</label>
            <select id="institucion" name="institucion" required>
                <option value="seleccione">Seleccione</option>
                <option value="SENA">SENA</option>
                <option value="externo">Externo</option>
            </select>

            <div id="datosSENA" style="display: none;">
                <label for="nombrePrograma">Nombre del Programa:</label>
                <input type="text" id="nombrePrograma" name="nombrePrograma">

                <label for="fichaPrograma">Ficha del Programa:</label>
                <input type="text" id="fichaPrograma" name="fichaPrograma">
            </div>

            <label for="nombrePonente">Nombre Ponente(s):</label>
            <input type="text" id="nombrePonente" name="nombrePonente" required>

            <label for="correo">Correo de Contacto:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="telefono">Número de Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="tituloProyecto">Título del Proyecto:</label>
            <input type="text" id="tituloProyecto" name="tituloProyecto" required>

            <label for="tipoProyecto">Tipo de Proyecto:</label>
            <select id="tipoProyecto" name="tipoProyecto" required>
                <option value="seleccione">Seleccione</option>
                <option value="Formativo">Formativo</option>
                <option value="Productivo">Productivo</option>
                <option value="SENNOVA">SENNOVA</option>
                <option value="Externo">Externo</option>
            </select>

            <label for="archivos">Subir Archivos (PDF, Word, PowerPoint, máx. 20MB): 
            </label>
            <input type="file" id="archivos" name="archivos" accept=".pdf,.doc,.docx,.ppt,.pptx" multiple>
            <button type="submit"  href="./ponente/" <?php $nombre ?><?php $nombre ?> >Enviar</button> 
        </form>

        <div id="resultado"></div>
    </div>

    <script>
        const institucionSelect = document.getElementById('institucion');
        const datosSENA = document.getElementById('datosSENA');

        institucionSelect.addEventListener('change', function() {
            if (institucionSelect.value === 'SENA') {
                datosSENA.style.display = 'block';
            } else {
                datosSENA.style.display = 'none';
            }
        });

        const formulario = document.getElementById('ponenteForm');
        formulario.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(formulario);

            // Puedes agregar aquí el código para enviar los datos al servidor
            // Por ejemplo, utilizando fetch o AJAX

            // Luego, muestra un mensaje de confirmación
            const resultado = document.getElementById('resultado');
            resultado.innerHTML = 'Formulario enviado correctamente.';
        });
    </script>
</body>
</html>
