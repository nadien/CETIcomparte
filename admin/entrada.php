<?php 
session_start();
if($_POST) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
     
    include '../includes/config.php';
    
    $res = mysql_query("SELECT id FROM usuarios WHERE usuario = '$usuario' and contrasena =  md5('$contrasena')");
    if (!$res) die('Invalid query: ' . mysql_error());
    list($count) = mysql_fetch_row($res);
    if (!$count) $mensaje = sprintf("Usuario o contraseña equivocados");
    else {
        $_SESSION['entrado'] = true;
        $_SESSION['id'] = $count;
        header('Location:index.php');
    }
     session_destroy();
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
    <form method="post" action="entrada.php">
        <label>Nombre de usuario: </label><input type="text" name="usuario" value=""><br>
        <label>Contraseña </label><br><input type="password" name="contrasena"><br>
        <div class="submit">
            <input type="submit" value="Entrar">
        </div>
    </form>
</div>
 
</body>
</html>
