<?php
include("CFuncionario.php");

$objeto = new Funcionario;
$objeto -> con();
$objeto -> incluir($_POST['nomefunc'],$_POST['endfunc'],$_POST['telfunc'],$_POST['celfunc'],$_POST['cpffunc'],$_POST['usuariofunc'],$_POST['senhafunc']);
?>
