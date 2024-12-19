<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $letra = strtoupper($_POST['letra']);

    // Validar la entrada
    if (!ctype_alpha($letra) || strlen($letra) != 1) {
        header('Location: index.php');
        exit;
    }

    // Evitar procesar letras repetidas
    if (in_array($letra, $_SESSION['letras_adivinadas'])) {
        header('Location: index.php');
        exit;
    }

    $_SESSION['letras_adivinadas'][] = $letra;

    $palabra_secreta = $_SESSION['palabra_secreta'];
    $palabra_actual = $_SESSION['palabra_actual'];

    // Comprobar si la letra está en la palabra secreta
    if (strpos($palabra_secreta, $letra) !== false) {
        // Actualizar la palabra actual
        for ($i = 0; $i < strlen($palabra_secreta); $i++) {
            if ($palabra_secreta[$i] === $letra) {
                $palabra_actual[$i] = $letra;
            }
        }
        $_SESSION['palabra_actual'] = $palabra_actual;
    } else {
        // Reducir los intentos restantes
        $_SESSION['intentos_restantes']--;
    }
}

header('Location: index.php');