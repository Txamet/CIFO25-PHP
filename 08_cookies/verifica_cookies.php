<?php
$hay_cookies = true;

if (isset($_COOKIE["nombre"])) {
    $nombre = $_COOKIE["nombre"];
    echo "Cookie Nombre: " . $nombre;
} else {
    echo "La cookie 'nombre' no está configurada.";
    $hay_cookies = false;
}

echo "<br>";

if (isset($_COOKIE["mail"])) {
    $mail = $_COOKIE["mail"];
    echo "Cookie Mail: " . $mail;
} else {
    echo "La cookie 'mail' no está configurada.";
    $hay_cookies = false;
}

if (!$hay_cookies) {
header("refresh:1;url=form_crea_cookies.php");
}
?>
