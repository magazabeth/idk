<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="programa en php con mis datos">
    <title>Mi primer programa en php con mis datos</title>
</head>

<body>

    <div>
        <?php
        $nombre = "giovany";
        $edad = 17;

        echo "<h1>hola mundo, soy $nombre y este es mi primer programa en php, tengo $edad</h1>"

        ?>
    </div>


</body>

<style>
    body {
        background-color: aliceblue;
        text-align: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    div {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;

    }
</style>

</html>