<?php
if (isset($_GET['empleado'])) {
    $empleado = $_GET['empleado'];
    // Realiza la conexión a la base de datos (reemplaza con tus propios datos de conexión)
    require('conexion.php');
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Consulta SQL DELETE para eliminar un empleado con el ID proporcionado
        $sql = "DELETE FROM empleado WHERE idempleado = :empleado";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':empleado', $empleado, PDO::PARAM_INT);
        $stmt->execute();
        // La eliminación se realizó con éxito
        $response = array('mensaje' => 'Empleado eliminado con éxito');
        header('Content-Type: application/json');
        echo json_encode($response);
    } catch (PDOException $e) {
        // En caso de error en la consulta o conexión a la base de datos
        echo "Error: " . $e->getMessage();
    }
} else {
    // En caso de que no se reciba el parámetro 'empleado' en la solicitud
    echo "Parámetro 'empleado' no proporcionado.";
}
?>
