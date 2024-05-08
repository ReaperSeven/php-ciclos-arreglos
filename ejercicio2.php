<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <p>Elaborar un control select para cargar dinámicamente los años desde el 1900 hasta el 2024,
        utilizar la estructura while.</p>

        <select name="anhos">
            <?php
                $anhos = 1900;
                $anhoActual = idate("Y"); //idate formatea una fecha/hora local como un entero 
                //Mientras anhos sea menor al anhoActual 
                while ($anhos <= $anhoActual) {
                    echo "<option>$anhos</option>";
                    $anhos++;
                }
            ?>
        </select><br>

        <a href="index.html">Inicio</a>
    </body>
    
</html>