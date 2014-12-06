<?php
     include("CPaciente.php");
     $objeto=new TelaCadastro;
     $objeto->abre("TELA DE CADASTRO PACIENTE");
     $objeto->TelaCadastroGeral
     ("nomepac","endpac","telpac","celpac","cpfpac","usuariopac","senhapac","cadpac.php");
     ?><br>
     <a href="FMedico.php">Página Médico</a><br>
     <a href="FFuncionario.php">Página Funcionário</a>
     <?php
     $objeto->fecha();
     ?>
