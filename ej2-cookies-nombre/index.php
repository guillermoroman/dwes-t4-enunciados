<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset ($_COOKIE['usuario'])){
    echo "<h1>Hola, " . $_COOKIE['usuario'] . "!</h1>";
}
?>



    <h1>Establecer cookie</h1>
    <form action="pagina2.php" method="post">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>