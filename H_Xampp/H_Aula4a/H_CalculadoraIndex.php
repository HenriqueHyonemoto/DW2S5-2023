<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <title>Praticando - Calculadora média</title>
</head>

<body>
    <div class="container">
        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Se o formulário foi enviado, inclui o arquivo do resultado
            include 'H_ResultadoMedia.php';
        } else {
            // Se o formulário ainda não foi enviado, inclui o arquivo do formulário
            include 'H_Calculadora.php';
        }
        ?>
    </div>
</body>

</html>