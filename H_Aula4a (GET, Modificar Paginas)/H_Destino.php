<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <title>Destino</title>

</head>
<body>
    <h1>Destino GET</h1>
    <hr>
    <?php

    $email= filter_input(INPUT_GET,"email",FILTER_SANITIZE_EMAIL);
    $pass= filter_input(INPUT_GET,"pass",FILTER_SANITIZE_SPECIAL_CHARS);
    $cor =  filter_input(INPUT_GET,"cor",FILTER_SANITIZE_SPECIAL_CHARS);
    echo "<p>Email: $email<br>Senha: $pass<br>Cor: $cor</p>";
    print_r($_POST);
    ?>
    <br>
    <p>
    <a href = "H_Destino.php?email=henrique@mail.com&pass=fckingpass&cor=cyan">
        Enviar Dados [email = henrique@mail.com | pass = fckingpass]
    </a>
    <br>
    
    <a href = "H_Destino.php?email=nome2@mail.com&pass=senhab&cor=grey">
        Enviar Dados [email = nome2@mail.com | pass = senhab]
    </a>
    </p>
    <p>
    <a href = "H_Destino.php?email=&pass=&cor=">
        Limpar Tudo
    </a>
    </p>


    <div class="col-md-4  container">
        <div class =row>
        <a href="H_Destino.php?cor=rgb(255,105,97)&email=<?php echo $_GET ['email']; ?>&pass=<?php echo $_GET ['pass']; ?>">
        <img src = "https://about.canva.com/wp-content/uploads/sites/8/2019/06/pastel-red.png">
        </a>

        <a href = "H_Destino.php?cor=rgb(137,207,240)&email=<?php echo $_GET ['email']; ?>&pass=<?php echo $_GET ['pass']; ?>">
        <img src = "https://about.canva.com/wp-content/uploads/sites/8/2019/03/baby-blue.png">
        </a>

        <a href = "H_Destino.php?cor=rgb(147,233,190)&email=<?php echo $_GET ['email']; ?>&pass=<?php echo $_GET ['pass']; ?>">
        <img src = "https://about.canva.com/wp-content/uploads/sites/8/2019/03/seafoam-green.png">
        </a>
        </div>
    </div>
    <style>
             img{
                width: 30%;
                margin: 1%;
                border: solid black 4px;
                
            }
        body{

            background-color:<?php echo $cor;?>
        }
</style>
    
</body>