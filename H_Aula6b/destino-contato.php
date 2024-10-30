<?php
require 'header.php';
?>
<div class="contato">
    <h1 class="text-center">Formulário para contato</h1>
 <?php 
 $nome = filter_input(INPUT_POST,"nome");
 $email = filter_input(INPUT_POST,"email");
 $msg = filter_input(INPUT_POST,"msg");
 
$dir="Fomularios";
if(is_dir($dir)==false){
mkdir($dir);
}
 $file = "Contato_".date('d')."_".date('m')."_".date('Y')."_".rand().".txt";
 $text = fopen($dir."/".$file,"w") or die("Naõ foi possivel abrir o arquivo!") ;
 $data = "Contato via site:".PHP_EOL.PHP_EOL."Data: ".date('d/m/Y - H:i:s').PHP_EOL."Nome: ".$nome.PHP_EOL."Email: ".$email.PHP_EOL."Mensagem: ".$msg.PHP_EOL.PHP_EOL."----------------------------------------";
fwrite($text, $data);
fclose($text);

 ?>
 
    <p>Nome: <?php echo $nome ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>Mensagem: <?php echo $msg ?></p>
    <p>Data: <?php echo date('d/m/Y - H:i:s')?></p>

    <a href = "inicio.php"><button class="btn btn-info">Voltar</button></a>
    <?php
    require 'footer.php';
    ?>