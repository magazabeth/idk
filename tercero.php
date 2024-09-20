<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="pedir datos al usuario, almacenarlos en variables y imprimirlos en pantalla">
    <title>Tercer trabajo de php</title>
</head>
<style>
    .formulario {
        font-family: Arial, sans-serif;
        /* Fuente general del documento */
        background-color: #f4f4f4;
        /* Color de fondo */
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        /* Color de fondo del formulario */
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
        /* Incluye padding y border en el ancho total */
    }

    input[type="submit"] {
        background-color: #1c969d;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
        /* Color de fondo del botón al pasar el cursor */
    }
    h3,h4{
        text-align: center;
    }
</style>

<body>
    <div class="formulario">

        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="0" max="120" required>
            <br>
            <input type="submit" value="Enviar">
          
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = htmlspecialchars($_POST['edad']);

echo "<h3>Hola mundo</h3>";
echo "<h4>eres $nombre y tienes $edad años</h4>";
} 
    ?>
        </form>

    </div>

 

</body>

</html>