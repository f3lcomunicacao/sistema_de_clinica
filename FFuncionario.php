<?php

     include("CFuncionario.php");
     $objeto=new TelaCadastro;
     $objeto->abre("TELA DE CADASTRO FUNCIONARIO");
     $objeto->TelaCadastroGeral
     ("nomefunc","endfunc","telfunc","celfunc","cpffunc","usuariofunc","senhafunc","cadfunc.php");
     ?><br>
     <a href="FMedico.php">Página Médico</a><br>
     <a href="FPaciente.php">Página Paciente</a>
     <?php
     $objeto->fecha();



?>
