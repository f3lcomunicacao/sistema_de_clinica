<?php
include("CPaciente.php");

$objeto = new Paciente;
$objeto -> con();
$objeto -> lista_paciente();
?>
