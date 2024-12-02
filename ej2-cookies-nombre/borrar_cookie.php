<?php
    // Borrado de la cookie
    if (isset ($_COOKIE['usuario'])){
        setcookie('usuario', '', time() -100);
    } else {
        echo  "<p>Bienvenido, desconocido.</p>";
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
    <h1>¡Te has quedado sin galleta!</h1>
    <a href="index.php">Volver a inicio</a>
</body>
</html>