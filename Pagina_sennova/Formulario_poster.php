<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POSTER</title>
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
        <h1>Formulario POSTER</h1>
        <form class="posterForm"  action="./POSTER.PHP" enctype="multipart/form-data" method="POST">
            <label for="nombreInstitucion">Nombre de la Institución de Participación:</label>
            <input type="text" id="nombreInstitucion" name="nombreInstitucion" required>

            <label for="nombrePonente">Nombre Ponente(s):</label>
            <input type="text" id="nombrePonente" name="nombrePonente" required>

            <label for="correo">Correo de Contacto:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="telefono">Número de Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="tituloProyecto">Título del Proyecto:</label>
            <input type="text" id="tituloProyecto" name="tituloProyecto" required>

            <label for="archivos">Subir Archivos (PDF, Word, PowerPoint, máx. 20MB cada uno):</label>
            <input type="file" id="archivos" name="archivos" accept=".pdf,.doc,.docx,.ppt,.pptx" multiple>
            <button type="submit"  href="./sennova/" <?php $nombre ?><?php $nombre ?> >Enviar</button> 
        </form>

        <div id="resultado"></div>
    </div>

    <script>
        const formulario = document.getElementById('posterForm');
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
