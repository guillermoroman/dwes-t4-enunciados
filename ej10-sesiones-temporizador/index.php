<?php

session_start();

if (!isset($_SESSION['tiempo_inicio'])){
    $_SESSION['tiempo_inicio'] = time();
}

$tiempoTranscurrido = time() - $_SESSION['tiempo_inicio'];

echo "Tiempo transcurrido: " . $tiempoTranscurrido . "segundos";