<?php
       include("TelaCadastro.php");
       class Atendimento extends TelaCadastro{
       
       function locatend($cookiecodpac){
       $sql="SELECT * FROM paciente AS pac, atendimento AS atend, medico AS med WHERE atend.codpac = $cookiecodpac
       AND med.codmed= atend.codmed AND pac.codpac=atend.codpac ORDER BY codatend ASC";
       $rs=mysql_query($sql):
       $cont=mysql_num_rows($rs);
       
       if($cont ==0){
       echo "Sem consultas marcadas!";
       }
       else
       {
       echo"
       <table width='400' align='centerr'>
       <tr>
       <td>Médico</td>
       <td>Paciente</td>
       <td>Hora Atend.</td>
       <td>Data Atend.</td>
       
       </tr>
       ":
       
       while($linha=mysql_fetch_array($rs)){
       
       $nomemed=$linha['nomemed'];
       $nomepac=$linha['nomepac'];
       $horaatend=$linha['horaatendimento'];
       $dataatend=$linha['datatendimento'];
       
       echo"
       <tr>
       <td>$nomemed</td>
       <td>$nomepac></td>
       <td>$horaatend</td>
       <td>$dataatend</td>
       </tr>
       ";
       }
       echo"</table>";
       }
       }

       function telacadatend($cookiecodpac, $cookiecodmed){
       echo"

       <form action='cadatend.php' method='post'>
       <table width='200' border='0' aling='center'>
       <tr>";
       $sl="SELECT *FROM paciente WHERE codpac=$cookiecodpac";
       $rs=mysql_query("Problema na Consulta");
       echo"
       <tr>
       <td class='h2'>Paciente</td>
       <td>
       <select name='codpac'>";
       while($linha=mysql_fetch_array($RS)){
       $codpac=$linha['codpac'];
       $nomepac=$linha['nomepac'];
       echo" <option value=$codpac>$nomepac</option>";
       }
       echo"
       </select>
       </td>
       </tr>
       ";
       $sql="SELECT * FROM medico WHERE codmed=$cookiecodmed";
       $rs=mysql_query($sql) or die ("Problema na consulta medico ")"


      /* <form action='Fatendimento.php' method='post'>
       <table width='200' border='0' align='center'>
       <tr>";
       
       
       $sql ="SELECT * FROM paciente WHERE codpac = $cookiecodpac";
       $rs = mysql_query($sql)or die ("Problema na Consulta da tabela paciente");

       echo"

       <tr>
       <td class='h2'>Paciente</td>
       <td>
       <select name='codpac'>";
       
       while($linha=mysql_fetch_array($rs)){
       $codpac=$linha['codpac'];
       $nomepac=$linha['nomepac'];
       
       echo"<option value=$cocpac>$nomepac</option>
       </select>
       </td>
       </tr>
       ";
       
       }
       $sql="SELECT * FROM medico";
       $rs = mysql_query ($sql) or die ("Problema na consulta na tabela medico");
       echo"
       <tr>
       <td class='h2'>Médico</td>
       <td>
       <select name='codmed'>";
       while($linha=mysql_fetch_array($rs)){
       $codmed=$linha['codmed'];
       $nomemed=$linha['nomemed'];
       echo"<option value=$codmed>$nomemed</option>";
       }
       echo"
       </select>
       </td>
       </tr>
       ";
       $data=date("Y-m-d");
       $hora=date("H:i");
       
       echo"
       <tr>
       <td class='h2'>Data Atendimento</td>
       <td><input name='dataatend' type='text' size='10'></td>
       </tr>
       <tr>
       <td class='h2'>Hora Atendimento</td>
       <td><input name='horaatend' type='text' size='6'></td>
       </tr>
       <tr>
       <td class='h2'>Data Reserva</td>
       <td><input name='datareserva' type='text' size='10' value='$data'></td>
       </tr>
       <tr>
       <td class='h2'>Hora Reserva</td>
       <td><input name='horareserva' type='text' size='6' value='$hora'></td>
       </tr>
       <tr>
       <td><input type='submit' value='agendar consulta'>&nbsp;&nbsp;<input type='reset' value='Limpar Dados'></td>
       <tr>
       ";
       }
       function incluiratendimento
       
       
       
       
       
       
       
       
       
       
       
       
       
       

