<?php
require('conexion.php');
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
    $sqlAgenda = "INSERT INTO `agenda`(`idCliente`, `dia`, `mes`, `año` , `horario`) VALUES (:idCliente, :dia, :mes, :ano , :horario)";
    $stmtAgenda = $conn->prepare($sqlAgenda);
    $stmtAgenda->bindParam(':idCliente', $idparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':dia', $diaparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':mes', $mesparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':ano', $anoparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':horario', $horarallevar, PDO::PARAM_STR);
    $stmtAgenda->execute();
    $idAgenda = $conn->lastInsertId();
    // Consulta para insertar en la tabla "adquisiciones" usando el idAgenda
    $sqlAdquisiciones = "INSERT INTO `adquisiciones`(`idAgenda`, `Servicio_nombre`, `Sub_servicio_nombre`) VALUES (:idAgenda, :Servicio_nombre, :Sub_servicio_nombre)";
    $stmtAdquisiciones = $conn->prepare($sqlAdquisiciones);
    $stmtAdquisiciones->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtAdquisiciones->bindParam(':Servicio_nombre', $servicioparallevar, PDO::PARAM_STR);
    $stmtAdquisiciones->bindParam(':Sub_servicio_nombre', $subserviciosparallevar, PDO::PARAM_STR);
    $stmtAdquisiciones->execute();
    // Consulta para insertar en la tabla "pagos"
    $estatus_pago="Pendiente";
    $sqlPagos = "INSERT INTO `pagos` (`idCliente`, `idAgenda`, `Estatus_Pago`, `Monto`) VALUES (:idCliente, :idAgenda, :Estatus_Pago, :Monto)";
    $stmtPagos = $conn->prepare($sqlPagos);
    $stmtPagos->bindParam(':idCliente', $idparallevar, PDO::PARAM_INT);
    $stmtPagos->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtPagos->bindParam(':Estatus_Pago',$estatus_pago, PDO::PARAM_STR); // Asigna el estado del pago, puede ser "Pendiente" u otro valor
    $stmtPagos->bindParam(':Monto', $totalparallevar, PDO::PARAM_STR);
    $stmtPagos->execute();
    $sqlPagos = "INSERT INTO `resultados`(`idAgenda`) VALUES (:idAgenda)";
    $stmtPagos = $conn->prepare($sqlPagos);
    $stmtPagos->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtPagos->execute();    
    $sqlfacturas = "INSERT INTO  facturas ( idAgenda, Estatus_factura, RFC) VALUES (:idAgenda, 'Sin_instruccion', '-')";
    $stmtPagos = $conn->prepare($sqlfacturas);
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