<?php 
	include 'cabecera.php';	
	include 'includes/config.php';
	include 'barra_lateral.php';
	include 'pie.php';
	
	$esecuel = mysql_query("SELECT * FROM articulos ORDER BY id DESC");
	if (!$esecuel) die('Invalid query: ' . mysql_error());
?>

	<div id="contenido_izq">
	
	<?php while ($post = mysql_fetch_array($esecuel)) { 
		@$id = $post['categoria'];
		$categoria = mysql_query("SELECT categoria FROM categorias WHERE id = '$id'"); 
		$categoria = mysql_fetch_array($categoria); ?>
		<h2><a href="individual.php?id=<?php echo $post['id'] ?>"> <?php echo $post['titulo'] ?></a></h2>
		<p><?php echo $post['contenido'] ?> </p>
		<p><?php echo $categoria['categoria']; ?></p>
	<?php } ?>
	
	</div>
	
	<?php include 'barra_lateral.php' ?>
</div>




