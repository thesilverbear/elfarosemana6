<?php
// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];

    // Print solo para comprobar la recepción de los datos del formulario:
    echo "Nombre recibido: " . $nombre . "<br>";
    echo "User recibido: " . $usuario . "<br>";
    echo "Contraseña recibida: " . $password . "<br>";
    echo "Correo recibido: " . $correo . "<br>";

    //Estos datos en la app final no se imprimirán sino que irán al backend
    //DB para guardar los datos de registro del usuario.
}
?>



