<div id="barra_lateral">
<?php
	include 'includes/config.php';

	 // Identificador de la barra lateral 
	$res = mysql_query("SELECT contenido FROM barra_lateral");
	if (!$res) die('Consulta inválida ' . mysql_error());
	$res = mysql_query("SELECT contenido FROM barra_lateral LIMIT 10");
	$barra = mysql_fetch_array($res,MYSQL_BOTH);

	
	
?>	
	</div>
	
	