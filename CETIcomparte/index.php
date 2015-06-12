<?php 
	include 'cabecera.php';	
	include 'includes/config.php';
	
	
	$esecuel = mysql_query("SELECT * FROM articulos ORDER BY id ASC");
	if (!$esecuel) die('Consulta inválida: ' . mysql_error());
?>

	<div id="contenido_izq">
	
	<?php while ($post = mysql_fetch_array($esecuel)) { 
		@$id = $post['categoria'];
		$categoria = mysql_query("SELECT categoria FROM categorias WHERE id = '$id'"); 
		$categoria = mysql_fetch_array($categoria); ?>
		<h2><a href="individual.php?id=<?php echo $post['id'] ?>"> <?php echo $post['titulo'] ?></a></h2>
		<p><?php echo $post['contenido'] ?> </p>
		<p><?php echo $categoria['categoria']; ?></p>
	<?php } 
	
	include 'pie.php';
	?>
	
	</div>
	
	
	
	
</div>




