<?php
session_start();

// Inicializar la palabra secreta si no existe
if (!isset($_SESSION['palabra_secreta'])) {
    $_SESSION['palabra_secreta'] = 'PHP';
    $_SESSION['intentos_restantes'] = 6;
    $_SESSION['letras_adivinadas'] = [];
    $_SESSION['palabra_actual'] = str_repeat('_', strlen($_SESSION['palabra_secreta']));
}

// Mostrar estado actual con espacios
$palabra_actual = implode(' ', str_split($_SESSION['palabra_actual']));
$intentos_restantes = $_SESSION['intentos_restantes'];
$letras_adivinadas = implode(', ', $_SESSION['letras_adivinadas']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ahorcado</title>
</head>
<body>
    <h1>Juego del Ahorcado</h1>
    <p>Palabra: <?= $palabra_actual ?></p>
    <p>Intentos restantes: <?= $intentos_restantes ?></p>
    <p>Letras adivinadas: <?= $letras_adivinadas ?></p>

    <?php if ($intentos_restantes > 0 && strpos($palabra_actual, '_') !== false): ?>
        <form action="procesar.php" method="POST">
            <label for="letra">Introduce una letra:</label>
            <input type="text" name="letra" id="letra" maxlength="1" required>
            <button type="submit">Adivinar</button>
        </form>
    <?php else: ?>
        <p>
            <?php if ($intentos_restantes == 0): ?>
                ¡Has perdido! La palabra era <?= $_SESSION['palabra_secreta'] ?>.
            <?php else: ?>
                ¡Felicidades! Has adivinado la palabra: <?= $_SESSION['palabra_secreta'] ?>.
            <?php endif; ?>
        </p>
        <a href="reset.php">Jugar de nuevo</a>
    <?php endif; ?>
</body>
</html>