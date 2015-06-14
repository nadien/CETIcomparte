<div id="barra_lateral">
<?php
	include 'includes/config.php';

	 // Identificador de la barra lateral 
	$res = mysql_query("SELECT contenido FROM barra_lateral where id = 1");
	if (!$res) die('Consulta inválida ' . mysql_error());
	$barra = mysql_fetch_array($res,MYSQL_BOTH);

	
        $unno = mysql_query("SELECT contenido FROM barra_lateral where id = 2");
	$uno = mysql_fetch_array($unno);

 $ddos = mysql_query("SELECT contenido FROM barra_lateral where id = 3");
	$dos = mysql_fetch_array($ddos);

	  $ttres = mysql_query("SELECT contenido FROM barra_lateral where id = 4");
	$tres = mysql_fetch_array($ttres);
	
 $ccuatro = mysql_query("SELECT contenido FROM barra_lateral where id = 5");
	$cuatro = mysql_fetch_array($ccuatro);

 $ccinco = mysql_query("SELECT contenido FROM barra_lateral where id = 6");
	$cinco = mysql_fetch_array($ccinco);

 $sseis = mysql_query("SELECT contenido FROM barra_lateral where id = 7");
	$seis = mysql_fetch_array($sseis);

 $ssiete = mysql_query("SELECT contenido FROM barra_lateral where id = 8");
	$siete = mysql_fetch_array($ssiete);
	
?>	
	</div>
	
	
