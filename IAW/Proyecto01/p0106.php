<!DOCTYPE html>
<html lang="en">
    <?php var_export($_POST);
    
    $resultado = 0;

    if ($_POST['op']=='+')
    {
        $resultado = $_POST['n1'] + $_POST['n2'];
    }
    else if ($_POST['op']=='-')
    {
        $resultado = $_POST['n1'] - $_POST['n2'];
    }
    else if ($_POST['op']=='x')
    {
        $resultado = $_POST['n1'] * $_POST['n2'];
    }
    else if ($_POST['op']=='/')
    {
        if ($_POST['n2']=='0')
        {
            $resultado=" no se puede dividir entre cero";
        }
        else
        {
            $resultado = $_POST['n1'] / $_POST['n2'];
        }
        
    }

    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "el resultado es:". $resultado ?></h1>
</body>
</html>