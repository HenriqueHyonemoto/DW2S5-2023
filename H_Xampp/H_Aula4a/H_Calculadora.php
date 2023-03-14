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
    <H1>Praticando - Calculadora média</H1>
    <hr>
    <?php
    $n1 = filter_input(INPUT_POST,"nota1");
    $n2 = filter_input(INPUT_POST,"nota2");
    $n3 =  filter_input(INPUT_POST,"nota3");
    //print_r($_POST);
    ?>
    <div>
<form action="H_ResultadoMedia.php" method="POST">
    
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-end">Nota 1:</label>
    <div class="col-sm-2">
        <input type="number" class="form-control form-control-sm" name = "nota1" id="nota1">
    </div>

    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-end">Nota 2:</label>
    <div class="col-sm-2">
        <input type="number" class="form-control form-control-sm" name = "nota2" id="nota2">
    </div>

    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-end">Nota 3:</label>
    <div class="col-sm-2">
        <input type="number" class="form-control form-control-sm" name = "nota3" id="nota3">
    </div>

    <br>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
    </div>
</form>


<hr>

</body>

</html>