<?php
require('conexion.php');
$servicio = $_GET['servicio'];
try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Inicia una transacción
    $conn->beginTransaction();
    // Elimina los registros de la tabla subservicios donde IdServicio sea igual a :servicio
    $sql = "DELETE FROM subservicios WHERE IdServicio = :servicio";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':servicio', $servicio, PDO::PARAM_INT);
    $stmt->execute();
    // Elimina los registros de la tabla servicios donde IdServicio sea igual a :servicio
    $sql = "DELETE FROM servicios WHERE IdServicio = :servicio";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':servicio', $servicio, PDO::PARAM_INT);
    $stmt->execute();
    // Confirma la transacción
    $conn->commit();
    $response['mensaje'] = "Eliminación exitosa";
} catch (PDOException $e) {
    // En caso de error, se revierte la transacción
    $conn->rollBack();
    $response['mensaje'] = "Error: " . $e->getMessage();
}
// Cierra la conexión a la base de datos
$conn = null;
header('Content-Type: application/json');
echo json_encode($response);
?>
