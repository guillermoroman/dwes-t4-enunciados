<?php
    // Crear la cookie
    setcookie("user", "Paco", time() + 60*60*24*30);

    // Leer la cookie
    echo "Hola, " . $_COOKIE["user"];

    // Borrar la cookie
    setcookie("user", "", time() - 1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>