<?php
require('conexion.php');

    $idAgenda = 21;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Realiza una consulta para obtener el contenido del BLOB
        $sql = "SELECT `contenido` FROM `resultados` WHERE `idAgenda` = :idAgenda";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
        $stmt->execute();
        $resultados = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultados && !empty($resultados['contenido'])) {
            // Configura las cabeceras para indicar que se trata de un archivo PDF
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="resultado.pdf"');
            // Muestra el contenido del BLOB (PDF) en el navegador
            echo $resultados['contenido'];
        } else {
            echo "No se encontraron resultados para esta cita.";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

?>
