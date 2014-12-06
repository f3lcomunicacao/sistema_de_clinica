<?php
  include("TelaCadastro.php");
  
  class Paciente extends TelaCadastro{
  
  function incluir($nomepac,$endpac,$telpac,$celpac,$cpfpac,$usuariopac,$senhapac){
  $nomepac=$_POST["nomepac"];
  $endpac=$_POST["endpac"];
  $telpac=$_POST["telpac"];
  $celpac=$_POST["celpac"];
  $cpfpac=$_POST["cpfpac"];
  $usuariopac=$_POST["usuariopac"];
  $senhapac=$_POST["senhapac"];

  $sql="INSERT INTO paciente(nomepac, endpac, telpac, celpac, cpfpac, usuariopac, senhapac) VALUES
  ('$nomepac','$endpac','$telpac','$celpac','$cpfpac','$usuariopac','$senhapac')";

  mysql_query($sql) or die ("Problema no cadastro do PACIENTE");
  echo"Dados cadastrados com sucesso";
//  echo $sql;
  }
  
          function atualizar ($nomepac,$endpac,$telpac,$celpac,$cpfpac,$usuariopac,$senhapac,$codpac){




           $sql = "UPDATE paciente SET nomepac='$nomepac', endpac='$endpac', telpac='$telpac',celpac='$celpac', cpfpac='$cpfpac',
           usuariopac='$usuariopac',senhapac='$senhapac' WHERE codpac='$codpac'";
           
           mysql_query($sql)or die ("<script>alert('Problema na atualizaÃ§Ã£o do Paciente');</script>");
           echo "<script>alert('Dados Atualizados com sucesso')</script>";
           echo"<script>window.location('f_locpaciente.php');</script>";
           
           }
           function excluir($codpac){
                    $codpac = $_POST["codpac"];
                    
                    $sql = "DELETE FROM paciente WHERE codpac=$codpac";
                    
                    mysql_query($sql)or die ("<script>alert('Problema na ExclusÃ£o do Paciente');</script>");
                    
                                        echo "<script>alert('Dados ExcluÃ­dos com Sucesso!');</script>";
                                        echo"<script>window.location('f_locpaciente.php')</script>";
           }
           
           function telalocpac(){
                    echo"
                    <form action='locpac.php' method='post'>
                    <table width='171' border='0' aling='center'>
                    <tr><td width='44'vclass='h2'>CPF:</td>
                    <td width=146'><input type='text' size='13' name='cpf'/></td>
                    </tr> <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
                    <td colspan='2'><div align='center'>
                    <input type='submit' name='botao' value='Localizar'/>
                    <input type='reset' name='reset' value='Limpar Dados'/>
                    </div></td>
                    </tr>
                    <tr>
                    <td>&nsbp;</td>
                    <td>&nsbp;</td>
                    </tr>
                    <tr>
                    <td>&nsbp;</td>
                    <td&nsbp;</td>
                    <tr>
                    </table>
                    </form>
                    ";
           }
                    
           function locpac ($cpfpac){
                    $sql ="SELECT * FROM paciente WHERE cpfpac='$cpfpac'";
                    $rs  = mysql_query($sql)or die("Erro na LocalizaÃ§Ã£o do Paciente");
                    
                    $linha = mysql_fetch_array($rs);
                    
                    $codpac = $linha['codpac'];
                    $nomepac = $linha['nomepac'];
                    $endpac = $linha['endpac'];
                    $telpac = $linha['telpac'];
                    $celpac = $linha['celpac'];
                    $cpfpac = $linha['cpfpac'];
                    $usuariopac = $linha['usuariopac'];
                    $senhapac = $linha['senhapac'];
                    
                    echo"
                    <form action='movpac.php' method='post'>
                    <table width='200' border='0' align='center'>
                    <tr>
                    <td>CÃ³digo:</td>
                    <td><input type='text' size ='9' name='codpac' value='$codpac'><td>
                    </tr>
                    <tr>
                    <td>Nome:</td>
                    <td><input type='text'  size='30' name='nomepac' value='$nomepac'><td></tr>
                    <td>EndereÃ§o:</td>
                    <td><input type='text'  size='30' name='endpac' value='$endpac'><td></tr>
                    <td>Telefone:</td>
                    <td><input type='text'  size='14' name='telpac' value='$telpac'><td></tr>
                    <td>Celular:</td>
                    <td><input type='text'  size='14' name='celpac' value='$celpac'><td></tr>
                    <td>CPF:</td>
                    <td><input type='text'  size='13' name='cpfpac' value='$cpfpac'><td></tr>
                    <td>UsuÃ¡rio:</td>
                    <td><input type='text'  size='10' name='usuariopac' value='$usuariopac'><td></tr>
                    <td>Senha:</td>
                    <td><input type='password'  size='10' name='senhapac' value='$senhapac'<td>
                    </tr>
                    <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                    <tr>
                    <td colspan='2'><div align='center'><input type='submit' name='botao' value='Atualizar'/>&nbsp;&nbsp;
                    <input type='submit' name='botao' value='Excluir'/>
                    <input name='botao' type='submit' value='Listar'/>
                    </div></td>
                    </tr>
                    </table>
                    </form>

                    ";
            }
            function lista_paciente(){
                     echo"
                          <table align='center'>
                          <tr>
                          <td class='h2'>Código</td>
                          <td class='h2'>Nome</td>
                          <td class='h2'>Endereço</td>
                          <td class='h2'>Telefone</td>
                          <td class='h2'>Celular</td>
                          <td class='h2'>CPF</td>
                          <td class='h2'>Usuário</td>
                          <td class='h2'>Senha</td>
                          
                          </tr>
                          
                     ";
                     
                     $sql ="SELECT * FROM paciente";
                     $rs = mysql_query($sql)or die ("Erro na listagem de Pacientes");
                     
                     while($linha = mysql_fetch_array($rs)){
                                  $codpac = $linha['codpac'];
                                  $nomepac = $linha['nomepac'];
                                  $endpac = $linha['endpac'];
                                  $telpac = $linha['telpac'];
                                  $celpac = $linha['celpac'];
                                  $cpfpac = $linha['cpfpac'];
                                  $usuariopac = $linha ['usuariopac'];
                                  $senhapac = $linha['senhapac'];
                                  
                                  echo"
                                  
                                  <tr bgcolor='#bcbcbc'>
                                      <td class='h3'>$codpac</td>
                                      <td class='h3'>$nomepac</td>
                                      <td class='h3'>$endpac</td>
                                      <td class='h3'>$telpac</td>
                                      <td class='h3'>$celpac</td>
                                      <td class='h3'>$cpfpac</td>
                                      <td class='h3'>$usuariopac</td>
                                      <td class='h3'>$senhapac</td>
                                  </tr>
                     ";
                     }
                     echo"</table>";
                     }
                     }
                     ?>
  

