<?php
// Datos de conexión a la base de datos
require('conexion.php');


// Conecta a la base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Consulta SQL
$sql = "SELECT `id`, `dia`, `mes`, `horas` FROM `fhr`";

// Ejecuta la consulta
$resultado = $conexion->query($sql);
$provicional=1;
// Itera a través de los resultados
while ($fila = $resultado->fetch_assoc()) {
    $id = $fila['id'];
    $dia = $fila['dia'];
    $mes = $fila['mes'];
    $horas = $fila['horas'];

    // Divide las horas en un array
    $horasArray = explode(',', $horas);

    // Comienza una nueva fila en la tabla
    echo '<tr>';
    echo '<td><div style="display:block;"><input type="text" name="id[' . $provicional . ']" value="' . $id . '"></div></td>';
    echo '<td><input type="text" name="dia['.$provicional.']" value="' . $dia . '"></td>';
    echo '<td><div style="display:block;"><input type="text" name="mes[' . $provicional . ']" value="' . $mes . '"></div></td>';
    
    // Crea checkboxes para las horas
    echo '<td>';
    foreach ($horasArray as $hora) {
        echo '<input type="checkbox" name="horas[' . $provicional . '][]" value="'.$hora.'" checked>' . $hora . ' ';
    }
    echo '</td>';
    echo '<td>';
    echo '<button onclick="eliminarfechaasignada('. $id .');" type="button">Eliminar</button>';
    echo '</td>';
$provicional++;
    // Cierra la fila
    echo '</tr>';
}


// Cierra la conexión a la base de datos
$conexion->close();
?>
