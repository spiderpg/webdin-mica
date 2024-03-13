<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $comentarios = isset($_POST['comentarios']) ? $_POST['comentarios'] : '';

    if ($nombre !== '' && $domicilio !== '' && $telefono !== '' && $correo !== '') {
        $stmt = $conn->prepare("INSERT INTO clientes (nombre, domicilio, telefono, correo, comentarios) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombre, $domicilio, $telefono, $correo, $comentarios);
        
        if ($stmt->execute()) {
            echo "Los datos se guardaron correctamente.";
        } else {
            echo "Error al guardar los datos, intente de nuevo: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: Todos los campos son obligatorios.";

        
    }

}

?>

</body>
</html>