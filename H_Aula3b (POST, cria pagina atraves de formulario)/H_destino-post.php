<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Formulário</title>

    <body>
    <?php 
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_txt = filter_input(INPUT_POST, "cor-txt", FILTER_SANITIZE_SPECIAL_CHARS);
        $url_img = filter_input(INPUT_POST, "url-img", FILTER_SANITIZE_SPECIAL_CHARS);
        $url_lnk = filter_input(INPUT_POST, "url-lnk", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_bg = filter_input(INPUT_POST, "cor-bg", FILTER_SANITIZE_SPECIAL_CHARS);
        
        echo "<h1>$titulo</h1>", "<hr>", "<p>$corpo</p>";
    ?>

    <img src="<?php echo $url_img;?>" alt="img">
    <br><br>
    <a href="<?php echo $url_lnk;?>"><?php echo $url_lnk;?></a>

    <style>
        body {
            color: <?php echo $cor_txt;?>;
            background-color: <?php echo $cor_bg;?>;
        }
    </style>
</body>
</html>