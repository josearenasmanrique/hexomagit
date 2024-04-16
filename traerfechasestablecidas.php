<?php
// Conexión a la base de datos
require('conexion.php');

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Realizar la consulta SQL
$sql = "SELECT ID, HoraEstablecida FROM horasestablecidas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recorrer los resultados y generar filas en la tabla HTML
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td style="color:black;"><div style="display: none;"><input type="text" name="id[]" value="' . $row["ID"] . '"></div></td>';
        echo '<td><input type="time" name="horas[]" value="' . date("H:i", strtotime($row["HoraEstablecida"])) . '"></td>';
        echo '<td><button style="width: 120px;" type="button" class="botonesmodalesiniciales2" onclick="eliminarhoraestablecida(\'' . $row["ID"] . '\');">Eliminar</button></td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td style="color:black;"><div style="display: none;"><input type="text" name="id[]" value="1"></div></td>';
    echo '<td><input type="time" name="horas[]" value=""></td>';
    echo '<td><button style="width: 120px;" type="button" class="botonesmodalesiniciales2" onclick="eliminarhoraestablecida(\'1\');">Eliminar</button></td>';
    echo '</tr>';
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
