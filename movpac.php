<?php
include("CPaciente.php");

$objeto = new Paciente;
$objeto -> con();

$botao = $_POST['botao'];

if($botao == "Atualizar"){
	$objeto -> atualizar($_POST['nomepac'],$_POST['endpac'],$_POST['telpac'],$_POST['celpac'],$_POST['cpfpac'],$_POST['usuariopac'],$_POST['senhapac'],$_POST['codpac']);
}

if($botao == "Excluir"){
	$objeto -> excluir($_POST['codpac']);
}

if($botao == "Listar"){
	$objeto -> lista_paciente();
}
?>
