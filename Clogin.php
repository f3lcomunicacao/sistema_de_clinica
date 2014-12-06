<?php
    include("Tela.php");
    //include("Conexao.php");
     
     //Avaliação.......
     
     class Login extends Tela {

     function f_index(){  //gera a tela da camada visual pelo programador junior - V
     echo"
     <form action='login.php' method='post'>
     <table width='247' aling='center'>
     <tr>
     <td class='h2'><input type='radio' name='tipo' value='1'/>Paciente:</td>
     </tr>
     <tr>
     <td class='h2'><input type='radio' name='tipo' value='2' />Médico:</td>
     </tr>
     <tr>
     <td class='h2'> <input type='radio' name='tipo' value='3' />Funcionário:</td>
     <tr>
     <tr>
     <td class='h2'></td>
     </tr>
     <tr>
     <td width='108' class='h2'> Usuário:</td>
     <td width='108' class='h2'><input type='text' size='12' name='usuario' maxlength='12'/></td>
     </tr>
     <tr>
     
          <td width='108' class='h2'> Senha:</td>
     
     <td width='108' class='h2'><input type='password' size='12' name='senha' maxlength='12'/></td>
     </tr>
     <tr>
          <td width='108' class='h2'> CPF:</td>
     <td width='108' class='h2'><input type='text' size='14' name='cpf' maxlength='12'/></td>
     </tr>
     <tr>
     <td colspan='2'></ts>
     </tr>
     <tr>
     <td colspan='2'><div align='center'>
     <input name='submit' type='submit' value='Acessar'/>&nbsp;&nbsp;<input name='reset' type='reset' value='Limpar'/>
     </div>
     </td>
     </tr>
     </table>
     </form>
     ";
     }
          function logins($tipo,$usuario,$senha,$cpf){ //gera o processo do programador junior - P
     switch($tipo){
     case 1:
     $sql="SELECT codpac FROM paciente WHERE usuariopac = '$usuario' AND senhapac = '$senha' AND cpfpac = '$cpf'";
     $rs = mysql_query($sql) or die ("Problema na consulta do Login Paciente");
     $linha=mysql_fetch_array($rs);
     $codpac=$linha['codpac'];

     if($codpac >0){
     setcookie("codpac", $codpac);
     header("location:Fatendimento.php");
     exit;
     }
     else{
     echo "Paciente não encontrado:<a href='FPaciente.php'>Cadastrar Paciente</a>";
     }
     break;

     case 2:

     $sql="SELECT codmed FROM medico WHERE usuariomed = '$usuario' AND senhamed='$senha' AND cpfmed='$cpf'";
     $rs=mysql_query($sql) or die ("Problema na consulta do Login Médico");
     $linha=mysql_fetch_array($rs);
     $codmed=$linha["codmed"];
     if($codmed >0){
     setcookie("codmed",$codmed);
     header("location:pacienteatendimento.php");
     exit;
     }
     else{
     echo "Médico não encontrado!";
     }
     break;

     case 3:

     $sql="SELECT codfunc FROM funcionario WHERE usuariofunc = '$usuario' AND senhafunc = '$senha'
     AND cpffunc= '$cpf'";
     $rs = mysql_query($sql) or die ("Problema na consulta do Login Funcionário");
     $linha=mysql_fetch_array($rs);
     $codfunc = $linha["codfunc"];

     if($codfunc >0){
     setcookie("codfunc",$codfunc);
     header("location:sistema_cadastro.php");
     exit;
     }
     else{
     echo "Funcionário não encontrado!";
     }
     break;
     }
     }

     }
     ?>
     
