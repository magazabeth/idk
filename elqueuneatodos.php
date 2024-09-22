<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Este es el código que une las operaciones de las 20 figuras en una sola página">
    <link rel="stylesheet" href="style.css">
    <title>20 Figuras, una página</title>
    <script>
        function updateLabels() {
            const operacion = document.querySelector('select[name="operacion"]').value;
            const label1 = document.querySelector('label[for="opt1"]');
            const label2 = document.querySelector('label[for="opt2"]');
            const opt1Input = document.querySelector('input[name="opt1"]');
            const opt2Input = document.querySelector('input[name="opt2"]');

            switch (operacion) {
                case 'seleccionar':
                    label1.textContent = "";
                    label2.textContent = "";
                    opt1Input.style.display = 'none';
                    opt2Input.style.display = 'none';
                    break;

                case 'areaTriangulo':
                    label1.textContent = "Base del triángulo:";
                    label2.textContent = "Altura del triángulo:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'areaCuadrado':
                    label1.textContent = "Lado del cuadrado:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'areaRectangulo':
                    label1.textContent = "Base del rectángulo:";
                    label2.textContent = "Altura del rectángulo:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'areaCirculo':
                    label1.textContent = "Radio del círculo:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'areaTrapecio':
                    label1.textContent = "Base mayor del trapecio:";
                    label2.textContent = "Base menor del trapecio:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'areaRombo':
                    label1.textContent = "Diagonal mayor:";
                    label2.textContent = "Diagonal menor:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'areaParalelogramo':
                    label1.textContent = "Base del paralelogramo:";
                    label2.textContent = "Altura del paralelogramo:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'areaElipse':
                    label1.textContent = "Semi-eje mayor:";
                    label2.textContent = "Semi-eje menor:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'perimetroCuadrado':
                    label1.textContent = "Lado del cuadrado:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'perimetroRectangulo':
                    label1.textContent = "Base del rectángulo:";
                    label2.textContent = "Altura del rectángulo:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'perimetroTriangulo':
                    label1.textContent = "Lado 1:";
                    label2.textContent = "Lado 2:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'perimetroHexagono':
                    label1.textContent = "Lado del hexágono:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'areaHexagono':
                    label1.textContent = "Lado del hexágono:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'areaPentagono':
                    label1.textContent = "Lado del pentágono:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'areaRomboide':
                    label1.textContent = "Base del romboide:";
                    label2.textContent = "Altura del romboide:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'perimetroPentagono':
                    label1.textContent = "Lado del pentágono:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'perimetroCirculo':
                    label1.textContent = "Radio del círculo:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'perimetroRombo':
                    label1.textContent = "Lado del rombo:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'perimetroTrapecio':
                    label1.textContent = "Base mayor:";
                    label2.textContent = "Base menor:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                // Nuevas figuras
                case 'areaCuadradoMayor':
                    label1.textContent = "Lado del cuadrado mayor:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'areaTrianguloEquilatero':
                    label1.textContent = "Lado del triángulo equilátero:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                case 'perimetroTrapecioIso':
                    label1.textContent = "Base mayor:";
                    label2.textContent = "Base menor:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'areaRomboideAlto':
                    label1.textContent = "Base del romboide:";
                    label2.textContent = "Altura del romboide:";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'inline';
                    break;

                case 'areaCirculoGrande':
                    label1.textContent = "Radio del círculo grande:";
                    label2.textContent = "";
                    opt1Input.style.display = 'inline';
                    opt2Input.style.display = 'none';
                    break;

                default:
                    label1.textContent = "";
                    label2.textContent = "";
                    opt1Input.style.display = 'none';
                    opt2Input.style.display = 'none';
            }
        }
    </script>
</head>

<body>
    <header class="header">
        <h3>Elija qué quiere calcular</h3>
    </header>

    <main class="main">
        <section class="calculo">
            <form method="post">
                <span class="titulo">Selecciona una operación:</span>
                <select name="operacion" onchange="updateLabels()" required>
                    <option value="seleccionar" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'seleccionar') echo 'selected'; ?>>Seleccione una opción</option>
                    <option value="areaTriangulo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaTriangulo') echo 'selected'; ?>>Área del triángulo</option>
                    <option value="areaCuadrado" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaCuadrado') echo 'selected'; ?>>Área del cuadrado</option>
                    <option value="areaRectangulo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaRectangulo') echo 'selected'; ?>>Área del rectángulo</option>
                    <option value="areaCirculo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaCirculo') echo 'selected'; ?>>Área del círculo</option>
                    <option value="areaTrapecio" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaTrapecio') echo 'selected'; ?>>Área del trapecio</option>
                    <option value="areaRombo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaRombo') echo 'selected'; ?>>Área del rombo</option>
                    <option value="areaParalelogramo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaParalelogramo') echo 'selected'; ?>>Área del paralelogramo</option>
                    <option value="areaElipse" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaElipse') echo 'selected'; ?>>Área de la elipse</option>
                    <option value="areaHexagono" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaHexagono') echo 'selected'; ?>>Área del hexágono</option>
                    <option value="areaPentagono" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaPentagono') echo 'selected'; ?>>Área del pentágono</option>
                    <option value="areaRomboide" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaRomboide') echo 'selected'; ?>>Área del romboide</option>
                    <option value="perimetroCuadrado" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroCuadrado') echo 'selected'; ?>>Perímetro del cuadrado</option>
                    <option value="perimetroRectangulo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroRectangulo') echo 'selected'; ?>>Perímetro del rectángulo</option>
                    <option value="perimetroTriangulo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroTriangulo') echo 'selected'; ?>>Perímetro del triángulo</option>
                    <option value="perimetroHexagono" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroHexagono') echo 'selected'; ?>>Perímetro del hexágono</option>
                    <option value="perimetroPentagono" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroPentagono') echo 'selected'; ?>>Perímetro del pentágono</option>
                    <option value="perimetroCirculo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroCirculo') echo 'selected'; ?>>Perímetro del círculo</option>
                    <option value="perimetroRombo" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroRombo') echo 'selected'; ?>>Perímetro del rombo</option>
                    <option value="perimetroTrapecio" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroTrapecio') echo 'selected'; ?>>Perímetro del trapecio</option>
                    <option value="areaCuadradoMayor" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaCuadradoMayor') echo 'selected'; ?>>Área del cuadrado mayor</option>
                    <option value="areaTrianguloEquilatero" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaTrianguloEquilatero') echo 'selected'; ?>>Área del triángulo equilátero</option>
                    <option value="perimetroTrapecioIso" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'perimetroTrapecioIso') echo 'selected'; ?>>Perímetro del trapecio isósceles</option>
                    <option value="areaRomboideAlto" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaRomboideAlto') echo 'selected'; ?>>Área del romboide alto</option>
                    <option value="areaCirculoGrande" <?php if (isset($_POST['operacion']) && $_POST['operacion'] === 'areaCirculoGrande') echo 'selected'; ?>>Área del círculo grande</option>
                </select>

                <label for="opt1">Base:</label>
                <input type="number" name="opt1"  style="display: none;" value="<?php echo isset($_POST['opt1']) ? htmlspecialchars($_POST['opt1']) : ''; ?>">
                <label for="opt2">Altura:</label>
                <input type="number" name="opt2" style="display: none;" value="<?php echo isset($_POST['opt2']) ? htmlspecialchars($_POST['opt2']) : ''; ?>">

                <input type="submit" value="calcular" class="calcular">
            </form>

            <div class="resultado">
                <?php
            
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $operacion = $_POST['operacion'];
                    $opt1 = (float)$_POST['opt1'];
                    $opt2 = isset($_POST['opt2']) ? (float)$_POST['opt2'] : null;
                    $resultado = 0;

                    switch ($operacion) {
                        case 'seleccionar':
                            echo "Debe de seleccionar una opción.";
                            break;

                        case 'areaTriangulo':
                            if ($opt2 === null || $opt1 === null) {
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

                        case 'areaTrapecio':
                            if ($opt2 === null) {
                                echo "Para calcular el área del trapecio, necesitas ingresar la base menor.";
                            } else {
                                // Aquí podrías añadir otro input para la base menor.
                                echo "El área del trapecio (con base menor) no está implementada.";
                            }
                            break;

                        case 'areaRombo':
                            if ($opt2 === null) {
                                echo "Para calcular el área del rombo, necesitas ingresar la diagonal menor.";
                            } else {
                                $resultado = ($opt1 * $opt2) / 2;
                                echo "El área del rombo es: $resultado";
                            }
                            break;

                        case 'areaParalelogramo':
                            if ($opt2 === null) {
                                echo "Para calcular el área del paralelogramo, necesitas ingresar la altura.";
                            } else {
                                $resultado = $opt1 * $opt2;
                                echo "El área del paralelogramo es: $resultado";
                            }
                            break;

                        case 'areaElipse':
                            if ($opt2 === null) {
                                echo "Para calcular el área de la elipse, necesitas ingresar el semi-eje menor.";
                            } else {
                                $resultado = pi() * $opt1 * $opt2;
                                echo "El área de la elipse es: $resultado";
                            }
                            break;

                        case 'areaHexagono':
                            $resultado = (3 * sqrt(3) / 2) * ($opt1 * $opt1);
                            echo "El área del hexágono es: $resultado";
                            break;

                        case 'areaPentagono':
                            $resultado = (5 / 4) * ($opt1 * $opt1) / tan(M_PI / 5);
                            echo "El área del pentágono es: $resultado";
                            break;

                        case 'areaRomboide':
                            if ($opt2 === null) {
                                echo "Para calcular el área del romboide, necesitas ingresar la altura.";
                            } else {
                                $resultado = $opt1 * $opt2;
                                echo "El área del romboide es: $resultado";
                            }
                            break;

                        case 'perimetroCuadrado':
                            $resultado = 4 * $opt1;
                            echo "El perímetro del cuadrado es: $resultado";
                            break;

                        case 'perimetroRectangulo':
                            if ($opt2 === null) {
                                echo "Para calcular el perímetro del rectángulo, necesitas ingresar la altura.";
                            } else {
                                $resultado = 2 * ($opt1 + $opt2);
                                echo "El perímetro del rectángulo es: $resultado";
                            }
                            break;

                        case 'perimetroTriangulo':
                            // Aquí necesitarías tres lados; puedes implementarlo según lo que necesites.
                            echo "El cálculo del perímetro del triángulo no está implementado.";
                            break;

                        case 'perimetroHexagono':
                            $resultado = 6 * $opt1;
                            echo "El perímetro del hexágono es: $resultado";
                            break;

                        case 'perimetroPentagono':
                            $resultado = 5 * $opt1;
                            echo "El perímetro del pentágono es: $resultado";
                            break;

                        case 'perimetroCirculo':
                            $resultado = 2 * pi() * $opt1;
                            echo "El perímetro del círculo es: $resultado";
                            break;

                        case 'perimetroRombo':
                            $resultado = 4 * $opt1;
                            echo "El perímetro del rombo es: $resultado";
                            break;

                        case 'perimetroTrapecio':
                            if ($opt2 === null || $opt1 < $opt2) {
                                echo "Para calcular el perímetro del trapecio, necesitas ingresar la base menor.";
                            } else {
                                $resultado = 2 * ($opt1 + $opt2);
                                echo "El perímetro del trapecio es: $resultado";
                                
                            }
                            break;

                        // Nuevas figuras
                        case 'areaCuadradoMayor':
                            $resultado = $opt1 * $opt1; // O cualquier cálculo que desees
                            echo "El área del cuadrado mayor es: $resultado";
                            break;

                        case 'areaTrianguloEquilatero':
                            $resultado = ($opt1 * $opt1 * sqrt(3)) / 4; // Fórmula del área
                            echo "El área del triángulo equilátero es: $resultado";
                            break;

                        case 'perimetroTrapecioIso':
                            if ($opt2 === null) {
                                echo "Para calcular el perímetro del trapecio isósceles, necesitas ingresar la base menor.";
                            } else {
                                // Aquí podrías añadir los lados no paralelos.
                                echo "El cálculo del perímetro del trapecio isósceles no está implementado.";
                            }
                            break;

                        case 'areaRomboideAlto':
                            if ($opt2 === null) {
                                echo "Para calcular el área del romboide alto, necesitas ingresar la altura.";
                            } else {
                                $resultado = $opt1 * $opt2;
                                echo "El área del romboide alto es: $resultado";
                            }
                            break;

                        case 'areaCirculoGrande':
                            $resultado = pi() * ($opt1 * $opt1);
                            echo "El área del círculo grande es: $resultado";
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
