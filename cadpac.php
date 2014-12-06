<?php
include("CPaciente.php");

$objeto = new Paciente;
$objeto -> con();
$objeto -> incluir($_POST['nomepac'],$_POST['endpac'],$_POST['telpac'],$_POST['celpac'],$_POST['cpfpac'],$_POST['usuariopac'],$_POST['senhapac']);
?>
