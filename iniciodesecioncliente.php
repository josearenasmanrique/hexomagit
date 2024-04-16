<?php
require('conexion.php');


$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

try {
    // Crear una conexión a la base de datos
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
        header("Location:iniciocorrecto.php?nombre=$nombre&correo=$correo&contrasena=$contrasena&idCliente=$idCliente&apellido1=$apellido1&apellido2=$apellido2&sexo=$sexo&calle=$calle&Exterior=$noExterior&noInterior=$noInterior&colonia=$colonia&codigoPostal=$codigoPostal&municipio=$municipio&estado=$estado &telefono=$telefono&celular=$celular&tipo=$tipo&rol=$ROL");
    } elseif ($empleadoEncontrado) {
        // Usuario encontrado en la tabla Empleado
        $idEmpleado = $empleadoEncontrado['idempleado'];
        $nombre = $empleadoEncontrado['Nombre_empleado'];
        $apellido1 = $empleadoEncontrado['Apellido1_empleado'];
        $apellido2 = $empleadoEncontrado['Apellido2_empleado'];
        $sexo = $empleadoEncontrado['Sexo_empleado'];
        $calle = $empleadoEncontrado['Calle_empleado'];
        $noExterior = $empleadoEncontrado['NoExterior_empleado'];
        $noInterior = $empleadoEncontrado['NoInterior_empleado'];
        $colonia = $empleadoEncontrado['Colonia_empleado'];
        $codigoPostal = $empleadoEncontrado['C_P_empleado'];
        $municipio = $empleadoEncontrado['Municipio_empleado'];
        $estado = $empleadoEncontrado['Estado_empleado'];
        $telefono = $empleadoEncontrado['Tel_empleado'];
        $celular = $empleadoEncontrado['cel_empleado'];
        $tipo="01010111111101010101010101010001010101010101010";
        $ROL=$empleadoEncontrado['rol'];

        header("Location:iniciocorrecto.php?nombre=$nombre&correo=$correo&contrasena=$contrasena&idCliente=$idCliente&apellido1=$apellido1&apellido2=$apellido2&sexo=$sexo&calle=$calle&Exterior=$noExterior&noInterior=$noInterior&colonia=$colonia&codigoPostal=$codigoPostal&municipio=$municipio&estado=$estado &telefono=$telefono&celular=$celular&tipo=$tipo&rol=$ROL");
    } else {

        // Usuario no encontrado en ninguna tabla
        header("Location:inicioincorrecto.php");

    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conn = null;
?>