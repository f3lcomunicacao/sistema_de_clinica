<?php

    include("CMedico.php");
     $objeto=new TelaCadastro;
     $objeto->abre("TELA DE CADASTRO MEDICO");
     $objeto->TelaCadastroGeral
     ("nomemed","endmed","telmed","celmed","cpfmed","usuariomed","senhamed","cadmed.php");
     ?><br>
     <a href="FMedico.php">Página Medico</a><br>
     <a href="FPaciente.php">Página Paciente</a>
     <?php
     $objeto->fecha();


?>
