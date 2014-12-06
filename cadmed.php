<?php
include("CMedico.php");

$objeto = new Medico;
$objeto -> con();
$objeto -> incluir($_POST['nomemed'],$_POST['endmed'],$_POST['telmed'],$_POST['celmed'],$_POST['cpfmed'],$_POST['usuariomed'],$_POST['senhamed']);
?>
