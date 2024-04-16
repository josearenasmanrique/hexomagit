<?php
require('conexion.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $idAgenda = $_GET['idagenda']; // Asegúrate de que este campo esté presente en el formulario
    

        $sql = "UPDATE `facturas` 
        SET 
        `Estatus_factura`=:estatus_factura
        WHERE `idAgenda` = :idAgenda";
        $provicional="Sin_instruccion";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
        $stmt->bindParam(':estatus_factura',$provicional, PDO::PARAM_STR);
        $stmt->execute();

        
   
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

$conn = null; // Cierra la conexión a la base de datos al final del script
echo json_encode("completado");

?>
