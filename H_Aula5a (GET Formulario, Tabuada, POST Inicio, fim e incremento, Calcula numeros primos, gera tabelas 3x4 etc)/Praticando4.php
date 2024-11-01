<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initical-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Gerador de Tabela</title>

</head>
<body>
<h1>Praticando 4 - Gerador de Tabela</h1>
<hr>
<?php 
$lines = filter_input(INPUT_POST,'lines');
$cols = filter_input(INPUT_POST,'cols');
$estilo = filter_input(INPUT_POST,'estilo');

?>
<h1> Tabela <?php echo $lines ,"x", $cols?> </h1>
<h2> Estilo: <?php echo $estilo ?> </h2>

<table class='table <?php echo $estilo?>'>
  <thead>
    <tr>
    <?php for($i = 0; $i < $cols; $i++){
      echo '<th scope="col"> - </th>';

    }    
      ?>
    </tr>
  </thead>
  <tbody>
  <?php for($j = 1; $j < $lines; $j++){
      echo '<tr>
      <th scope="row"> - </th>';

      for($o = 1; $o < $cols; $o++){
      echo '<td> - </td>';
      }
      
 
      echo '</tr>';
    }  
    
?>

  </tbody>
</table>

<style>

  table{
borde
  }
  </style>
</body>