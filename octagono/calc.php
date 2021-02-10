<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Resultado</title>
</head>
<body>
    <header class="container">
        <div class="box">
            <h1>Resultado</h1>
        </div>
    </header>
    <div class="container">
        <h3>El Área del Octógono es:</h3>
        <?php
        $lados= $_POST['lados'];
        if($lados=="") echo '<h2>Lo sentimos, no ha ingresado ningún valor</h2>';

        else if ($lados<=0) echo '<h2>Lo sentimos, no están permitidos negativos o el cero</h2>';

        else {
        $per = $lados*8;
        $ap = $lados/0.82842;
        echo '<br>'.'Perímetro: '.$per.'<br><br>';
        echo 'Apotema: '.number_format((float)$ap, 2, '.', '').'<br><br>';
        echo 'Area: '.number_format((float)($per*$ap)/2, 2, '.', '').'<br><br>';
        }
        ?>
    </div>
    
    <footer class="container">
        <h4>Nota: Se aproximaron los valores a la centésima con la finalidad de hacer más legible el resultado</h4>
    </footer>
</body>
</html>