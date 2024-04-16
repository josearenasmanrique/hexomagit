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
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // Consulta SQL para buscar en la tabla Cliente
   $consultaCliente = "SELECT idCliente, Nombre_cliente, Apellido1_cliente, Apellido2_cliente, Sexo_cliente, 
   Calle_cliente,NoExterior_cliente, NoInterior_cliente, Colonia_cliente, C_P_cliente, Municipio_cliente,
    Estado_cliente,Tel_cliente, cel_cliente FROM Cliente WHERE Correo_cliente = ? AND pass_cliente = ?";
   $stmtCliente = $conn->prepare($consultaCliente);
   $stmtCliente->bindParam(1, $correo);
   $stmtCliente->bindParam(2, $contrasena);
   $stmtCliente->execute();
   // Consulta SQL para buscar en la tabla Empleado
   $consultaEmpleado = "SELECT idempleado, Nombre_empleado, Apellido1_empleado, Apellido2_empleado, Sexo_empleado,
   Calle_empleado,NoExterior_empleado, NoInterior_empleado, Colonia_empleado, 
   C_P_empleado, Municipio_empleado, Estado_empleado, Tel_empleado,
    cel_empleado,rol FROM empleado WHERE Correo_empleado = ? AND pass_empleado = ?";
   $stmtEmpleado = $conn->prepare($consultaEmpleado);
   $stmtEmpleado->bindParam(1, $correo);
   $stmtEmpleado->bindParam(2, $contrasena);
   $stmtEmpleado->execute();
   $clienteEncontrado = $stmtCliente->fetch();
   $empleadoEncontrado = $stmtEmpleado->fetch();
   if ($clienteEncontrado) {
       $idCliente = $clienteEncontrado['idCliente'];
       $nombre = $clienteEncontrado['Nombre_cliente'];
       $apellido1 = $clienteEncontrado['Apellido1_cliente'];
       $apellido2 = $clienteEncontrado['Apellido2_cliente'];
       $sexo = $clienteEncontrado['Sexo_cliente'];
       $calle = $clienteEncontrado['Calle_cliente'];
       $noExterior = $clienteEncontrado['NoExterior_cliente'];
       $noInterior = $clienteEncontrado['NoInterior_cliente'];
       $colonia = $clienteEncontrado['Colonia_cliente'];
       $codigoPostal = $clienteEncontrado['C_P_cliente'];
       $municipio = $clienteEncontrado['Municipio_cliente'];
       $estado = $clienteEncontrado['Estado_cliente'];
       $telefono = $clienteEncontrado['Tel_cliente'];
       $celular = $clienteEncontrado['cel_cliente'];
       $tipo="010101111111001010101111011110111101111111010001010101010101010";
       $ROL="010101111111001010101111011110111101111111010001010101010101010";
       header("Location:iniciocorrecto.php?nombre=$nombre&correo=$correo&contrasena=$contrasena&idCliente=$idCliente&apellido1=$apellido1&apellido2=$apellido2&sexo=$sexo&calle=$calle&noExterior=$noExterior&colonia=$colonia&codigoPostal=$codigoPostal&municipio=$municipio&estado=$estado &telefono=$telefono&celular=$celular&tipo=$tipo&rol=$ROL");
   } 
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conn = null;
?>
