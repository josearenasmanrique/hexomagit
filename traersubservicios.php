<?php
require('conexion.php');


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT IdSubservicio, IdServicio, Sub_servicio_nombre, Sub_servicio_nombre_precio, Sub_servicio_nombre_basico, Sub_servicio_nombre_descripcion FROM subservicios";
    $stmt = $conn->query($sql);

    while ($row = $stmt->fetch()) {
        $idSubservicio = $row['IdSubservicio'];
        $idServicio = $row['IdServicio'];
        $subservicioNombre = $row['Sub_servicio_nombre'];
        $subservicioPrecio = $row['Sub_servicio_nombre_precio'];
        $subservicioNombreBasico = $row['Sub_servicio_nombre_basico'];
        $subservicioDescripcion = $row['Sub_servicio_nombre_descripcion'];

        echo '<script>var idSubservicio = ' . $idSubservicio . ';</script>';
        echo '<script>var idServicio = ' . $idServicio . ';</script>';
        echo '<script>var subservicioNombre = "' . $subservicioNombre . '";</script>';
        echo '<script>var subservicioPrecio = ' . $subservicioPrecio . ';</script>';
        echo '<script>var subservicioNombreBasico = "' . $subservicioNombreBasico . '";</script>';
        echo '<script>var subservicioDescripcion = "' . $subservicioDescripcion . '";</script>';
        //echo '<script>alert(subservicioDescripcion);</script>';

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>