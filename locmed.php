<?php
include("CMedico.php");

$objeto = new Medico;
$objeto -> con();
$objeto -> locmed($_POST['cpf']);
?>
