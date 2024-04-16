<?php
// Datos de conexión a la base de datos
require('conexion.php');

$conexion = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

$urlparallevar = $_POST["urlparaactualizarconagendasha"];
//echo $urlparallevar . '<br>';

$ids = $_POST["id"];
$dias = $_POST["dia"];
$meses = $_POST["mes"];
$horas = $_POST["horas"];

$numFilas2 = count($ids);
//echo 'El número de filas es: ' . $numFilas2 . '<br>';

for ($e = 1; $e < $numFilas2+1; $e++) {
    //echo 'id: ' . $ids[$e] . ' dia: ' . $dias[$e] . ' mes: ' . $meses[$e] . '<br>';

    $provicional = implode(',', $horas[$e]);
    //echo 'Horas: ' . $provicional . '<br>';

    if ($ids[$e] === "nuevo") {
        //echo 'Detecté uno nuevo' . '<br>';
        //echo 'id: ' . $ids[$e] . ' dia: ' . $dias[$e] . ' mes: ' . $meses[$e] . '<br>';

        // Realiza una consulta de inserción
        $sql = "INSERT INTO fhr (dia, mes, horas) VALUES ('$dias[$e]', '$meses[$e]', '$provicional')";
    } else {
        //echo 'Detecté uno registrado: dia = ' . $dias[$e] . ', mes = ' . $meses[$e] . ', horas = ' . $provicional . '<br>';
        $sql = "UPDATE fhr SET dia = '$dias[$e]', mes = '$meses[$e]', horas = '$provicional' WHERE id = $ids[$e]";
    }
 
    if (!$conexion->query($sql)) {
        echo "Error en la consulta: " . $conexion->error . '<br>';
        return;
    } else {
        $redireccionar = true;
    }
}

if ($redireccionar) {
    // Realiza la redirección
    header("Location: $urlparallevar");
    exit; // Asegura que el script se detenga después de la redirección
}

$conexion->close();
?>
