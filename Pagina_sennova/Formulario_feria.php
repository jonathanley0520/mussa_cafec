<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario FERIA EMPRESARIAL</title>
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
        <h1>Formulario FERIA EMPRESARIAL</h1>
        <form class="feriaEmpresarialForm" action="./Empresarial.php" method="POST"  enctype="multipart/form-data">
            <label for="nombreInstitucion">Nombre de la Institución de Participación:</label>
            <input type="text" id="nombreInstitucion" name="nombreInstitucion" required>

            <label for="nombreProyecto">Nombre del Proyecto:</label>
            <input type="text" id="nombreProyecto" name="nombreProyecto" required>

            <label for="numPersonas">Número de Personas en el Proyecto:</label>
            <input type="number" id="numPersonas" name="numPersonas" required>
            <p style="font-size: 12px; color: #888;">Máximo 2 personas en el estand por proyecto</p>

            <label for="archivos">Subir Archivos (PDF, Word, PowerPoint, máx. 20MB cada uno):</label>
            <input type="file" id="archivos" name="archivos" accept=".pdf,.doc,.docx,.ppt,.pptx">
            
            <button type="submit"  href="./poster/ <?php $nombre ?>"><?php $nombre ?>Enviar</button>
        </form>

        <div id="resultado"></div>
    </div>

    <script>
        const formulario = document.getElementById('feriaEmpresarialForm');
        formulario.addEventListener('submit', function(event) {
            event.preventDefault();
            const numPersonas = parseInt(document.getElementById('numPersonas').value);
            if (numPersonas > 2) {
                alert('Máximo 2 personas en el estand por proyecto.');
                return;
            }
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
