<?php
require('conexion.php');
$idagenda = $_GET['idagenda']; // Obtiene el valor de idagenda de la URL
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Consulta para actualizar el estatus del pago
    $sql_update = "UPDATE `pagos`
                   SET `Estatus_Pago`='Completado'
                   WHERE `idAgenda`= $idagenda";
    $stmt_update = $conn->query($sql_update);

    // Consulta para obtener el correo del cliente asociado a la agenda
    $sql_correo_cliente = "SELECT cli.Correo_cliente
                           FROM agenda AS age
                           JOIN cliente AS cli ON age.idCliente = cli.idCliente
                           WHERE age.idAgenda = $idagenda";
    $stmt_correo_cliente = $conn->query($sql_correo_cliente);
    $result_correo_cliente = $stmt_correo_cliente->fetch(PDO::FETCH_ASSOC);

    if ($result_correo_cliente) {
        $correo_cliente = $result_correo_cliente['Correo_cliente'];
        
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = "support@lahexoma.site";
        $to = $correo_cliente;
        $subject = "Prueba";
        $message = "https://lahexoma.site/ticket.php?idagenda=".$idagenda;
        $headers = "From: " . $from;
        mail($to, $subject, $message, $headers);
    } else {
        echo "No se encontró el correo del cliente asociado a esta agenda.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

echo json_encode("completado");
?>
