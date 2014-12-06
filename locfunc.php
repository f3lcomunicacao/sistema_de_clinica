<?php
include("CFuncionario.php");

$objeto = new Funcionario;
$objeto -> con();
$objeto -> locfunc($_POST['cpf']);
?>
