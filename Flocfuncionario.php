<?php
include("CFuncionario.php");

$objeto = new Funcionario;
$objeto -> abre("LOCALIZAÇÃO DE FUNCIONÁRIO");
$objeto -> telalocfunc();
?><br /><br />
<a href="sistema_cadastro.php">Página Principal</a>
<?php
$objeto -> fecha();
?>
