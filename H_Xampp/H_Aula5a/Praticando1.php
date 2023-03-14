<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Tabuada</title>

</head>
<body>
<h1>Tabuada</h1>
<form class="form-inline">
  <div class="form-group mb-2">
    <label for="nmr" class="sr-only">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="nmr" value="Número:">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="number" class="form-control" id="inputTabuada" name = "numero" placeholder="">
  </div>
<br>
  <button type="submit" class="btn btn-primary mb-2 " style="margin-right:10px">Enviar</button>
  <a href = "Praticando1.php?">
  <button type="button" class="btn btn-warning mb-2" value = "Praticando1.php?">Limpar</button>
  </a>
</form>
<hr>
<?php 
$numero = filter_input(INPUT_GET,"numero");
if ($numero != null) {
    echo "<h1>Tabuada do $numero</h1>";
    for ($i =1; $i <11; $i++){
        echo  "$numero x $i = ", $numero*$i,"<br>";
    }
} else {
    return 0;
}
?>

</body>