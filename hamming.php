<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamming</title>
</head>
<body>
    <?php

    require  'auxiliar.php';
    $cadena1 = trim($_GET['cadena1']);
    $cadena2 = trim($_GET['cadena2']);
    $solucion = hamming($cadena1, $cadena2)
    ?>
    
</body>
</html>