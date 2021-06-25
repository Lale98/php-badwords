<?php 
    $testo = "La password per accedere al tuo profilo = codice";
    $_GET['censura'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php var_dump($testo) ?></h1>
    <h1>
        <?php
            $testo_modificato = str_replace($_GET['censura'], '***', $testo );
            var_dump($testo_modificato)
        ?>
    </h1>
</body>
</html>