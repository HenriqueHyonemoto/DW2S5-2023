<?php
require 'header.php';
?>
<div class="contato">
    <h1 class="text-center">Formulário para contato</h1>
    <form action="destino-contato.php" method="POST">
        <div class="row">
            <div class="col">
                <label class="col-sm-2 col-form-label col-form-label-sm ">Nome:</label>
                <input type="text" class="form-control" placeholder="Digite seu nome" name = "nome">
            </div>
            <div class="col">
                <label class="col-sm-2 col-form-label col-form-label-sm ">E-mail:</label>
                <input type="text" class="form-control" placeholder="Digite seu email" name = "email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="col-sm-2 col-form-label col-form-label-sm ">Mensagem:</label>
                <textarea class="form-control" rows="3" placeholder="" name = "msg" ></textarea>
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