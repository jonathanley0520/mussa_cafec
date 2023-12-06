<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Torneo de Robótica</title>
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
        <h1>Formulario Torneo de Robótica</h1>
        <form class="torneoRoboticaForm" action="./Robotica.php" method="POST">
            <label for="categoria">Categoría de Participación:</label>
            <select id="categoria" name="categoria" required>
                <option value="seleccione">Seleccione</option>
                <option value="seguidorLinea">Robot Seguidor de Línea</option>
                <option value="miniSumo">Mini Sumo</option>
                <option value="futbolero">Futbolero</option>
                <option value="deServicio">De Servicio</option>
            </select>

            <label for="nombreInstitucion">Nombre de la Institución de Participación:</label>
            <input type="text" id="nombreInstitucion" name="nombreInstitucion" required>

            <label for="nombreParticipantes">Nombre del Participante(s):</label>
            <input type="text" id="nombreParticipantes" name="nombreParticipantes" required>

            <label for="correo">Correo de Contacto:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="telefono">Número de Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <button type="submit">Enviar</button>
        </form>

        <div id="resultado"></div>
    </div>

    <script>
        const formulario = document.getElementById('torneoRoboticaForm');
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
