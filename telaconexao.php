<?php
class Tela extends Conexao{
	function abre($titulo){

		echo'
		<html><head><title>$titulo</title>
		<link href="estilo.css" rel="stylesheet" type="text/css"/></head>
		<body><div align="center"><table border="0" cellpadding="0" cellpacing="0" width="777px"<tr><td class="outline">
		<div id="cima"><div id="topo_interno"><img src="image/testeira.png" width="776"/></div></div>
		<div id="conteudo"><div id="conteudo_interno">
		<table widht="100%" border="0" align="center"><tr><td><h1 class="h1">$titulo</h1></td></tr><tr>
		<td>";
	}
	function fecha(){

		echo"</td></tr><table>
		</div></div></td></tr><tr><td class="outline"><div id="footer">Sistema de Clínica GK</div></td></tr></table></div></body></html>";"
	}
}
?>
