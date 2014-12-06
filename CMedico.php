<?php
  include("TelaCadastro.php");

  class Medico extends TelaCadastro{

  function incluir($nomemed,$endmed,$telmed,$celmed,$cpfmed,$usuariomed,$senhamed){

  $nomemed=$_POST["nomemed"];
  $endmed=$_POST["endmed"];
  $telmed=$_POST["telmed"];
  $celmed=$_POST["celmed"];
  $cpfmed=$_POST["cpfmed"];
  $usuariomed=$_POST["usuariomed"];
  $senhamed=$_POST["senhamed"];

  $sql="INSERT INTO Medico(nomemed, endmed, telmed, celmed, cpfmed, usuariomed,senhamed) VALUES
  ('$nomemed','$endmed','$telmed','$celmed','$cpfmed','$usuariomed','$senhamed')";

  mysql_query($sql) or die ("Problema no cadastro do Medico".$sql);
  echo"Dados cadastrados com sucesso";
//  echo $sql;
  }

              function atualizar ($nomemed,$endmed,$telmed,$celmed,$cpfmed,$usuariomed,$senhamed,$codmed){




           $sql = "UPDATE Medico SET nomemed='$nomemed', endmed='$endmed', telmed='$telmed',celmed='$celmed', cpfmed='$cpfmed',
           usuariomed='$usuariomed',senhamed='$senhamed' WHERE codmed='$codmed'";
           
           mysql_query($sql)or die ("<script>alert('Problema na atualização do Medico');</script>");
           echo "<script>alert('Dados Atualizados com sucesso')</script>";
           echo"<script>window.location('Flocmedico.php');</script>";
           
           }
           function excluir($codmed){
                    $codmed = $_POST["codmed"];
                    
                    $sql = "DELETE FROM Medico WHERE codmed=$codmed";
                    
                    mysql_query($sql)or die ("<script>alert('Problema na Exclusão do Medico');</script>");
                    
                                        echo "<script>alert('Dados Excluídos com Sucesso!');</script>";
                                        echo"<script>window.location('Flocmedico.php')</script>";
           }

           function lista_Medico(){
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
                     
                     $sql ="SELECT * FROM Medico";
                     $rs = mysql_query($sql)or die ("Erro na listagem de Medico");
                     
                     while($linha = mysql_fetch_array($rs)){
                                  $codmed = $linha['codmed'];
                                  $nomemed = $linha['nomemed'];
                                  $endmed = $linha['endmed'];
                                  $telmed = $linha['telmed'];
                                  $celmed = $linha['celmed'];
                                  $cpfmed = $linha['cpfmed'];
                                  $usuariomed = $linha ['usuariomed'];
                                  $senhamed = $linha['senhamed'];
                                  
                                  echo"
                                  
                                  <tr bgcolor='#bcbcbc'>
                                      <td class='h3'>$codmed</td>
                                      <td class='h3'>$nomemed</td>
                                      <td class='h3'>$endmed</td>
                                      <td class='h3'>$telmed</td>
                                      <td class='h3'>$celmed</td>
                                      <td class='h3'>$cpfmed</td>
                                      <td class='h3'>$usuariomed</td>
                                      <td class='h3'>$senhamed</td>
                                  </tr>
                     ";
                     }
                     echo"</table>";
                     }


               function telalocmed(){
                    echo"
                    <form action='locmed.php' method='post'>
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
           
           function locmed ($cpfmed){
                    $sql ="SELECT * FROM Medico WHERE cpfmed='$cpfmed'";
                    $rs  = mysql_query($sql)or die("Erro na Localização do Medico");
                    
                    $linha = mysql_fetch_array($rs);
                    
                    $codmed = $linha['codmed'];
                    $nomemed = $linha['nomemed'];
                    $endmed = $linha['endmed'];
                    $telmed = $linha['telmed'];
                    $celmed = $linha['celmed'];
                    $cpfmed = $linha['cpfmed'];
                    $usuariomed = $linha['usuariomed'];
                    $senhamed = $linha['senhamed'];
                    
                    echo"
                    <form action='movmed.php' method='post'>
                    <table width='200' border='0' align='center'>
                    <tr>
                    <td>Código:</td>
                    <td><input type='text' size ='9' name='codmed' value='$codmed'><td>
                    </tr>
                    <tr>
                    <td>Nome:</td>
                    <td><input type='text'  size='30' name='nomemed' value='$nomemed'><td></tr>
                    <td>Endereço:</td>
                    <td><input type='text'  size='30' name='endmed' value='$endmed'><td></tr>
                    <td>Telefone:</td>
                    <td><input type='text'  size='14' name='telmed' value='$telmed'><td></tr>
                    <td>Celular:</td>
                    <td><input type='text'  size='14' name='celmed' value='$celmed'><td></tr>
                    <td>CPF:</td>
                    <td><input type='text'  size='13' name='cpfmed' value='$cpfmed'><td></tr>
                    <td>Usuário:</td>
                    <td><input type='text'  size='10' name='usuariomed' value='$usuariomed'><td></tr>
                    <td>Senha:</td>
                    <td><input type='password'  size='10' name='senhamed' value='$senhamed'<td>
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
          
           
                     }
                     ?>
