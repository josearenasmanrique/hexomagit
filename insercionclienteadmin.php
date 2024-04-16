<?php
require('conexion.php');


// Obtén los datos del formulario
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$sexo = $_POST['sexo'];
$calle = $_POST['calle'];
$noExterior = $_POST['no_exterior'];
$noInterior = $_POST['no_interior'];
$colonia = $_POST['colonia'];
$codigoPostal = $_POST['codigo_postal'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$urlparallevar = $_POST['urlparallevar'];

try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Prepara la consulta SQL
    $sql = "INSERT INTO Cliente (Nombre_cliente, Apellido1_cliente, Apellido2_cliente,
     Sexo_cliente, Calle_cliente, NoExterior_cliente, NoInterior_cliente, Colonia_cliente,
      C_P_cliente, Municipio_cliente, Estado_cliente, Tel_cliente, cel_cliente, 
      Correo_cliente, pass_cliente) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Vincula los parámetros

    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $apellido1);
    $stmt->bindParam(3, $apellido2);
    $stmt->bindParam(4, $sexo);
    $stmt->bindParam(5, $calle);
    $stmt->bindParam(6, $noExterior);
    $stmt->bindParam(7, $noInterior);
    $stmt->bindParam(8, $colonia);
    $stmt->bindParam(9, $codigoPostal);
    $stmt->bindParam(10, $municipio);
    $stmt->bindParam(11, $estado);
    $stmt->bindParam(12, $telefono);
    $stmt->bindParam(13, $celular);
    $stmt->bindParam(14, $correo);
    $stmt->bindParam(15, $contrasena);
    // Ejecuta la consulta
    $stmt->execute();
    header("Location: " . $urlparallevar);
   
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conn = null;
?>
