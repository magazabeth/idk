<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora Simple</title>
</head>

<body>
    <h1>Calculadora Simple</h1>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required>
        <br>
        <label for="operacion">Selecciona una operación:</label>

            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            default:
                echo "Operación no válida.";
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>

</html>