<?php
include("CPaciente.php");

$objeto = new Paciente;
$objeto -> con();
$objeto -> locpac($_POST['cpf']);
?>
