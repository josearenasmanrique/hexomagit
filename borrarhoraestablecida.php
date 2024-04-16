<?php
// Verifica si se proporcionó el parámetro 'hora' en la URL
if (isset($_GET['hora'])) {
    // Recoge el valor del parámetro 'hora' y realiza alguna validación si es necesario
    $hora = $_GET['hora'];

    // Credenciales de la base de datos
    require('conexion.php');


    // Crear una conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para eliminar el registro
    $sql = "DELETE FROM `horasestablecidas` WHERE `ID` = '$hora'";

    if ($conn->query($sql) === TRUE) {
        // La eliminación fue exitosa
        $response = array('message' => 'Registro eliminado con éxito');
        echo json_encode($response);
    } else {
        // Hubo un error en la eliminación
        $response = array('error' => 'Error al eliminar el registro: ' . $conn->error);
        echo json_encode($response);
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    // No se proporcionó el parámetro 'hora' en la URL
    $response = array('error' => 'Parámetro "hora" no proporcionado');
    echo json_encode($response);
}
?>
