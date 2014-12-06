<?php
  include("TelaCadastro.php");

  class Funcionario extends TelaCadastro{

  function incluir($nomefunc,$endfunc,$telfunc,$celfunc,$cpffunc,$usuariofunc,$senhafunc){

  $nomefunc=$_POST["nomefunc"];
  $endfunc=$_POST["endfunc"];
  $telfunc=$_POST["telfunc"];
  $celfunc=$_POST["celfunc"];
  $cpffunc=$_POST["cpffunc"];
  $usuariofunc=$_POST["usuariofunc"];
  $senhafunc=$_POST["senhafunc"];

  $sql="INSERT INTO funcionario(nomefunc, endfunc, telfunc, celfunc, cpffunc, emailfunc,senhafunc) VALUES
  ('$nomefunc','$endfunc','$telfunc','$celfunc','$cpffunc','$usuariofunc','$senhafunc')";

  mysql_query($sql) or die ("Problema no cadastro do FUNCIONARIO".$sql);
  echo"Dados cadastrados com sucesso";
//  echo $sql;
  }

              function atualizar ($nomefunc,$endfunc,$telfunc,$celfunc,$cpffunc,$usuariofunc,$senhafunc,$codfunc){




           $sql = "UPDATE funcionario SET nomefunc='$nomefunc', endfunc='$endfunc', telfunc='$telfunc',celfunc='$celfunc', cpffunc='$cpffunc',
           usuariofunc='$usuariofunc',senhafunc='$senhafunc' WHERE codfunc='$codfunc'";
           
           mysql_query($sql)or die ("<script>alert('Problema na atualização do funcionario');</script>");
           echo "<script>alert('Dados Atualizados com sucesso')</script>";
           echo"<script>window.location('Flocfuncionario.php');</script>";
           
           }
           function excluir($codfunc){
                    $codfunc = $_POST["codfunc"];
                    
                    $sql = "DELETE FROM funcionario WHERE codfunc=$codfunc";
                    
                    mysql_query($sql)or die ("<script>alert('Problema na Exclusão do funcionario');</script>");
                    
                                        echo "<script>alert('Dados Excluídos com Sucesso!');</script>";
                                        echo"<script>window.location('Flocfuncionario.php')</script>";
           }

           function lista_funcionario(){
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
                     
                     $sql ="SELECT * FROM funcionario";
                     $rs = mysql_query($sql)or die ("Erro na listagem de Funcionario");
                     
                     while($linha = mysql_fetch_array($rs)){
                                  $codfunc = $linha['codfunc'];
                                  $nomefunc = $linha['nomefunc'];
                                  $endfunc = $linha['endfunc'];
                                  $telfunc = $linha['telfunc'];
                                  $celfunc = $linha['celfunc'];
                                  $cpffunc = $linha['cpffunc'];
                                  $usuariofunc = $linha ['usuariofunc'];
                                  $senhafunc = $linha['senhafunc'];
                                  
                                  echo"
                                  
                                  <tr bgcolor='#bcbcbc'>
                                      <td class='h3'>$codfunc</td>
                                      <td class='h3'>$nomefunc</td>
                                      <td class='h3'>$endfunc</td>
                                      <td class='h3'>$telfunc</td>
                                      <td class='h3'>$celfunc</td>
                                      <td class='h3'>$cpffunc</td>
                                      <td class='h3'>$usuariofunc</td>
                                      <td class='h3'>$senhafunc</td>
                                  </tr>
                     ";
                     }
                     echo"</table>";
                     }


               function telalocfunc(){
                    echo"
                    <form action='locfunc.php' method='post'>
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
           
           function locfunc ($cpffunc){
                    $sql ="SELECT * FROM Funcionario WHERE cpffunc='$cpffunc'";
                    $rs  = mysql_query($sql)or die("Erro na Localização do Funcionario");
                    
                    $linha = mysql_fetch_array($rs);
                    
                    $codfunc = $linha['codfunc'];
                    $nomefunc = $linha['nomefunc'];
                    $endfunc = $linha['endfunc'];
                    $telfunc = $linha['telfunc'];
                    $celfunc = $linha['celfunc'];
                    $cpffunc = $linha['cpffunc'];
                    $usuariofunc = $linha['usuariofunc'];
                    $senhafunc = $linha['senhafunc'];
                    
                    echo"
                    <form action='movfunc.php' method='post'>
                    <table width='200' border='0' align='center'>
                    <tr>
                    <td>Código:</td>
                    <td><input type='text' size ='9' name='codfunc' value='$codfunc'><td>
                    </tr>
                    <tr>
                    <td>Nome:</td>
                    <td><input type='text'  size='30' name='nomefunc' value='$nomefunc'><td></tr>
                    <td>Endereço:</td>
                    <td><input type='text'  size='30' name='endfunc' value='$endfunc'><td></tr>
                    <td>Telefone:</td>
                    <td><input type='text'  size='14' name='telfunc' value='$telfunc'><td></tr>
                    <td>Celular:</td>
                    <td><input type='text'  size='14' name='celfunc' value='$celfunc'><td></tr>
                    <td>CPF:</td>
                    <td><input type='text'  size='13' name='cpffunc' value='$cpffunc'><td></tr>
                    <td>Usuário:</td>
                    <td><input type='text'  size='10' name='usuariofunc' value='$usuariofunc'><td></tr>
                    <td>Senha:</td>
                    <td><input type='password'  size='10' name='senhafunc' value='$senhafunc'<td>
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
