<?php
require('conexion.php');
$iduser = $_GET['iduser']; // Obtiene el valor de iduser de la URL
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "
    SELECT c.idAgenda,c.idCliente,c.dia,c.mes,c.año,c.horario,ad.idAdquisiciones, ad.Servicio_nombre,ad.Sub_servicio_nombre, 
    CONCAT(cl.`Nombre_cliente`, ' ', cl.`Apellido1_cliente`, ' ', cl.`Apellido2_cliente`) AS `NombreCompleto`,
   pg.IdPago,  pg.`Estatus_Pago`, pg.`Monto`,fac.ruta_factura,fac.ruta_constancia_fiscal,fac.Estatus_factura,ser.IdServicio
FROM agenda AS c 
JOIN adquisiciones AS ad ON ad.idAgenda=c.idAgenda 
JOIN cliente AS cl ON cl.idCliente=c.idCliente 
JOIN pagos AS pg ON pg.idAgenda=c.idAgenda 
JOIN facturas AS fac ON fac.idAgenda=pg.idAgenda
JOIN servicios as ser ON ser.Servicio_Nombre=ad.Servicio_nombre
WHERE c.idCliente=$iduser;";
    $stmt = $conn->query($sql);
    $tableRows = ''; // Inicializa una variable para las filas de la tabla

    while ($row = $stmt->fetch()) {
        $ruta_factura= $row['ruta_factura'];
        $idCliente = $row['idCliente'];
        $nombreCompleto = $row['NombreCompleto'];
        $idAgenda = $row['idAgenda'];
        $IdServicio = $row['IdServicio'];
        $dia = $row['dia'];
        $mes = $row['mes'];
        $año = $row['año'];
        $horario = $row['horario'];
        $idAdquisiciones = $row['idAdquisiciones'];
        $servicioNombre = $row['Servicio_nombre'];
        $subServicioNombre = $row['Sub_servicio_nombre'];
        $idPago = $row['IdPago'];
        $estatusPago = $row['Estatus_Pago'];
        $monto = $row['Monto'];
        $estatusfactura = $row['Estatus_factura'];
        $estatusCita = "En_espera";
        $botones1 = '<a class="icono" style="background-color: brown;color:white;" onclick="abrirmodificacioncita(' . $IdServicio . ',' . $idAgenda . ',' . $idCliente . ');">Modificar cita</a>';
        $botones2 = '<a class="icono" style="background-color: brown;color:white;" onclick="eliminarcitaompleto(' . $idAgenda . ');">Cancelar Cita</a>';
        $botones3 = '';
        if ($estatusPago == "Cancelado") {
            $estatusCita = "Cancelada";
            $botones1 = "";
            $botones2 = "";
        }
        if ($estatusPago == "Finalizados") {
            $estatusCita = "Completado";
            $botones1 = '<a style="background-color: orange;color:black;"  onclick="verticketdepago(' . $idAgenda . ');">Ver ticket de pago</a>';
            if($estatusfactura=="Solicitada"){
                $botones2 = '<a style="background-color: aqua; color: black;" onclick="alert(\"Su factura ha sido solicitada\");">Factura Solicitada</a>';
            }
            if($estatusfactura=="Completada"){
                $botones2 = '<a style="background-color: aqua; color: black;" href="' . $ruta_factura . '" target="_blank">Ver Factura</a>';
            }    
            if($estatusfactura=="Sin_instruccion"){
                $botones2 = '<a style="background-color: orange;color:black;"  onclick="solicitarfactura(' . $idAgenda . ');">Solicitar factura</a>';
            }
            if($estatusfactura=="Cancelada"){
                $estatusCita = "Cancelada";
             }
            // Aquí realizas la consulta para obtener el contenido del blob
            $sqlResultados = "SELECT `ruta_archivo` FROM `resultados` WHERE `idAgenda` = :idAgenda";
            $stmtResultados = $conn->prepare($sqlResultados);
            $stmtResultados->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
            $stmtResultados->execute();
            $resultados = $stmtResultados->fetch(PDO::FETCH_ASSOC);
            if ($resultados) {    
                $urls = $resultados['ruta_archivo'];
                $botones3 = '<a style="background-color: green; color: white;" onclick="window.open(\'' . $urls . '\', \'_blank\');" class="ver-resultados">Ver Resultados</a>';
            }
        }
        if ($estatusPago == "Completados") {
            $botones3 = '';
            $botones2 = '<a style="background-color: orange;color:black;"  onclick="verticketdepago(' . $idAgenda . ');">Ver ticket de pago</a>';
            $botones1 = '<a class="icono" style="background-color: orange;color:black;"  onclick="">En proceso <br> sus resultados</a>';
        }
        // Crea una fila de la tabla para cada registro
        $tableRows .= '<tr>';
        $tableRows .= '<td><div style="display: block;"><h5 style="color: black;">' . $idAgenda .  '</h5></div></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $nombreCompleto . '</h5></td>';
        $tableRows .= '<td><div style="display: none;"><h5 style="color: black;">' . $idCliente .'</h5></div></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $dia . '</h5></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $mes . '</h5></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $año . '</h5></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $horario . '</h5></td>';
        $tableRows .= '<td><div style="display: none;"><h5 style="color: black;">' . $idAdquisiciones . '</h5></div></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $servicioNombre . '</h5></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $subServicioNombre . '</h5></td>';
        $tableRows .= '<td><div style="display: none;"><h5 style="color: black;">' . $idPago . '</h5></div></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $estatusCita . '</h5></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $estatusPago . '</h5></td>';
        $tableRows .= '<td><h5 style="color: black;">' . $monto . '</h5></td>';
        $tableRows .= '<td>' . $botones3 . '</td>';
        $tableRows .= '<td>' . $botones1 . '</td>';
        $tableRows .= '<td>' . $botones2 . '</td>';
        $tableRows .= '</tr>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
// Devuelve las filas de la tabla como respuesta en formato JSON
echo json_encode(array('mensaje' => $tableRows));
?>
