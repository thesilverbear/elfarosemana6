
<?php
// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];

    // Print para comprobar la recepción de los datos del formulario:
    echo "Nombre recibido: " . $nombre . "<br>";
    echo "Apellido recibido: " . $apellido . "<br>";
    echo "Correo recibido: " . $correo . "<br>";
    echo "Comentario recibido: " . $comentario . "<br>";
}
?>



