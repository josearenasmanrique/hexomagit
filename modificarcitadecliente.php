<?php
require('conexion.php');
$idagendac = $_GET['idagendac'];
$idparallevar = $_GET['idparallevar'];
$mesparallevar = $_GET['mesparallevar'];
$anoparallevar = $_GET['anoparallevar'];
$servicioparallevar = $_GET['servicioparallevar'];
$diaparallevar = $_GET['diaparallevar'];
$horarallevar = $_GET['horarallevar'];
$subserviciosparallevar = $_GET['subserviciosparallevar'];
$totalparallevar = $_GET['totalparallevar'];
try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Consulta para insertar en la tabla "agenda" y obtener el idAgenda
    $sqlAgenda = "UPDATE `agenda` 
    SET 
    `dia`=:dia,
    `mes`=:mes,
    `año`=:ano,
    `horario`=:horario
    WHERE `idAgenda`=:idagenda
    ";
    $stmtAgenda = $conn->prepare($sqlAgenda);
    $stmtAgenda->bindParam(':dia', $diaparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':mes', $mesparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':ano', $anoparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':horario', $horarallevar, PDO::PARAM_STR);
    $stmtAgenda->bindParam(':idagenda', $idagendac, PDO::PARAM_INT);
    $stmtAgenda->execute();
    $idAgenda =  $idagendac;
    // Consulta para insertar en la tabla "adquisiciones" usando el idAgenda
    $sqlAdquisiciones = "UPDATE `adquisiciones` 
    SET 
    `Servicio_nombre`=:Servicio_nombre,
    `Sub_servicio_nombre`=:Sub_servicio_nombre 
    WHERE `idAgenda`=:idAgenda";
    $stmtAdquisiciones = $conn->prepare($sqlAdquisiciones);
    $stmtAdquisiciones->bindParam(':Servicio_nombre', $servicioparallevar, PDO::PARAM_STR);
    $stmtAdquisiciones->bindParam(':Sub_servicio_nombre', $subserviciosparallevar, PDO::PARAM_STR);
    $stmtAdquisiciones->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtAdquisiciones->execute();
    // Consulta para insertar en la tabla "pagos"
    $estatus_pago="Pendiente";
    $sqlPagos = "UPDATE `pagos` 
    SET 
    `Estatus_Pago`=:Estatus_Pago,
    `Monto`=:Monto 
    WHERE `idAgenda`= :idAgenda";
    $stmtPagos = $conn->prepare($sqlPagos);
    $stmtPagos->bindParam(':Estatus_Pago',$estatus_pago, PDO::PARAM_STR); // Asigna el estado del pago, puede ser "Pendiente" u otro valor
    $stmtPagos->bindParam(':Monto', $totalparallevar, PDO::PARAM_STR);
    $stmtPagos->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtPagos->execute();
    $response['mensaje'] = "concluido";
} catch (PDOException $e) {
    // Maneja cualquier error aquí, por ejemplo, registrar el error.
    $response['mensaje'] = "Error: " . $e->getMessage();
}
// Cierra la conexión a la base de datos
$conn = null;
header('Content-Type: application/json');
echo json_encode($response);
?>