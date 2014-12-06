<?php
include("CMedico.php");

$objeto = new medico;
$objeto -> con();

$botao = $_POST['botao'];

if($botao == "Atualizar"){
	$objeto -> atualizar($_POST['nomemed'],$_POST['endmed'],$_POST['telmed'],$_POST['celmed'],$_POST['cpfmed'],$_POST['usuariomed'],$_POST['senhamed'],$_POST['codmed']);
}

if($botao == "Excluir"){
	$objeto -> excluir($_POST['codmed']);
}

if($botao == "Listar"){
	$objeto -> lista_medico();
}
?>
