<?php
require('conexion.php');


$dia = $_GET['dia'];
$mes = $_GET['mes'];

$response = array(); // Crear un arreglo para la respuesta

try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Prepara la consulta SQL con marcadores de posición
    $sql = "SELECT `horas` FROM `fhr` WHERE `dia` = :dia AND `mes` = :mes";
    $stmt = $conn->prepare($sql);
    // Vincula los parámetros con los valores
    $stmt->bindParam(':dia', $dia, PDO::PARAM_INT);
    $stmt->bindParam(':mes', $mes, PDO::PARAM_INT);
    // Ejecuta la consulta
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($results) {
        $horas = array(); // Crear un arreglo para almacenar las horas
        foreach ($results as $result) {
            $horas[] = $result['horas']; // Agregar cada hora al arreglo
        }
        $horas_str = implode(',', $horas); // Unir todas las horas con comas
        $response['mensaje'] = '<select id="horafinal" class="botonesmodalesiniciales2" name="horas"><option value="">seleccione</option>';
        $horasArray = explode(',', $horas_str); // Separar las horas en un arreglo
        foreach ($horasArray as $hora) {
            $response['mensaje'] .= '<option value="' . $hora . '">' . $hora . '</option>';
        }
        $response['mensaje'] .= '</select>';
    } else {
        $response['mensaje'] = "No se encontraron indicaciones para el servicio.";
    }
    


} catch (PDOException $e) {
    $response['mensaje'] = "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conn = null;

header('Content-Type: application/json');
echo json_encode($response);
?>
