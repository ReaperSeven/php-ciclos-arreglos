<html>

<head>
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 5</h1>
    <p>Elaborar una tabla en HTML que tenga un número de filas y columnas determinadas según los valores ingresados
        desde un formulario, utilizar ambas estructuras cíclicas: for - while.</p>

    <form action="ejercicio5.php" method="POST">
        <label>Ingrese el número de filas</label><br>
        <input type="number" name="numeroFilas"><br>
        <label>Ingrese el número de columnas</label><br>
        <input type="number" name="numeroColumnas"><br>
        <button type="submit">Generar</button><br>

        <?php
            if (!empty($_POST['numeroFilas'] and $_POST['numeroColumnas'])) {
                echo "<table>";
                echo "<style>table, th, td {border: 1px solid black;}</style>";
                echo "<tr>";
                    for ($i=1; $i <= $_POST['numeroFilas']; $i++) { 
                    echo "<th> Columna ".$i."</th>";
                    }
                echo "</tr>";

                for ($i=0; $i <= $_POST['numeroFilas'] ; $i++) { 
                    echo "<td>";
                    echo "</td>";
                }
                echo "</table>";
            }
        ?>
    </form>
</body>

</html>