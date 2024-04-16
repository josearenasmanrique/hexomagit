<?php
$url = $_POST['urlfinal'];
$idservicioactualizar = $_POST['idserviciosfinal'];
$nombreservicioactualizar = $_POST['nombredelserviciodado'];
$indiservicioactualizar = $_POST['indicacionamodificarcabeza'];
$descservicioactualizar = $_POST['descripcionamodificarcabeza'];
require('conexion.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $idservicioactualizar = $_POST['idserviciosfinal'];
    $nombreservicioactualizar = $_POST['nombredelserviciodado'];
    $indiservicioactualizar = $_POST['indicacionamodificarcabeza'];
    $descservicioactualizar = $_POST['descripcionamodificarcabeza'];
    // Consulta SQL con marcadores de posición
    $sql = "UPDATE servicios 
            SET Servicio_Nombre=:nombre, 
                Servicio_Nombre_indicaciones=:indicaciones, 
                Servicio_descripcion=:descripcion
            WHERE IdServicio=:id";
    $stmt = $conn->prepare($sql);

    // Enlazar los valores de los parámetros
    $stmt->bindParam(':nombre', $nombreservicioactualizar, PDO::PARAM_STR);
    $stmt->bindParam(':indicaciones', $indiservicioactualizar, PDO::PARAM_STR);
    $stmt->bindParam(':descripcion', $descservicioactualizar, PDO::PARAM_STR);
    $stmt->bindParam(':id', $idservicioactualizar, PDO::PARAM_INT);

    // Ejecutar la consulta
    $stmt->execute();

    echo 'SERVICIO PRINCIPAL ACTUALIZADO';

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$indicesubservicios = array();
$subservicios = array();
$precios = array();
$descripciones = array();
$basicos = array();
foreach ($_POST as $name => $value) {
    if (strpos($name, 'subservicios') === 0) {
        // El campo comienza con 'identificadorsub'
        $indice = str_replace('subservicios', '', $name);
        $indicesubservicios[$indice] = $value;
    } elseif (strpos($name, 'asubservicios') === 0) {
        // El campo comienza con 'asubservicios'
        $indice = str_replace('asubservicios', '', $name);
        $subservicios[$indice] = $value;
    } elseif (strpos($name, 'aprecios') === 0) {
        // El campo comienza con 'aprecios'
        $indice = str_replace('aprecios', '', $name);
        $precios[$indice] = $value;
    } elseif (strpos($name, 'descripcion') === 0) {
        // El campo comienza con 'descripcion'
        $indice = str_replace('descripcion', '', $name);
        $descripciones[$indice] = $value;
    } elseif (strpos($name, 'basico') === 0) {
        // El campo comienza con 'descripcion'
        $indice = str_replace('basico', '', $name);
        $basicos[$indice] = $value;
    }
}
echo "subservicios:<BR>";
foreach ($indicesubservicios as $indice => $valor) {
    echo "Campo indicesubservicios $indice: $valor<BR>";
}
echo "Subservicios:<BR>";
foreach ($subservicios as $indice => $valor) {
    echo "Campo asubservicios $indice: $valor<BR>";
}
echo "Precios:<BR>";
foreach ($precios as $indice => $valor) {
    echo "Campo aprecios $indice: $valor<BR>";
}
echo "Descripciones:<BR>";
foreach ($descripciones as $indice => $valor) {
    echo "Campo descripcion $indice: $valor<BR>";
}
echo "Basico:<BR>";
foreach ($basicos as $indice => $valor) {
    echo "Campo basico $indice: $valor <BR>";
}
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
for ($i = 0; $i < count($indicesubservicios); $i++) {
    $sql = "";
    $idServicio = $idservicioactualizar;
    // Verificar si el índice $i existe en las matrices
    if (array_key_exists($i, $indicesubservicios) && array_key_exists($i, $subservicios) && array_key_exists($i, $precios) && array_key_exists($i, $descripciones) && array_key_exists($i, $basicos)) {
        $idSubservicio = $indicesubservicios[$i];
        $subServicioNombre = $subservicios[$i];
        $subServicioNombrePrecio = $precios[$i];
        $subServicioNombreDescripcion = $descripciones[$i];
        $subServicioNombreBasico = $basicos[$i];
    } else {
        // Manejo de error, como mostrar un mensaje o registrar el problema
        //echo "Ocurrió un error en la iteración $i. Algunos datos no están disponibles.<br>";
        $idSubservicio = $indicesubservicios[$i+1];
        $subServicioNombre = $subservicios[$i+1];
        $subServicioNombrePrecio = $precios[$i+1];
        $subServicioNombreDescripcion = $descripciones[$i+1];
        $subServicioNombreBasico = $basicos[$i+1];
        echo "Registro de nuevo $idSubservicio <BR>";
        //continue; // Saltar a la siguiente iteración
    }
    if ($idSubservicio == "nuevo") {
        $sql = "INSERT INTO subservicios (IdServicio, Sub_servicio_nombre, Sub_servicio_nombre_precio, Sub_servicio_nombre_basico, Sub_servicio_nombre_descripcion) VALUES (?, ?, ?, ?, ?)";
    } else {
        echo "Modificación de subservicio <BR>";
        $sql = "UPDATE subservicios SET Sub_servicio_nombre = ?, Sub_servicio_nombre_precio = ?, Sub_servicio_nombre_basico = ?, Sub_servicio_nombre_descripcion = ? WHERE IdSubservicio = ?";
    }
    // Preparar la consulta
    $stmt = $conn->prepare($sql);
    if ($stmt === FALSE) {
        die("Error de preparación: " . $conn->error);
    }
    if ($idSubservicio == "nuevo") {
        $stmt->bind_param("issss", $idServicio, $subServicioNombre, $subServicioNombrePrecio, $subServicioNombreBasico, $subServicioNombreDescripcion);
    } else {
        $stmt->bind_param("ssssi", $subServicioNombre, $subServicioNombrePrecio, $subServicioNombreBasico, $subServicioNombreDescripcion, $idSubservicio);
    }
    if ($stmt->execute()) {
        echo '<script>window.location.href = "' . $url . '";</script>';
    } else {
        echo '<script>window.location.href = "' . $url . '";</script>';
        echo '<script>alert("ERROR VUELVA A INTENTARLO");</script>';
    }
    $stmt->close();
}
?>