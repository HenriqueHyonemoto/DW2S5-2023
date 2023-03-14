<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <title>Praticando - Animais</title>
</head>
<body>

<!------------------------------------------------------------------------------------------------------------>
<?php 
$animal = filter_input(INPUT_GET,"animal",FILTER_SANITIZE_EMAIL);

switch ($animal){
case "UPolar":
  echo "<div class = 'pg_Polar'>
  <h1>Urso Pardo</h1>
  <hr>
  <p>Você clicou em Urso Polar, o Urso Polar é branco.</p>
  <img src = 'https://th.bing.com/th/id/OIP.npJUgsjDE3snW6zpB-OvAAHaEa?pid=ImgDet&rs=1' style = 'width:50%'>
  <br>
  <a href ='H_Animais.php?'>
  Voltar
  </a>
</div>";
break;
case "UPardo":
echo "<div class = 'pg_Pardo'>
<h1>Urso Pardo</h1>
<hr>
<p>Você clicou em Urso Pardo, o Urso Pardo é Marrom.</p>
<img src = 'https://th.bing.com/th/id/OIP.bq1oo-1WW3t4oEaSABvytQHaEK?pid=ImgDet&rs=1' style = 'width:50%'>
<br>
<a href = 'H_Animais.php?'>
Voltar
</a>
</div>";
break;
case "UNegro":
    echo "<div class = 'pg_Negro'>
    <h1>Urso Negro</h1>
    <hr>
    <p>Você clicou em Urso Negro, o Urso Negro é Preto.</p>
    <img src = 'https://th.bing.com/th/id/OIP.3FyuvAgP2bA_lwoYGV7B8QHaFj?pid=ImgDet&rs=1' style = 'width:50%'>
    <br>
    <a href = 'H_Animais.php?'>
    Voltar
    </a>

</div>";
break;
case "UPanda":
    echo "<div class = 'pg_Panda'>
    <h1>Panda Gigante</h1>
    <hr>
    <p>Você clicou em Panda Gigante, o Panda Gigante é Preto e Branco.</p>
    <img src = 'https://conexaoplaneta.com.br/wp-content/uploads/2021/07/panda-china-conexao-planeta.jpg' style ='width:50%'>
    <br>
    <a href = 'H_Animais.php?'>
    Voltar
    </a>
</div>";
break;
default:
echo "    <h1>Praticando - Animais</h1>
<hr>
<div>
<a href = 'H_Animais.php?animal=UPolar'>
<img src = 'https://th.bing.com/th/id/OIP.npJUgsjDE3snW6zpB-OvAAHaEa?pid=ImgDet&rs=1'>
</a>
<a href = 'H_Animais.php?animal=UPardo'>
<img src = 'https://th.bing.com/th/id/OIP.bq1oo-1WW3t4oEaSABvytQHaEK?pid=ImgDet&rs=1'>
</a>
<a href = 'H_Animais.php?animal=UNegro'>
<img src = 'https://th.bing.com/th/id/OIP.3FyuvAgP2bA_lwoYGV7B8QHaFj?pid=ImgDet&rs='>
</a>
<a href = 'H_Animais.php?animal=UPanda'>
<img src = 'https://conexaoplaneta.com.br/wp-content/uploads/2021/07/panda-china-conexao-planeta.jpg'>
</a>
</div>";
break;
}



?>


<!--




-->
</body>
<style>
    img{
        width:20%;
        margin: 10px;
    }

</style>
</html>
