<?php
require('conexion.php');
$response = array(); // Crear un arreglo de respuesta
$idagendab = $_GET['idagendab'];
try {
    // Crear una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Actualizar la tabla agenda
    $sql = "UPDATE agenda SET dia = 0, mes = 0, año = 0, horario = 0 WHERE idAgenda = :idagenda";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idagenda', $idagendab, PDO::PARAM_INT);
    $stmt->execute();
    // Actualizar la tabla pagos
    $sql = "UPDATE pagos SET Estatus_Pago = 'Cancelado' WHERE idAgenda = :idagenda";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idagenda', $idagendab, PDO::PARAM_INT);
    $stmt->execute();
    // Confirmar la transacción
    $response['mensaje'] = "Eliminación exitosa";
} catch (PDOException $e) {
    // En caso de error, revertir la transacción
    $conn->rollBack();
    $response['mensaje'] = "Error: " . $e->getMessage();
}
// Cerrar la conexión a la base de datos
$conn = null;
header('Content-Type: application/json');
echo json_encode($response);
?>
