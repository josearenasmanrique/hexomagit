<?php
require('conexion.php');


try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Realiza la consulta para obtener los datos de servicios
    $sql = "SELECT `IdServicio`, `Servicio_Nombre` FROM `servicios`";
    $stmt = $conn->query($sql);

    echo '<select id="servicioSelectnuevacita" onchange="ponerbotonnuevacita();">';
    echo '<option value=""></option>';

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['IdServicio'] . '">' . $row['Servicio_Nombre'] . '</option>';
    }

    echo '</select>';
} catch (PDOException $e) {
    // Manejo de errores si es necesario
    echo "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conn = null;
?>
