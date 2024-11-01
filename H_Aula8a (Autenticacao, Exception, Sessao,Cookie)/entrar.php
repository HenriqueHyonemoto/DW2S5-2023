<?php
session_start();

if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
    header("Location: inicio.php");
  }
  
require 'header.php';


?>
<div class="contato">
    <h1 class="text-center">Autenticação</h1>
    <form action="destino-entrar.php" method="POST">
    <div class="row justify-content-center align-items-center">
  <div class="col-md-4">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Usuario" name="user">
    </div>
    <br>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Senha" name="pass">
    </div>
  </div>
</div>
       

        <div class = "row">
            
    <div class = "mx-auto text-center">
    <br>
    <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Enviar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
    </div>

    </form>
    <?php
    require 'footer.php';
    ?>