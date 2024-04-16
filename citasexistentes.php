<?php
require('conexion.php');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $mesActual = date("n"); // Obtén el mes actual en formato numérico (sin ceros iniciales)
    $añoActual = date("Y"); // Obtén el año actual en formato de cuatro dígitos
    $sql = "
    SELECT DISTINCT a.idAgenda,c.idCliente,
    CONCAT(c.Nombre_cliente, ' ', c.Apellido1_cliente, ' ', c.Apellido2_cliente) AS NombreCompleto, 
    a.dia, a.mes, a.año, a.horario, 
    ad.idAdquisiciones, sr.IdServicio, ad.Servicio_nombre, ad.Sub_servicio_nombre ,
    pg.IdPago ,pg.Estatus_Pago,pg.Monto , rs.ruta_archivo ,fac.Estatus_factura,fac.ruta_factura,fac.ruta_constancia_fiscal
    FROM agenda AS a 
    JOIN adquisiciones AS ad ON a.idAgenda = ad.idAgenda 
    JOIN cliente AS c ON c.idCliente = a.idCliente
    JOIN pagos AS pg ON pg.idAgenda =a.idAgenda 
    JOIN servicios AS sr ON sr.Servicio_nombre = ad.Servicio_nombre
    JOIN resultados AS rs ON rs.idAgenda = a.idAgenda
    JOIN facturas AS fac ON fac.idAgenda = a.idAgenda
    WHERE a.año= $añoActual  AND a.mes=$mesActual 
    ORDER BY a.dia,a.horario;
    ";
    $stmt = $conn->query($sql);
    $conteo=0;
    while ($row = $stmt->fetch()) {
        //Estatus_factura
        $idAgenda = $row['idAgenda'];
        $estatus='';
        $estatus2='';
        $Estatus_factura = $row['Estatus_factura'];
        $ruta_factura = $row['ruta_factura'];
        $ruta_constancia_fiscal = $row['ruta_constancia_fiscal'];  
        if($Estatus_factura=="Solicitada"){
        $estatus='<td><h5 style="background-color: green;color:white">Solicitada</h5><td>';
        $estatus2='<td class="icono">
        <a style="background-color: aqua; color: black;" href="' . $ruta_constancia_fiscal . '" target="_blank">Ver constancia</a>
        <a style="background-color: aqua;color:black;"  onclick="ponerenproceso('. $idAgenda.');">Marcar Factura <br> En_proceso</a></td>';    
        } 
        if($Estatus_factura=="Sin_instruccion"){
        $estatus='<td><h5 style="color:black">NO</h5><td>';
        }
        if($Estatus_factura=="En_proceso"){
            $estatus='<td><h5 style="background-color: green;color:white">En_proceso</h5><td>';
            $estatus2='<td class="icono"><a style="background-color: aqua;color:black;"  onclick="subirfactura('. $idAgenda.');">Subir Factura</a></td>';    
        }
        if($Estatus_factura=="Completada"){
            $estatus='<td><h5 style="background-color: green;color:white">Completada</h5><td>';
            $estatus2 = '<td class="icono"><a style="background-color: green; color: white;" onclick="cancelarfactura('. $idAgenda.');">Cancelar Factura</a>-<a style="background-color: aqua; color: black;" href="' . $ruta_factura . '" target="_blank">Ver Factura</a></td>';
        }
        if($Estatus_factura=="Cancelada"){
            $estatus='<td><h5 style="background-color: red;color:white">Cancelada</h5><td>';
         }
        $idCliente = $row['idCliente'];
        $nombreCliente = $row['NombreCompleto'];
        $dia = $row['dia'];
        $mes = $row['mes'];
        $año = $row['año'];
        $horario = $row['horario'];
        $idAdquisiciones = $row['idAdquisiciones'];
        $idServicio = $row['IdServicio'];
        $Servicio_nombre = $row['Servicio_nombre'];
        $Sub_servicio_nombre = $row['Sub_servicio_nombre'];
        $IdPago = $row['IdPago'];
        $Estatus_Pago = $row['Estatus_Pago'];
        $Monto = $row['Monto'];
        $Estatus_cita="En_espera";
        $urls="";
        if($Estatus_Pago=="Cancelado"){
        $Estatus_cita="Cancelada";
        }  
        if($Estatus_Pago=="Finalizado"){
        $Estatus_cita="Finalizado";
        $urls=$row['ruta_archivo'];
        }  
        echo '<tr>';
        echo '<td><h5 style="color: black;display: block;">' . $idAgenda . '</h5></td>';
        echo '<td><h5 style="color: black;display: none;">' . $idCliente . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $nombreCliente . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $dia . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $mes . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $año . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $horario . '</h5></td>';
        echo '<td><h5 style="color: black;display: none;">' . $idAdquisiciones . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $Servicio_nombre . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $Sub_servicio_nombre . '</h5></td>';
        echo '<td><h5 style="color: black;display: none;">' . $IdPago . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $Estatus_cita . '</h5></td>';
        echo '<td><h5 style="color: black;" id="estatuspago'.$idAgenda.'">' . $Estatus_Pago . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $Monto . '</h5></td>';     
        echo $estatus;
        echo  $estatus2;
        if($Estatus_Pago=="Completado"){
        echo '<td class="icono"><a onclick="abrirmodificacioncita(\'' . $idServicio . '\', \'' . $idAgenda .'\', \'' .$idCliente . '\');">Modificar</a></td>';
        echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="verticketdepago(' . $idAgenda . ');">Ver ticket de pago</a></td>';
        echo '<td class="icono"><a id="btn_resultados'.$conteo.'" style="background-color: green;color:white;"  onclick="resultados(' . $idAgenda . ');">Añadir Resultados</a></td>';
        echo '<td class="icono"><a onclick="eliminarcitaompleto(' . $idAgenda . ');">Cancelar Cita</a></td>';
        }
         if($Estatus_Pago=="Pendiente"){
        echo '<td class="icono"><a onclick="abrirmodificacioncita(\'' . $idServicio . '\', \'' . $idAgenda .'\', \'' .$idCliente . '\');">Modificar</a></td>';
        echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="Reflejapago(' . $idAgenda . ');">Marcar como Pagado</a></td>';
        //echo '<td class="icono"><a id="btn_resultados'.$conteo.'" style="background-color: green;color:white;"  onclick="resultados(' . $idAgenda . ');">Añadir Resultados</a></td>';
        echo '<td class="icono"><a onclick="eliminarcitaompleto(' . $idAgenda . ');">Cancelar Cita</a></td>';
        }
        if ($Estatus_Pago == "Finalizado") {
            echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="verticketdepago(' . $idAgenda . ');">Ver ticket de pago</a></td>';
            echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="borrarresultado(' . $idAgenda . ');">Borrar resultado</a></td>';
            echo '<td><a href="' . $urls . '" target="_blank" class="ver-resultados">Ver Resultados</a></td>';
        }
        echo '</tr>';
        $conteo++;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
