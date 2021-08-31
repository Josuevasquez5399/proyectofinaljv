<?php
$usuario=$_GET['usuario'];
$contraseña=$_GET['contraseña'];

if ($usuario=="admin" and $contraseña=="mensajes") {
    header ("location: ver_mensajes.php");
}
else {
    echo '<script lenguage="javascript">';
    echo 'alert("Usuario o contraseña incorrecta")';
    echo '</script>';
}
?>