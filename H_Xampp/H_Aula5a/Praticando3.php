<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Tabuada</title>

</head>
<body>
<h1>Praticando 3 - Números primos</h1>

<div class = inline-block>
    <a style = 'margin-right:5%;color:red;' href = "Praticando3.php?numero=1">Número 1</a>
    <a style = 'margin-right:5%;color:green; ' href = "Praticando3.php?numero=2">Número 2</a>
    <a style = 'margin-right:5%;color:green;' href = "Praticando3.php?numero=3">Número 3</a>
    <a style = 'margin-right:5%;color:green;' href = "Praticando3.php?numero=5">Número 5</a>
    <a style = 'margin-right:5%;color:red; ' href = "Praticando3.php?numero=20">Número 20</a>
    <a style = 'margin-right:5%;color:red;' href = "Praticando3.php?numero=32">Número 32</a>
    <a style = 'margin-right:5%;color:green;' href = "Praticando3.php?numero=37">Número 37</a>
<hr>
<?php 
$numero = filter_input(INPUT_GET,'numero');

if($numero % 2 == 0 ){
    $parimpar = "PAR";
}else{
    $parimpar = "IMPAR";
}


/*if($numero <= 1){
$primo = false;
} 
for ($d = 2; $d*$d <= $numero; $d++){
    if($numero%$d == 0){
        $primo = false;
    }
    $primo = true;
}*/

$divisores = 0;

for($count=2; $count<$numero;$count++){
    if($numero % $count == 0){
        $divisores++;
    }
}


if($divisores == 0 && $numero > 1){
    $primo = true;
}else{
    $primo = false;
    
}

/*if ($numero == 1){
    $primo = 0;
}
for ($i = 2; $i <= sqrt($numero); $i++){
    if($numero % $i ==0){
        $primo == 0;
    }
    $primo == 1;
}*/

//echo $divisores;

if ($numero != null){
    if ($primo == false){
        echo "<div class = 'mostra'><a>O Número 
        <a class = 'borderRed'>$numero</a>
        <a class = 'borderRed'>não é</a>
        <a>um número</a>
        <a class = 'borderRed'>PRIMO</a>
        <a>. Além disso ele é um número<a>
        <a class = 'borderRed'>$parimpar</a>
        </div>";
    }else if ($primo == true){
        echo "<div class = 'mostra'><a>O Número 
        <a class = 'borderGreen'>$numero</a>
        <a class = 'borderGreen'>é</a>
        <a>um número</a>
        <a class = 'borderGreen'>PRIMO</a>
        <a>. Além disso ele é um número<a>
        <a class = 'borderGreen'>$parimpar</a>
        </div>";
    }
}
?>
<style>
a{
font-size: 20px;
}
.mostra{
text-align: center;
}
.borderRed{
    background-color:lightcoral;
    border:solid 1px black;
}
.borderGreen{
    background-color:lightgreen;
    border:solid 1px black;
}


</style>
</body>