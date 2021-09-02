<?php 
include("db.php");

if (isset($_POST['enviar'])) {
    $nomensaje=$_POST['nomensaje'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    $query="INSERT INTO mensajes (nomensaje, nombre, telefono, correo, mensaje) 
    VALUES ('$nomensaje', '$nombre', '$telefono', '$correo', '$mensaje')";
    $resultado=mysqli_query($conn,$query);
    if ($resultado) {
    echo '<script lenguage="javascript">';
    echo 'alert("Tu mensaje ha sido enviado")
    window.location = "contactenos.php";
    </script>';
    }
}
?>