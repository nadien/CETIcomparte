<?php if($_POST) {
   
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];
    if ($usuario == "" or $contrasena == "" or $email == "") { 
        $mensaje= sprintf("Hay algún campo vacío");
    }
    else {
        include '../includes/config.php';
        $sql = sprintf("INSERT INTO usuarios VALUES (NULL,'$usuario', md5('$contrasena'), '$email')");
        $res = mysql_query($sql);
        if (!$res) die('Invalid query: ' . mysql_error());
        $mensaje = sprintf("Usuario registrado correctamente");
    }
} ?>
 
 
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<link rel="stylesheet" type="text/css" href="../estilos/estilo.css" />
 
</head>
<body>
<div id="registro">
    <?php if (@$mensaje) { ?>
        <div class="error">
            <?php echo $mensaje ?>
        </div>
    <?php } ?>
    <form method="post" action="registro.php">
     
<br>
        <label>Nombre de usuario: </label><input type="text" name="usuario" value=""><br>
     <br>   <label>Contraseña </label><input type="password" name="contrasena"><br>
      <br>  <label>Email: </label><input type="text" name="email" value=""><br>
        <div class="submit">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
 
</body>
</html>
