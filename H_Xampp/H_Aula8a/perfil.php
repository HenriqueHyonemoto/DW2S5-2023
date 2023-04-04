<?php
session_start();
require 'header.php';

if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
    header("Location: entrar.php");
  }
?>
<div class="perfil">
            <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Perfil</h1>
            </div>
    <p>Nome: <b>Henrique</b></p>
    <p>E-mail: <b>henrique.hyonemotoaluno.ifsp.edu</b></p>
    <p>Telefone: <b>(17)99574852</b></p>
    <p>Endereço: <b>Rua de Votuporanga</b></p>
    <p>Cidade: <b>Voutuporanga</b></p>
    <p>Estado: <b>SP</b></p>
    <?php
    if(isset($_COOKIE['cookie_visita'])){
        echo $_COOKIE['cookie_visita'];
    }else{
        echo 'você NÃO esteve aqui!';
        $visita = 'Você visitou essa página em: '.'<b>'.date('Y-m-d H:i:s').'</b>';
        setcookie('cookie_visita',$visita,time()+3600);
    }
    
    ?>
    <br>

        </div>
        <?php
require 'footer.php';
?>