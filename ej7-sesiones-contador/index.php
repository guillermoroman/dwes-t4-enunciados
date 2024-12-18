<?php

session_start();

if (!isset($_SESSION['visitas'])){
    $_SESSION['visitas'] = 0;
}

$_SESSION['visitas']++;



if (isset($_POST['cerrar_sesion'])){
    session_destroy();
    header('Location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php echo "Has visitado esta página " . $_SESSION['visitas'] . " veces."; ?>
    <form method="POST">
        <button type="submit" name="cerrar_sesion">Cerrar sesión</button>
    </form>
    
</body>
</html>