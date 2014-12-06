<?php
include("Clogin.php");

$objeto = new Login;
$objeto -> con();
$tipo=$_POST["tipo"];
$usuario=$_POST["usuario"];
$cpf=$_POST["cpf"];
$senha=$_POST["senha"];

$objeto -> logins($tipo,$usuario,$senha,$cpf);
$objeto-> fecha();

?>
