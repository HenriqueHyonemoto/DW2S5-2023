<?php
session_start();

session_destroy();

header("Location: inicio.php");

setcookie('cookie_visita',$visita,time()-3600);
?>




