<?php
include("CMedico.php");

$objeto = new Medico;
$objeto -> con();
$objeto -> lista_medico();
?>
