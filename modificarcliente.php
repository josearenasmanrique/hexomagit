<?php
require('conexion.php');
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario y validar/escaparlos
    $idCliente = $_POST["id"];
    $nombreCliente = htmlspecialchars($_POST["nombre"]);
    $apellido1Cliente = htmlspecialchars($_POST["apellido1"]);    $apellido2Cliente = htmlspecialchars($_POST["apellido2"]);
    $sexoCliente = $_POST["sexo"];    $calleCliente = htmlspecialchars($_POST["calle"]);
    $noExteriorCliente = htmlspecialchars($_POST["no_exterior"]);    $noInteriorCliente = htmlspecialchars($_POST["no_interior"]);
    $coloniaCliente = htmlspecialchars($_POST["colonia"]);    $cPCliente = htmlspecialchars($_POST["codigo_postal"]);
    $municipioCliente = htmlspecialchars($_POST["municipio"]);    $estadoCliente = htmlspecialchars($_POST["estado"]);
    $telCliente = htmlspecialchars($_POST["telefono"]);    $celCliente = htmlspecialchars($_POST["celular"]);
    $correoCliente = htmlspecialchars($_POST["correo"]);    $passCliente = htmlspecialchars($_POST["contrasena"]);    $urlacargar = $_POST["urlaponer"];
    // Realizar la actualización en la base de datos
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE cliente SET 
            Nombre_cliente = :nombre, 
            Apellido1_cliente = :apellido1, 
            Apellido2_cliente = :apellido2, 
            Sexo_cliente = :sexo, 
            Calle_cliente = :calle, 
            NoExterior_cliente = :no_exterior, 
            NoInterior_cliente = :no_interior, 
            Colonia_cliente = :colonia, 
            C_P_cliente = :codigo_postal, 
            Municipio_cliente = :municipio, Estado_cliente = :estado, Tel_cliente = :telefono, 
            cel_cliente = :celular, Correo_cliente = :correo, pass_cliente = :contrasena  WHERE idCliente = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombreCliente);
        $stmt->bindParam(':apellido1', $apellido1Cliente);
        $stmt->bindParam(':apellido2', $apellido2Cliente);
        $stmt->bindParam(':sexo', $sexoCliente);
        $stmt->bindParam(':calle', $calleCliente);
        $stmt->bindParam(':no_exterior', $noExteriorCliente);
        $stmt->bindParam(':no_interior', $noInteriorCliente);
        $stmt->bindParam(':colonia', $coloniaCliente);
        $stmt->bindParam(':codigo_postal', $cPCliente);
        $stmt->bindParam(':municipio', $municipioCliente);
        $stmt->bindParam(':estado', $estadoCliente);
        $stmt->bindParam(':telefono', $telCliente);
        $stmt->bindParam(':celular', $celCliente);
        $stmt->bindParam(':correo', $correoCliente);
        $stmt->bindParam(':contrasena', $passCliente);
        $stmt->bindParam(':id', $idCliente);
        $stmt->execute();
        // Redirigir a la página de éxito o a donde desees
        header("Location: $urlacargar");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
