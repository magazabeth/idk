<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, content=" width=device-width, initial-scale=1.0">
    <meta name="description" content="Este es el código que une las operaciones de las 10 figuras en una sola página">
    <link rel="stylesheet" href="style.css">
    <title>10 figuras, una página</title>
    <script>
        function updateLabels() {
            const operacion = document.querySelector('select[name="operacion"]').value;
            const label1 = document.querySelector('label[for="opt1"]');
            const label2 = document.querySelector('label[for="opt2"]');
            const opt2Input = document.querySelector('input[name="opt2"]');

            switch (operacion) {
                case 'areaTriangulo':
                    label1.textContent = "Base del triángulo:";
                    label2.textContent = "Altura del triángulo:";
                    opt2Input.style.display = 'inline'; // Mostrar el segundo input
                    break;
                case 'areaCuadrado':
                    label1.textContent = "Lado del cuadrado:";
                    label2.textContent = "";
                    opt2Input.style.display = 'none'; // Ocultar el segundo input
                    break;
                case 'areaRectangulo':
                    label1.textContent = "Base del rectángulo:";
                    label2.textContent = "Altura del rectángulo:";
                    opt2Input.style.display = 'inline'; // Mostrar el segundo input
                    break;
                default:
                    label1.textContent = "";
                    label2.textContent = "";
                    opt2Input.style.display = 'none'; // Ocultar el segundo input
            }
        }
    </script>
</head>

<body>
    <header class="header">
        <h3>Elija que quiere Calcular</h3>
    </header>

    <main class="main">
        <section class="calculo">
            <form method="post">
                <span class="titulo">Selecciona una operación:</span>
                <select name="operacion" onchange="updateLabels()" required>
                    <option value="areaTriangulo">Área del triángulo</option>
                    <option value="areaCuadrado">Área del cuadrado</option>
                    <option value="areaRectangulo">Área del rectángulo</option>
                </select>

                <label for="opt1">Base:</label>
                <input type="number" name="opt1" required>
                <label for="opt2">Altura:</label>
                <input type="number" name="opt2" required style="display: none;">

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
                        default:
                            echo "Operación no válida.";
                    }
                }
                ?>
            </div>
        </section>
    </main>

    <script>
        // Llama a la función una vez al cargar para establecer las etiquetas iniciales
        updateLabels();
    </script>
</body>

</html>