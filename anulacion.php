<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Formulario de Configuración</h2>
    <form action="procesar_formulario.php" method="POST">
        <!-- Campo Usuario -->
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <!-- Campo Contraseña -->
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>

        <!-- Campo Código de Comercio -->
        <label for="codigo_comercio">Código de Comercio:</label>
        <input type="text" id="codigo_comercio" name="codigo_comercio" required>

        <!-- Campo Signature -->
        <label for="signature">Signature:</label>
        <input type="text" id="signature" name="signature" required>

        <!-- Combo Box Entorno -->
        <label for="entorno">Entorno:</label>
        <select id="entorno" name="entorno" required>
            <option value="test">Test</option>
            <option value="sandbox">Sandbox</option>
            <option value="produccion">Producción</option>
        </select>

        <!-- Botón de Enviar -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>