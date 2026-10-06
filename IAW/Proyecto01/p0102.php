<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 MATRIZ 3x3 de numeros aletorios en 1 y 100. 

    <h1>ALBERTO F. es un tío de <?php echo rand(0,10) ?></h1>
    <?php

 //si sale el numero 15, la niña bonita, que ponga en la celda BINGO!
    $numero1 =  rand(1,200);
    if ($numero1 === 15)
    {
        $numero1 = "BINGO!";
    }
    $numero2 =  rand(1,200);
    if ($numero2 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero2 = "BINGO!";
    }
    $numero3 =  rand(1,200);
    if ($numero3 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero3 = "BINGO!";
    }
    $numero4 =  rand(1,200);
    if ($numero4 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero4 = "BINGO!";
    }
    $numero5 =  rand(1,200);
    if ($numero5 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero5 = "BINGO!";
    }
    $numero6 =  rand(1,200);
    if ($numero6 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero6 = "BINGO!";
    }
    $numero7 =  rand(1,200);
    if ($numero7 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero7 = "BINGO!";
    }
    $numero8 =  rand(1,200);
    if ($numero8 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero8 = "BINGO!";
    }
    $numero9 =  rand(1,200);
    if ($numero9 === 15)   // "15" == 15 (solo mira el valor)      === (mira que sea el mismo tipo)
    {
        $numero9 = "BINGO!";
    }
    ?>
    <table border="1px">
        <tr><td><?php echo $numero1?></td><td><?php echo $numero2?></td><td><?php echo $numero3?></td></tr>
        <tr><td><?php echo $numero4?></td><td><?php echo $numero5?></td><td><?php echo $numero6?></td></tr>
        <tr><td><?php echo $numero7?></td><td><?php echo $numero8?></td><td><?php echo $numero9?></td></tr>
    </table>



</body>
</html>