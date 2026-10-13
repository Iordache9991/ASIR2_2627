<?php  var_export($_POST) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
            $boton = $_POST['boton'];
            $acumulador = 0;
            $producto = 1;
            $acumuladorPar = 0;
            for ($i=1; $i <= $_POST['numero']; $i++) //$i++ es lo mismo que $i=$i+1;
            {
                echo $i." ";
                $acumulador = $acumulador + $i;
                $producto = $producto * $i;
                // es par????
                if ($i % 2 == 0)
                {
                    $acumuladorPar = $acumuladorPar + $i;
                }
            }

            if ($boton==="sumatorio")
            {
                echo "El resultado es: ".$acumulador;
            }
            else if ($boton==="producto")
            {
                echo "El resultado es: ".$producto;
            }
            else if ($boton==="sumatorioPar")
            {
                echo "El resultado es: ".$acumuladorPar;
            }
    ?>
    </div>
</body>
</html>