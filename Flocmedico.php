<?php
include("CMedico.php");

$objeto = new Medico;
$objeto -> abre("LOCALIZAÇÃO DE MEDICO");
$objeto -> telalocmed();
?><br /><br />
<a href="sistema_cadastro.php">Página Principal</a>
<?php
$objeto -> fecha();
?>
