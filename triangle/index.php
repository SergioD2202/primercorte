<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Triangulo</title>
</head>
<body>
    <div class="container">
        <h1>Calculo del triangulo</h1>

        <h2>Lado A: 3</h2>

        <h2>Lado B: 4</h2>

    
    
        <?php
        //Calculo de hipotenusa
        $a=pow(3,2);
        $b=pow(4,2);
        echo '<h2> Hipotenusa:'.sqrt($a+$b).'</h2>';
        ?>
    </div>

    <footer class="container">
        <h3>Renderizado del resultado por <strong>php</strong></h3>
    </footer>
</body>
</html>