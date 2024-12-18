<?php
if (isset($_COOKIE["carrito"])){
    $carrito = json_decode($_COOKIE["carrito"]);
} else {
    $carrito = [];
}


if (isset($_POST["producto"])){
    $carrito[] = $_POST["producto"];
    setcookie("carrito", json_encode($carrito), time() + 3600 * 24);
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
    <form method = "POST">
        <input type="text" name="producto" required>
        <button type="submit">Agregar al carrito</button>
    </form>

    <h1>Productos en el carrito</h1>
    <ul>
        <?php foreach($carrito as $producto): ?>
            <li><?=$producto?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>