<?php 

echo "<h2> articulo publicado con [exito, <a href='../index.php'>regresar</a> </h2>";

if ($_POST) {
	include '../../includes/config.php';
	
	$titulo = $_POST['titulo'];
	$contenido = $_POST['contenido'];
	$autor = $_POST['autor'];
	$categoria = $_POST['categoria'];
	$id = $_POST['post'];
	echo $id;



	if ($id > 0) {
		
		$sql = sprintf("INSERT INTO articulos values (NULL ,titulo = '$titulo', contenido = '$contenido', categoria = '$categoria') ");
		$res = mysql_query($sql);
		
        if (!$res) die('Invalid query: ' . mysql_error());
	}
	else {

		$sql = sprintf("INSERT INTO articulos VALUES (NULL, '$titulo', '$contenido', '$autor', $categoria)");
		$res = mysql_query($sql);
		if($sql) echo "holaaaaaa";
       
 	if (!$res) die('Invalid query: ' . mysql_error());
        $new_id = mysql_insert_id();
        echo $new_id;
	 
    } 

	
}  ?>
