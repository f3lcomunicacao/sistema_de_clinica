<?php
include("CAtendimento.php");

$objeto = new Atendimento;
$objeto->con();
$objeto->
incluir atendimento($_POST['codpac'],$_POST['codmed'],$_POST['dataatend'],$_POST['horaatend'],$_POST['datareserva'],$_POST['horareserva']);
?>
