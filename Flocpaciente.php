<?php
include("CPaciente.php");

$objeto = new Paciente;
$objeto -> abre("LOCALIZAÇÃO DE PACIENTE");
$objeto -> telalocpac();
?><br /><br />
<a href="sistema_cadastro.php">Página Principal</a>
<?php
$objeto -> fecha();
?>
