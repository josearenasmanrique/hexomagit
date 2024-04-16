<?php
// Datos de conexión a la base de datos
require('conexion.php');


// Conecta a la base de datos
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Consulta SQL para obtener las horas establecidas
$sql = "SELECT HoraEstablecida FROM horasestablecidas";

// Ejecuta la consulta
$resultado = $conexion->query($sql);

// Inicializa un array para almacenar los resultados
$resultados = array();

// Recopila los resultados en un array
while ($fila = $resultado->fetch_assoc()) {
    $resultados[] = $fila['HoraEstablecida']; 
}

// Cierra la conexión a la base de datos
$conexion->close();

// Devuelve los resultados en formato JSON
header('Content-Type: application/json');
echo json_encode($resultados);
