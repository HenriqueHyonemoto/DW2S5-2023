<?php
require 'header.php';
?>
<div class="contato">
    <h1 class="text-center">Formulário para contato</h1>
 <?php 
 $nome = filter_input(INPUT_POST,"nome");
 $email = filter_input(INPUT_POST,"email");
 $msg = filter_input(INPUT_POST,"msg");
 
 
 
 
 ?>
    <p>Nome: <?php echo $nome ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>Mensagem: <?php echo $msg ?></p>
    <p>Data: <?php echo date('d/m/Y - h:i:s')?></p>

    <a href = "inicio.php"><button class="btn btn-info">Voltar</button></a>
    <?php
    require 'footer.php';
    ?>