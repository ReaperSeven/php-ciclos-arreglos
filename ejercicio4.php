<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
        <p>Usar la etiqueta para encabezados de H1 hasta H6 para imprimir un título en diferentes tamaños,
            esto usando la estructura cíclica for</p>

        <?php
            for ($i=1; $i < 7; $i++) { 
                echo '<h'.$i.'> Hola, soy un titúlo de nivel '.$i.'</h'.$i.'>';
                echo '<br>';
            }
        ?>

        <a href="index.html">Inicio</a>
    </body>
</html>