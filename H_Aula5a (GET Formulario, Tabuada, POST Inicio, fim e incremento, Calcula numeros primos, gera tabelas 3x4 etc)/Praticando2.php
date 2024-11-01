

    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initical-scale=1.0">
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <title>Tabuada</title>
    
    </head>
    <body>
    <h1>Contador</h1>
    <?php
    $inicio = filter_input(INPUT_POST,"inicio");
    $final = filter_input(INPUT_POST,"final");
    $inc =  filter_input(INPUT_POST,"inc");
    print_r($_POST);
   

    if ($final > $inicio){
        echo "incremento <br>";
        for ($i = $inicio; $i <=$final; $i+=$inc){
            echo $i, " ";
        }
    }else if ($inicio > $final){
        echo "Decremento <br>";
        for ($i = $inicio; $i >=$final; $i-=$inc){
            echo $i, " ";
        }
    }
    
    ?>
    
    <hr>
    
    
    </body>   