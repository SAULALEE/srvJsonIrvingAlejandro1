<?php
session_start();

if (!isset($_SESSION['numeroSecreto'])) {
    $_SESSION['numeroSecreto'] = rand(1, 10); // Genera un número aleatorio entre 1 y 10
}

$numeroSecreto = $_SESSION['numeroSecreto'];
$adivinanzaUsuario = isset($_POST['adivinanza']) ? intval($_POST['adivinanza']) : null;

if ($adivinanzaUsuario === null) {
    echo "Por favor, ingresa un número.";
} elseif ($adivinanzaUsuario === $numeroSecreto) {
    echo "¡Correcto! Adivinaste el número.";
    unset($_SESSION['numeroSecreto']); // Reinicia el juego
} else {
    echo "Incorrecto. El número era " . $numeroSecreto . ".";
    unset($_SESSION['numeroSecreto']); // Reinicia el juego
}
?>