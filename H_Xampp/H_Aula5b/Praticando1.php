<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Gerador de Tabela</title>

</head>

<body>
<h1>Destino</h1>
<hr>
<h2>Dados da Requisição</h2>
<div class = "reqstyle">
    <div class = "col-12">
    <?php 
    
    $interesses = $_POST['checkboxvar'];
    if(isset($interesses)){
        sort($interesses);
        var_dump($interesses);
        //print_r($interesses); 
        //echo sizeof($interesses);
    }
    ?>
    </div>
</div>

<h2>Interesses selecionados (em ordem alfabética)</h2>


<?php 
sort($interesses);
if (sizeof($interesses)>3){
    for($i = 0;$i < 3 ;$i++){
        echo "<li>$interesses[$i]</li>";
        }
        echo "<li>...</li>";
}else{
    for($i = 0;$i < sizeof($interesses) ;$i++){
        echo "<li>$interesses[$i]</li>";
        }

}
?>



<br>
<a href = Praticando1.html>Voltar para o formulário </a>
</body>
<style>
.reqstyle{
    border: solid green 1px;
    color:pink;
}
.divisa{

}
    </style>

    </html>