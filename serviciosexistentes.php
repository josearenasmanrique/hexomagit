<?php
require('conexion.php');


// Obtén los datos del formulario

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT IdServicio, Servicio_Nombre, Servicio_Nombre_indicaciones, Servicio_descripcion FROM servicios";
    $stmt = $conn->query($sql);
    $conteo=0;
        echo '<table id="myTable" style="width: 100%;"><tr class="header"><th></th><th>Nombre del Servicio</th><th>Indicaciones</th><th>Descripcion</th><th colspan="3">Opciones</th></tr>';
    while ($row = $stmt->fetch()) {
        $idServicio = $row['IdServicio'];
        $nombreServicio = $row['Servicio_Nombre'];
        $nombreIndicaciones = $row['Servicio_Nombre_indicaciones'];
        $descripcionServicio = $row['Servicio_descripcion'];
        echo '<tr>';
        echo '<td id="idservicio" style="color:black;"><div style="display:none;">' . $idServicio . '</div></td>';
        echo '<td style="color:black;"><h5 id="nombreservicio'. $idServicio.'">' . $nombreServicio . '</h5></td>';
        echo '<td title="'.$nombreIndicaciones.'" ><h5 style="color:black; max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" id="indicacionesservicio'.$conteo.'">'.$nombreIndicaciones.'</h5></td>';
        echo '<td title="'.$descripcionServicio.'" ><h5 style="color:black; max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" id="descripcionservicio'.$idServicio.'">'.$descripcionServicio.'</h5></td>';
        echo '<td><a type="button" style="background-color: rgb(0, 255, 225); color: black;" class="botonesmodalesiniciales" onclick=\'presionamodal("Personalizarmodeal", "' . $idServicio . '")\'>Ver Detalles</a></td>';
        echo '<td class="icono"><button name="btn_modificarservicio" onclick="abrirmodificacion('.$idServicio.');" class="botonesmodalesiniciales" >modificar</button></td>';
        echo '<td class="icono"><button name="btn_eliminarservicio" onclick="eliminarserviciocompleto('.$idServicio.');" class="botonesmodalesiniciales">Eliminar</button></td>';
        echo '</tr>';
        $conteo=$conteo+1;
       }
       echo '</table>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



$conn = null;
?>