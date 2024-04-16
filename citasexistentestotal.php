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
     ad.idAdquisiciones, ad.Servicio_nombre, ad.Sub_servicio_nombre ,
      pg.IdPago ,pg.Estatus_Pago,pg.Monto,rs.ruta_archivo FROM agenda AS a 
      JOIN adquisiciones AS ad ON a.idAgenda = ad.idAgenda 
      JOIN cliente AS c ON c.idCliente = a.idCliente
       JOIN pagos AS pg ON pg.idAgenda =a.idAgenda 
       JOIN resultados AS rs ON rs.idAgenda = a.idAgenda
       ORDER BY a.dia,a.horario,a.mes,a.año;
    ";

    $stmt = $conn->query($sql);
    $conteo=0;
    while ($row = $stmt->fetch()) {
        $idAgenda = $row['idAgenda'];
        $idCliente = $row['idCliente'];
        $nombreCliente = $row['NombreCompleto'];
        $dia = $row['dia'];
        $mes = $row['mes'];
        $año = $row['año'];
        $horario = $row['horario'];
        $idAdquisiciones = $row['idAdquisiciones'];
        $Servicio_nombre = $row['Servicio_nombre'];
        $Sub_servicio_nombre = $row['Sub_servicio_nombre'];
        $IdPago = $row['IdPago'];
        $Estatus_Pago = $row['Estatus_Pago'];
        $Monto = $row['Monto'];
        $Estatus_cita="En_espera";
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
        echo '<td><h5 style="color: black;">' . $Estatus_Pago . '</h5></td>';
        echo '<td><h5 style="color: black;">' . $Monto . '</h5></td>';

             if($Estatus_Pago=="Completado"){
            echo '<td class="icono"><a onclick="abrirmodificacioncita(\'' . $idServicio . '\', \'' . $idAgenda .'\', \'' .$idCliente . '\');">Modificar</a></td>';
            echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="verticketdepago(' . $idAgenda . ');">Ver ticket de pago</a></td>';
            echo '<td class="icono"><a id="btn_resultadosdos'.$conteo.'" style="background-color: green;color:white;"  onclick="resultadosDOS(' . $idAgenda . ');">Añadir Resultados</a></td>';
            echo '<td class="icono"><a onclick="eliminarcitaompleto(' . $idAgenda . ');">Cancelar Cita</a></td>';
            }
             if($Estatus_Pago=="Pendiente"){
            echo '<td class="icono"><a onclick="abrirmodificacioncita(\'' . $idServicio . '\', \'' . $idAgenda .'\', \'' .$idCliente . '\');">Modificar</a></td>';
            echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="Reflejapago(' . $idAgenda . ');">Marcar como Pagado</a></td>';
            echo '<td class="icono"><a onclick="eliminarcitaompleto(' . $idAgenda . ');">Cancelar Cita</a></td>';
            }
            if ($Estatus_Pago == "Finalizado") {
            echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="verticketdepago(' . $idAgenda . ');">Ver ticket de pago</a></td>';    
            echo '<td class="icono"><a style="background-color: orange;color:black;"  onclick="Reflejapago(' . $idAgenda . ');">Borrar resultado</a></td>';
            echo '<td><a href="' . $urls . '" target="_blank" class="ver-resultados">Ver Resultados</a></td>';
            }

       // echo '<td class="icono"><a onclick="abrirmodificacion(' . $idAgenda . ');"><span class="fa fa-pencil-square-o fa-2x"></span></a></td>';
       // echo '<td class="icono"><a onclick="eliminarserviciocompleto(' . $idAgenda . ');"><span class="fa fa-trash fa-2x"></span></a></td>';
        echo '</tr>';
        $conteo++;
    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
