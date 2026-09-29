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

 si sale el numero 15, la niña bonita, que ponga en la celda BINGO!
    $numero1 =  rand(1,200);
    $letra1 = "MOCO";
    $numero2 = 666;
    ?>
    <table border="1px">
        <tr><td><?php echo $letra1?></td><td><?php echo rand(1,100)?></td><td><?php echo rand(1,100)?></td></tr>
        <tr><td><?php echo $numero2?></td><td><?php echo $numero1?></td><td><?php echo rand(1,100)?></td></tr>
        <tr><td><?php echo rand(1,100)?></td><td><?php echo rand(1,100)?></td><td><?php echo rand(1,100)?></td></tr>
    </table>



</body>
</html>