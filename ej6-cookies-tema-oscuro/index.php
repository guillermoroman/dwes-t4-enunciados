<?php

if (isset($_POST["tema"])){
    setcookie("tema", $_POST['tema'], time() + 3600 * 24);
    $tema = $_POST["tema"];
} else if (isset($_COOKIE["tema"])){
    $tema = $_COOKIE["tema"];
} else {
    $tema = 'light';
}

$cssFile = $tema == "dark"? 'dark.css' : 'light.css';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $cssFile?>">
</head>
<body>
    <h1>Elige tu estilo</h1>
    <form method="POST">
        <button name="tema" value="light">Claro</button>
        <button name="tema" value="dark">Oscuro</button>
    </form>
</body>
</html>