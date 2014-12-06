<?php
include("CFuncionario.php");

$objeto = new Funcionario;
$objeto -> con();

$botao = $_POST['botao'];

if($botao == "Atualizar"){
	$objeto -> atualizar($_POST['nomefunc'],$_POST['endfunc'],$_POST['telfunc'],$_POST['celfunc'],$_POST['cpffunc'],$_POST['usuariofunc'],$_POST['senhafunc'],$_POST['codfunc']);
}

if($botao == "Excluir"){
	$objeto -> excluir($_POST['codfunc']);
}

if($botao == "Listar"){
	$objeto -> lista_funcionario();
}
?>
