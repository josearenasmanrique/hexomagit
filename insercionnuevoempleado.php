<?php
require('conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $sexo = $_POST["sexo"];
    $calle = $_POST["calle"];
    $noExterior = $_POST["no_exterior"];
    $noInterior = $_POST["no_interior"];
    $colonia = $_POST["colonia"];
    $codigoPostal = $_POST["codigo_postal"];
    $municipio = $_POST["municipio"];
    $estado = $_POST["estado"];
    $telefono = $_POST["telefono"];
    $celular = $_POST["celular"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $rol = $_POST["rol"];
    $urlparallevar = $_POST["urlparallevar"];
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO empleado (Nombre_empleado, Apellido1_empleado,
         Apellido2_empleado, Sexo_empleado, Calle_empleado, NoExterior_empleado,
          NoInterior_empleado, Colonia_empleado, C_P_empleado, Municipio_empleado, 
          Estado_empleado, Tel_empleado, cel_empleado, Correo_empleado, pass_empleado,
           rol) VALUES (:nombre, :apellido1, :apellido2, :sexo, :calle, 
           :noExterior, :noInterior, :colonia, :codigoPostal, :municipio,
            :estado, :telefono, :celular, :correo, :contrasena, :rol)";        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido1', $apellido1);
        $stmt->bindParam(':apellido2', $apellido2);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':calle', $calle);
        $stmt->bindParam(':noExterior', $noExterior);
        $stmt->bindParam(':noInterior', $noInterior);
        $stmt->bindParam(':colonia', $colonia);
        $stmt->bindParam(':codigoPostal', $codigoPostal);
        $stmt->bindParam(':municipio', $municipio);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':celular', $celular);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->bindParam(':rol', $rol);
        $stmt->execute();        
        // Redirigir a la página de éxito o a donde desees
        header("Location: " . $urlparallevar);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
