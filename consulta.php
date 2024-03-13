

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Consulta Base de Datos</h2>
    <br>
<header>
    <nav>
        <ul>
            <li><h3><a href="index.php">Inicio</a></h3></li>
            <li><h3><a href="form.php">Contacto</a></h3></li>
        </ul>
    </nav>
</header>
    
<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "clientes";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener todos los registros de la tabla "clientes"
$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

// Si hay resultados
if ($result->num_rows > 0) {
    // Número de registros por página
    $registros_por_pagina = 10;
    
    // Página actual
    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
    
    // Calcular el inicio del rango
    $inicio = ($pagina - 1) * $registros_por_pagina;
    
    // Consulta para obtener un rango de registros
    $sql = "SELECT * FROM clientes LIMIT $inicio, $registros_por_pagina";
    $result = $conn->query($sql);
    
    // Crear la tabla HTML para mostrar los registros
    echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Comentarios</th>
            </tr>";
    
    // Mostrar los datos en la tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Nombre'] . "</td>
                <td>" . $row['Domicilio'] . "</td>
                <td>" . $row['Telefono'] . "</td>
                <td>" . $row['Correo'] . "</td>
                <td>" . $row['Comentarios'] . "</td>
              </tr>";
    }
    echo "</table>";
    
    // Botones de navegación
    $sql_total = "SELECT COUNT(*) as total FROM clientes";
    $result_total = $conn->query($sql_total);
    $row_total = $result_total->fetch_assoc();
    $total_registros = $row_total['total'];
    $total_paginas = ceil($total_registros / $registros_por_pagina);
    
    echo "<br>Página: ";
    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a href='consulta.php?pagina=$i'>$i</a> ";
    }
}

// Cerrar la conexión
$conn->close();
?>


</body>
</html>








