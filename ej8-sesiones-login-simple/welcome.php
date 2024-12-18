<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
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
    <h1>Bienvenido, <?= $_SESSION['username']?></h1>
    <form method = "POST" action = "logout.php">
        <button type="submit" name="logout">Cerrar sesión</button>
    </form>
</body>
</html>