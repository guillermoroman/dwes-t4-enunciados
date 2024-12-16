<?php

if (isset($_COOKIE['contador'])){
    $contador = $_COOKIE['contador'] + 1;
    $mensaje = "Nos has visitado $contador veces.";
} else {
    $contador = 1;
    $mensaje = "Bienvenido por primera vez";
}

setcookie('contador', $contador, time() + 3600 * 24);

if (isset($_POST['reset'])){
    setcookie('contador', '', time() -5000);
    header("Location: ". $_SERVER['PHP_SELF']);
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
    <h1>Contador de visitas</h1>
    <p><?=$mensaje?></p>
    <form method="POST">
        <button name = "reset">Reiniciar contador</button>
    </form>
    
</body>
</html>