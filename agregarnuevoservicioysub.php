<?php
require('conexion.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insertar servicio principal
    $sql = "INSERT INTO `servicios` (`Servicio_Nombre`, `Servicio_Nombre_indicaciones`, `Servicio_descripcion`)
            VALUES (:servicio, :indicaciones, :descripcion)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':servicio', $_POST['servicioparallevar']);
    $stmt->bindParam(':indicaciones', $_POST['indicacionesparallevar']);
    $stmt->bindParam(':descripcion', $_POST['descripcionparallevar']);
    $stmt->execute();
    $lastInsertId = $conn->lastInsertId();
    echo 'Insertado correctamente. El ID es ' . $lastInsertId;

    // Insertar subservicio principal
    $sql = "INSERT INTO `subservicios` (`IdServicio`, `Sub_servicio_nombre`, `Sub_servicio_nombre_precio`,
             `Sub_servicio_nombre_basico`, `Sub_servicio_nombre_descripcion`) 
            VALUES (:idServicio, :subservicio, :precio, :basico, :descripcion)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idServicio', $lastInsertId);
    $stmt->bindParam(':subservicio', $_POST['subservicioparallevar']);
    $stmt->bindParam(':precio', $_POST['precioparallevar']);
    $stmt->bindParam(':basico', $_POST['basicoparallevar']);
    $stmt->bindParam(':descripcion', $_POST['descripciondelsubservicioparallevar']);
    $stmt->execute();

    // Insertar subservicios adicionales si existen
    for ($i = 1; isset($_POST['subservicioparallevar' . $i]); $i++) {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idServicio', $lastInsertId);
        $stmt->bindParam(':subservicio', $_POST['subservicioparallevar' . $i]);
        $stmt->bindParam(':precio', $_POST['precioparallevar' . $i]);
        $stmt->bindParam(':basico', $_POST['basicoparallevar' . $i]);
        $stmt->bindParam(':descripcion', $_POST['descripcion' . $i]);
        $stmt->execute();
    }
echo '<br> finalizado';
echo '<br> prueba'.$_POST['urlparallevar'];

    // Redirección después de todas las inserciones
    header("Location: " . $_POST['urlparallevar']);
    exit(); // Asegurar que el script se detenga después de la redirección
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
