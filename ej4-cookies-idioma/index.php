<?php
$idioma = 'es';

if (isset($_POST["idioma"])){
    $idioma = $_POST["idioma"];
    setcookie("idioma", $idioma, time() + 35600*24);
} else {
    $idioma = $_COOKIE["idioma"];
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
    <h1><?php echo $idioma == 'es' ? 'Bienvenido' : 'Welcome' ?></h1>
    
    <form method="POST">
        <button name = "idioma" value ="es">Español</button>
        <button name = "idioma" value ="en">English</button>
    </form>
</body>
</html>