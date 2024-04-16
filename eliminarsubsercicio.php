<?php
require('conexion.php');


// Obtén el valor de 'servicio' desde la URL
$servicio = $_GET['servicio'];

try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepara la consulta SQL
    $sql = "DELETE FROM subservicios WHERE IdSubservicio = :servicio";
    $stmt = $conn->prepare($sql);

    // Vincula el parámetro :servicio con el valor
    $stmt->bindParam(':servicio', $servicio, PDO::PARAM_INT);

    // Ejecuta la consulta
    $stmt->execute();

    $response['eliminado'] = true;
    $response['mensaje'] = "Registro eliminado exitosamente";

} catch (PDOException $e) {
    $response['eliminado'] = false;
    $response['mensaje'] = "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conn = null;
header('Content-Type: application/json');
echo json_encode($response);
?>
