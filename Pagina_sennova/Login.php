<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Estilos CSS para el formulario de inicio de sesión */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #login-box {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #007BFF;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
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
    <div id="login-box">
        <h1>Iniciar Sesión</h1>
        <form class=form  action="./loginconexion.php"method="POST">
            <input type="text" id="Email" name="correo" placeholder="correo" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
        <div id="resultado"></div>
    </div>

    <!-- <script>
        const loginForm = document.getElementById('Form');
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Aquí puedes agregar la lógica para verificar las credenciales del usuario
            // y mostrar mensajes de éxito o error en el div de resultado.
            const resultado = document.getElementById('resultado');
            resultado.innerHTML = 'Inicio de sesión exitoso.';
        });
    </script> -->
</body>
</html>
