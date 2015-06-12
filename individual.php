<?php 
	include 'cabecera.php';	
	include 'includes/config.php';
	$id = $_GET['id'];
	if ($_POST) {
		$nombre = $_POST['nombre'];
		$comentario = $_POST['comentario'];
		
		$esecuel = mysql_query("INSERT INTO comentarios VALUES (NULL, '$id', '$nombre', '$comentario', 0)");
        if (!$esecuel) die('Invalid query: ' . mysql_error());
	}
	
	$esecuel = mysql_query("SELECT * FROM articulos WHERE id = '$id' LIMIT 1");
	if (!$esecuel) die('Invalid query: ' . mysql_error());
?>

	<div id="contenido_izq">
	<?php while ($post = mysql_fetch_array($esecuel)) { 
		@$ids = $post['categoria'];
		$sql = sprintf("SELECT categoria FROM categorias WHERE id = '$ids'");
		$categoria = mysql_query($sql); 
		$categoria = mysql_fetch_array($categoria); ?>
		<h2><?php echo $post['titulo'] ?></h2>
		<?php echo $post['contenido'] ?>
		<p><?php echo $categoria['categoria']; ?></p>
	<?php } ?>
	<div class="futer">	
<h3>Comentarios</h3>
	<?php 
	$esecuel = mysql_query("SELECT * FROM comentarios WHERE articulo = '$id' and estado = 1");
	if (!$esecuel) die('Consulta invalida: ' . mysql_error()); ?>
	<?php while ($comentario = mysql_fetch_array($esecuel)) { ?>
<hr>
		<?php echo strip_tags($comentario['nombre']) ?><br>
		<?php echo strip_tags($comentario['comentario']) ?> <br><br>
	<?php } ?>
	
	<form action="individual.php?id=<?php echo $id ?>" method="POST">
	<label for="nombre">Nombre:</label><input type="text" name="nombre"><br>
	<label for="comentario">Comentario:</label><textarea name="comentario"></textarea>
	<input type="submit" value="Enviar">
	</form>
	</div>
	</div>
	<?php include 'barra_lateral.php' ?>
	
	
</div>
