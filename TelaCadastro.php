<?php
       include("Tela.php");
       class TelaCadastro extends Tela{
       
       function TelaCadastroGeral ($nome,$endereco,$telefone,$celular,$cpf,$usuario,$senha,$acao){
       echo"
	   <form action='$acao' method='post'>
	   <table width='200' border='0' aling='center'><tr>
	   <td class='h2'>Nome:</td><td><input type='text' size='30' name='$nome' /></td></tr><tr>
       <td class='h2'>Endereço:</td><td><input type='text' size='30' name='$endereco' /></td></tr><tr>
	   <td class='h2'>Telefone:</td><td><input name='$telefone' type='text' size='12' maxlength='12' /></td></tr><tr>
	   <td class='h2'>Celular:</td><td><input name='$celular' type='text' size='12' maxlength='12' /></td></tr><tr>
	   <td class='h2'>CPF:</td><td><input type='text' size='13' name='$cpf' /></td></tr><tr>
	   <td class='h2'>Usuário:</td><td><input type='text' size='10' name='$usuario' /></td></tr><tr>
	   <td class='h2'>Senha:</td><td><input name='$senha' type='password' size='10'  maxlength='10' /></td></tr><tr>
	   <td></td><td></td></tr><tr><td colspan='12'><div align='center'>
	   <input name='submit' type='submit' value='ok' />
	   <input name='reset' type='reset' value='limpar' />
	   </div></td></tr></table>
	   </form>";
	   		 }
       }
?>
