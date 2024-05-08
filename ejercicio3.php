<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <p>Elaborar un grupo de botones de radio de manera dinámica para seleccionar el trimestre de la formación
            de un grupo ADSO (desde el 1 hasta el 9), utilizar la estructura for.</p>

        <form action="ejercicio3.php">
            <p>Seleccione el trimetre de formación</p>
            <?php
                for ($i=1; $i < 10; $i++) { 
                    echo '<input type="radio" name="trimestre" value="' . $i . '">';
                    echo '<label>Trimestre ' . $i . '</label>';
                    echo '<br>';
                }
            ?>
        </form>

        <a href="index.html">Inicio</a>
    </body>
</html>