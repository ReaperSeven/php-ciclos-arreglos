<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <p>Elaborar una tabla HTML que contenga las columnas “número, nombre, teléfono, dirección y correo”, el número
        de filas de la tabla será dinámico, de acuerdo a un número ingresado desde un formulario, utilizar la
        estructura for.</p><br>

        <form action="ejercicio1.php" method="post">
            <label for="filasTabla">Ingrese el número de filas que desea</label><br>
            <input type="number" name="filasTabla" id="filasTabla">
            <button type="submit">Generar</button>

            <?php
            if(!empty($_POST['filasTabla'])) {
                echo "<table>";
                echo "<style>table, th, td {border: 1px solid black;}</style>";
                echo " <tr>";
                echo "<th>Número</th>";
                echo "<th>Nombre</th>";
                echo "<th>Teléfono</th>";
                echo "<th>Dirección</th>";
                echo "<th>Correo</th>";

                for($i=1; $i<= $_POST['filasTabla']; $i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                echo "<td> </td>";
                }
            }
            ?>
        </form><br>

        <a href="index.html">Inicio</a>
    </body>
</html>