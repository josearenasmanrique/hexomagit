<?php
require('conexion.php');


$servicio = $_GET['servicio'];
$modalId = $_GET['modalId'];

try {
    if ($modalId == "indicacionesmodeal") {
        // Crea una conexión a la base de datos
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Establece el modo de error PDO a excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Prepara la consulta SQL
        $sql = "SELECT `Servicio_Nombre_indicaciones` FROM `servicios` WHERE IdServicio = :servicio";
        $stmt = $conn->prepare($sql);
        // Vincula el parámetro :servicio con el valor
        $stmt->bindParam(':servicio', $servicio, PDO::PARAM_INT);
        // Ejecuta la consulta
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $response['mensaje'] = $result['Servicio_Nombre_indicaciones'];
        } else {
            $response['mensaje'] = "No se encontraron indicaciones para el servicio.";
        }
    }





    if ($modalId == "Descripcionmodeal") {
        // Crea una conexión a la base de datos
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Establece el modo de error PDO a excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Prepara la consulta SQL
        $sql = "SELECT `Servicio_descripcion` FROM `servicios` WHERE IdServicio = :servicio";
        $stmt = $conn->prepare($sql);
        // Vincula el parámetro :servicio con el valor
        $stmt->bindParam(':servicio', $servicio, PDO::PARAM_INT);
        // Ejecuta la consulta
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $response['mensaje'] = $result['Servicio_descripcion'];
        } else {
            $response['mensaje'] = "No se encontraron indicaciones para el servicio.";
        }
    }





    if ($modalId == "Personalizarmodeal") {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "SELECT `IdSubservicio`, `IdServicio`, `Sub_servicio_nombre`, `Sub_servicio_nombre_precio`, `Sub_servicio_nombre_basico`, `Sub_servicio_nombre_descripcion` FROM `subservicios` WHERE IdServicio = :servicio";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':servicio', $servicio, PDO::PARAM_INT);
        $stmt->execute();
    
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if ($result) {
            $tablaHTML = '<center><table style="border-collapse: collapse;color:black;border:1px solid black;"><tr><td>Selecciona</td><td><center>servicio</center></td><td>precio</td><td>descripcion</td>';
            $sumaServiciosSI = 0;
            $cantidad=0;
            foreach ($result as $row) {
                $tablaHTML .= "<tr>";
                $tablaHTML .= "<td><center><input name='personalizarbox'  onclick='sumarpersonalizar(" . $row['Sub_servicio_nombre_precio'] . ");' type='checkbox' value='" . $row['Sub_servicio_nombre_precio'] . "'";
                // Verificar si el valor es 'SI' para marcar el checkbox
                if ($row['Sub_servicio_nombre_basico'] === 'SI') {
                    $tablaHTML .= " checked";
                    $sumaServiciosSI += floatval($row['Sub_servicio_nombre_precio']);
                }                
                $tablaHTML .= "></center></td>";
                $tablaHTML .= "<td><center><h5 id='subservicionombrefinal".$cantidad."'>" . $row['Sub_servicio_nombre'] . "</h5></center></td>";
                $tablaHTML .= "<td>$" . $row['Sub_servicio_nombre_precio'] . "/MXN</td>";
                $tablaHTML .= "<td>" . $row['Sub_servicio_nombre_descripcion'] . "</td>";
                $tablaHTML .= "</tr>";
                $cantidad++;
            }
            $tablaHTML .= "</table></center>";
            $response['mensaje'] = $tablaHTML;
        } else {
            $response['mensaje'] = "No se encontraron indicaciones para el servicio.";
        }

    }







    if ($modalId == "modificarserviciosmodeal") {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Establece el modo de error PDO a excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "SELECT `IdSubservicio`, `IdServicio`, `Sub_servicio_nombre`, `Sub_servicio_nombre_precio`, `Sub_servicio_nombre_basico`, `Sub_servicio_nombre_descripcion` FROM `subservicios` WHERE IdServicio = :servicio";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':servicio', $servicio, PDO::PARAM_INT);
        $stmt->execute();
    
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if ($result) {
            $tablaHTML = '<center>
                <table id="tablasubserviciosanadirsubs" style="border-collapse: collapse;color:black;border:1px solid black;border-spacing: 20px;">' .
                '<tr>' .
                '<td style="color: black;"><center></center></td>' .
                '<td style="color: black;"><center>subservicio</center></td>' .
                '<td>precio</td>' .
                '<td>descripcion</td>' .
                '<td>Es basico</td>' .
                '<td>--</td>' .
                '<td>Eliminar</td>' .
                '</tr>';
    
            foreach ($result as $i => $row) {
                $provicional = $row['Sub_servicio_nombre_basico'];
                $tablaHTML .= '<tr>' .
                    '<td><div style="display:none;"><input type="text" name="subservicios' . $i . '" value="' . $row['IdSubservicio'] . '"/></div></td>' .
                    '<td style="color: black;width: 20px;"><input type="text" name="asubservicios' . $i . '" value="' . $row['Sub_servicio_nombre'] . '"/></td>' .
                    '<td><input name="aprecios' . $i . '" type="number" value="' . $row['Sub_servicio_nombre_precio'] . '"/></td>' .
                    '<td><textarea name="descripcion' . $i . '">' . $row['Sub_servicio_nombre_descripcion'] . '</textarea></td>' .
                    '<td><select class="botonesmodalesiniciales" style="width:100px;" name="basico' . $i . '">' .
                    '<option value="SI"' . ($provicional === "SI" ? ' selected' : '') . '>SI</option>' .
                    '<option value="NO"' . ($provicional === "NO" ? ' selected' : '') . '>NO</option>' .
                    '</select></td>' .
                    '<td>--</td>' .
                    '<td><button  type="button" href="javascript:void(0);" onclick="handleClick(' . $row['IdSubservicio'] . ')">ELIMINAR</button></td>' .
                    '</tr>';
            }
    
            $tablaHTML .= '</table></center>';
    
            $response['mensaje'] = $tablaHTML;
        } else {
            $response['mensaje'] = "No se encontraron indicaciones para el servicio.";
        }
    }
} catch (PDOException $e) {
    $response['mensaje'] = "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conn = null;

header('Content-Type: application/json');
echo json_encode($response);
?>