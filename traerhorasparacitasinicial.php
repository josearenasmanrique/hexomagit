<?php
require('conexion.php');


$mes = date('n');

$response = array(); // Crear un arreglo para la respuesta

try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Prepara la consulta SQL con marcadores de posición
    $sql = "SELECT dia FROM `fhr` WHERE `mes` = :mes";
    $stmt = $conn->prepare($sql);
    // Vincula los parámetros con los valores
    $stmt->bindParam(':mes', $mes, PDO::PARAM_INT);
    // Ejecuta la consulta
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($results) {
        // Crear un array de horas
        $dias = array();
        foreach ($results as $result) {
            // Agregar cada hora al array
            $dias[] = (int)$result['dia']; // Convertir el día a entero si es necesario
        }
        // Codificar el array como JSON
        $dias_json = json_encode($dias);
        echo '<script>const fechasDestacadas = ' . $dias_json . ';</script>';
    } else {
        echo '<script>const fechasDestacadas = [];</script>';
    }
} catch (PDOException $e) {
    // Manejar cualquier error aquí, por ejemplo, registrar el error.
    echo '<script>const fechasDestacadas = [];</script>';
}

// Cierra la conexión a la base de datos
$conn = null;
?>
