<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];

    // Crear cookie
    setcookie('usuario', $nombre, time() + 3000);
    header("Location: $_SERVER[PHP_SELF]");
}

if (isset ($_COOKIE['usuario'])){
    echo "<h1>Hola, " . $_COOKIE['usuario'] . "!</h1>";
    ?>
    <!-- Borrar la cookie -->
    <p>¿Quieres borrar la cookie?</p>
    <a href="borrar_cookie.php">Borrar</a>

<?php
}