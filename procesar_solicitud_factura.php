<?php
require('conexion.php');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $idAgenda = $_POST['idagenda']; // Asegúrate de que este campo esté presente en el formulario
    $urlacargar = $_POST['urlparallevarresultado'];
    $RFC = $_POST['RFC'];
    // Obtiene la información del archivo subido
    $nombre_archivo_original = $_FILES["archivo"]["name"];
    $archivo_temporal = $_FILES["archivo"]["tmp_name"];
    // Directorio de destino donde deseas almacenar el archivo
    $directorio_destino = "constancias_fiscales/";
    // Comprueba si el directorio de destino existe, si no, créalo
    if (!file_exists($directorio_destino)) {
        mkdir($directorio_destino, 0777, true);
    }
    // Asigna un nombre único al archivo con el formato "idAgenda_resultado"
    $nombre_archivo = $RFC."_constancia.pdf";
    // Mueve el archivo subido al directorio de destino con el nuevo nombre
    $ruta_destino = $directorio_destino . $nombre_archivo;
    if (move_uploaded_file($archivo_temporal, $ruta_destino)) {
        // Actualiza la base de datos con la ruta del archivo
        $sql = "UPDATE `facturas` 
        SET 
        `RFC`=:rfc,        
        `ruta_constancia_fiscal` = :ruta_archivo,
        `Estatus_factura`=:estatus_factura
        WHERE `idAgenda` = :idAgenda";
        $provicional="Solicitada";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
        $stmt->bindParam(':rfc', $RFC, PDO::PARAM_STR);
        $stmt->bindParam(':estatus_factura',$provicional, PDO::PARAM_STR);
        $stmt->bindParam(':ruta_archivo', $ruta_destino, PDO::PARAM_STR);
        $stmt->execute();
        // Redirecciona a la URL proporcionada
        header("Location: $urlacargar");
    } else {
        echo "Hubo un problema al subir el archivo.";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
$conn = null; // Cierra la conexión a la base de datos al final del script
?>
