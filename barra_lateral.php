<div id="barra_lateral">
<?php


	 // Identificador de la barra lateral 
	$res = mysql_query("SELECT contenido, id FROM barra_lateral");
	if (!$res) die('Consulta inválida ' . mysql_error());
	$barrera = mysql_fetch_array($res,MYSQLI_NUM);

	
?>	
	</div>
	
	