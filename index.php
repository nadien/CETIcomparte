<?php 
	include 'cabecera.php';	
	include 'includes/config.php';
	
	
<<<<<<< HEAD
	$esecuel = mysql_query("SELECT * FROM articulos ORDER BY id desc");
=======
	$esecuel = mysql_query("SELECT * FROM articulos ORDER BY id ASC");
>>>>>>> 714d59ac9a604aaad71c96766c800ea1243e2fd1
	if (!$esecuel) die('Consulta inválida: ' . mysql_error());
?>

	<div id="contenido_izq">
	

	<?php while ($post = mysql_fetch_array($esecuel)) { 
		@$id = $post['categoria'];
		$categoria = mysql_query("SELECT categoria FROM categorias WHERE id = '$id'"); 
		$categoria = mysql_fetch_array($categoria); ?>
		<h2><a href="individual.php?id=<?php echo $post['id'] ?>"> <?php echo $post['titulo'] ?></a></h2>
		<p><?php echo $post['contenido'] ?> </p>
<<<<<<< HEAD
		<p><?php echo "<p style='color:gray; font-size: 15px; '> ".$categoria['categoria']."</p>" ?></p>
=======
		<p><?php echo $categoria['categoria']; ?></p>
>>>>>>> 714d59ac9a604aaad71c96766c800ea1243e2fd1
	<?php } 
	
	include 'pie.php';
	?>
	
	</div>
	
	
	
	
</div>




