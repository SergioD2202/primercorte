<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Calculo del octagono</title>
</head>
<body>
    <header class="container center-text">
        <div class="box">
        <h1>Calculo de area del Octógono</h1>
        </div>
    </header>

    <section class="container grid-2">
        <article>
            <div class="image"> <img src="octagono-trazo.gif" alt="octagono.gif"></div>
            <div class="text">
                <div class="box center-text"><h2>¿Cómo se calcula?</h2></div>
                <p class="m">
                    Para calcular el área de un Octógono regular se necesita la longitud de los lados,
                    luego de eso se calcula el apotema del Octógono mediante la fórmula correspondiente: <br><br>

                    <h3>ap=l/2(tg(22.5))</h3> <br> Donde l es la longitud de los lados. <br> <br>

                    Una vez eso calculado, se calcula el perímetro del Octógono (que al ser regular sería la longitud de un lado 
                    multiplicado por 8) y se realiza la siguiente operación: <br> <br>

                    <h3>A=P*ap/2</h3> <br> donde A es área, P es perímetro y ap es el apotema.
                </p>
            </div>
        </article>
    </section>

    <div class="container">

    <div class="box center-text"><h2>Cálculo</h2></div>
    
    <form action="calc.php" method="post" class="grid" >

        <label class="m">
            <span>Longitud de los lados</span> 
            <input type="number" value="" name="lados" id="lados" step=".01">
        </label>

        <input type="submit" class="m">

    </form>

    </div>

    
    
</body>
</html>