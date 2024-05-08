<html>

<head>
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 5</h1>
    <p>Elaborar una tabla en HTML que tenga un número de filas y columnas determinadas según los valores ingresados
        desde un formulario, utilizar ambas estructuras cíclicas: for - while.</p>

    <a href="index.html">Inicio</a>

    <form action="ejercicio5.php" method="POST">
        <label>Ingrese el número de filas</label><br>
        <input type="number" name="numeroFilas"><br>
        <label>Ingrese el número de columnas</label><br>
        <input type="number" name="numeroColumnas"><br>
        <button type="submit">Generar</button><br>

        <?php
            if (!empty($_POST['numeroFilas']) and !empty($_POST['numeroColumnas'])) {
                $numeroFilas = $_POST['numeroFilas'];
                $numeroColumnas = $_POST['numeroColumnas'];

                echo "<table>";
                echo "<style>table, th, td {border: 1px solid black;}</style>";
                echo "<tr>";
                for ($i=1; $i <= $numeroColumnas; $i++) { 
                    echo "<th>Columna ".$i."</th>";
                }
                echo "</tr>";

                $posFila = 1;

                while ($posFila <= $numeroFilas) {
                    echo "<tr>";
                    $posColumna = 1;
                    while ($posColumna <= $numeroColumnas) {
                        echo "<td>F".$posFila." C".$posColumna."</td>";
                        $posColumna++;
                    }
                $posFila++;
                }
            }
        ?>
    </form>
</body>

</html>