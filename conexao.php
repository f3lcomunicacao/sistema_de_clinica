<?php
           class Conexao {
           function con(){
           $conexao=mysql_connect("localhost","root","") or die ("conexao não estabelecida");
           $db=mysql_select_db ("clinica_fernando")or die ("Banco não encontrado");
           
           return $db;
           }
      }
      
?>

