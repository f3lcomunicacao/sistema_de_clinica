<?php

     include("TelaCadastro.php");
     
     class SistemaCadastro extends TelaCadastro{
           function menu(){
           
         // echo "teste";
           
          echo"
                 <h1>Painel de Controle</h1></br>
                 <h2>Cadastro</h2>
                 <ul>
                 <li><a href='FPaciente.php'>Paciente</a></li>
                 <li><a href='FFuncionario.php'>Funcionário</a></li>
                 <li><a href='FMedico.php'>Médico</a></li>
                 <li><a href='FAgendamento.php'>Horário de Agendamento</a></li>
                 </ul>
                 <h2>Localização</h2>
                 <ul>
                 <li><a href='Flocpaciente.php'>Paciente</a></li>
                 <li><a href='Flocfuncionario.php'>Funcionário</a></li>
                 <li><a href='Flocmedico.php'>Médico</a></li>
                 </ul>
                 <h2>Lista</h2>
                 <ul>
                 <li><a href='lista_pac.php'>Paciente</a></li>
                 <li><a href='lista_func.php'>Funcionario</a></li>
                 <li><a href='lista_med.php'>Médico</a></li>
                 </ul>
                 ";
       }
}
?>
