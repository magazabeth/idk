<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Este es el código que une las operaciones de las 10 figuras en una sola página">
    <link rel="stylesheet" href="style.css">
    <title>10 figuras, una págima</title>
</head>

<body>
    <header class="header">
        <h3>Elija que quiere Calcular</h3>
    </header>

    <main class="main">

        <section class="calculo">
            <form method="post">

                <span class="titulo">Selecciona una operación:</span>
                <select name="operacion" id="" required>
                    <option value="areaTriangulo">Area del triangulo</option>
                    <option value="areaCuadrado">Area del cuadrado</option>
                    <option value="areaRectangulo">Area del rectangulo</option>
                </select>

                <label for="opt1"><?php echo $label1; ?></label>
                <input type="opt1" name="opt1" required>
                <label for="opt2"><?php echo $label2; ?></label>
                <input type="opt2" name="opt2" required>

                <input type="submit" value="calcular" class="calcular">

            </form>

            <div class="resultado">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $operacion = $_POST['operacion'];
                    $opt1 = $_POST['opt1'];
                    $opt2 = isset($_POST['opt2']) ? $_POST['opt2'] : null;
                    $resultado = 0;

                    switch ($operacion) {
                        case 'areaTriangulo':
                            if ($opt2 === null) {
                                echo "Para calcular el área del triángulo, necesitas ingresar la altura.";
                            } else {
                                $resultado = ($opt1 * $opt2) / 2;
                                echo "El área del triángulo es: $resultado";
                            }
                            break;
                        case 'areaCuadrado':
                            $resultado = $opt1 * $opt1;
                            echo "El área del cuadrado es: $resultado";
                            break;
                        case 'areaRectangulo':
                            if ($opt2 === null) {
                                echo "Para calcular el área del rectángulo, necesitas ingresar la altura.";
                            } else {
                                $resultado = $opt1 * $opt2;
                                echo "El área del rectángulo es: $resultado";
                            }
                            break;
                        case 'areaCirculo':
                            $resultado = pi() * ($opt1 * $opt1);
                            echo "El área del círculo es: $resultado";
                            break;
                        default:
                            echo "Operación no válida.";
                    }
                }
                ?>
            </div>
        </section>

    </main>

</body>

</html>