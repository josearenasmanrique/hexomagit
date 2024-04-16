<?php
require('conexion.php');


// Obtén los datos del formulario

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT IdServicio, Servicio_Nombre, Servicio_Nombre_indicaciones, Servicio_descripcion FROM servicios";
    $stmt = $conn->query($sql);

    while ($row = $stmt->fetch()) {
        $idServicio = $row['IdServicio'];
        $nombreServicio = $row['Servicio_Nombre'];
        $nombreIndicaciones = $row['Servicio_Nombre_indicaciones'];
        $descripcionServicio = $row['Servicio_descripcion'];
    
        echo '<tr>';
        echo '<td id="nombreservicio" style="color:black;">' . $nombreServicio . '</td>';
        echo '<td id="indicacionesservicio" title="'.$nombreIndicaciones.'" style="color:black; max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . $nombreIndicaciones . '</td>';
        echo '<td id="descripcionservicio" title="'.$descripcionServicio.'" style="color:black; max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . $descripcionServicio . '</td>';
        echo '<td><a type="button" style="background-color: rgb(0, 255, 225); color: black;" class="botonesmodalesiniciales" onclick=\'presionamodal("Personalizarmodeal", "' . $idServicio . '")\'>Ver informacion</a></td>';

        echo '</tr>';

         }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>


