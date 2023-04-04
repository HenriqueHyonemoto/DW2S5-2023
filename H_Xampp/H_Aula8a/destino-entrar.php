<?php
session_start();


$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

if($user == "123" && $pass == "123"){
$_SESSION["user"]=$user;
header("Location:inicio.php");
}else{
    unset($_SESSION["user"]);
}


?>

<?php
require 'header.php';
?>
<div class="auth">
    <h1 class="text-center">Autenticação</h1>
    <div class = "loginerror">
    <p >Falha ao efetuar Autenticação<p></p>
    <p style = "text-indent:30px">O usuário ou a senha estão incorretos.</p>
    <p style = "text-indent:30px">Verifique as informações e tente novamente.</p>
    <hr>
    <a href = entrar.php>Clique aqui para voltar</a>
    </div>

<style>   
.loginerror{
    background-color: lightpink;
    border: solid rgb(240, 150, 122) 2px;
    border-radius: 1%;
    color: rgb(139,0,0);
}

</style> 
<?php
require 'footer.php';
?>   