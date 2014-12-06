<?php
include("CAtendimento.php");

$objeto = new Atendimento;
$objeto->  con();
$objeto-> abre ("TELA DE ATENDIMENTO");
$objeto-> telacadatend($_COOKIE['codpac']);
//$objeto->locatend($_COOKIE['codpac']);
?>
