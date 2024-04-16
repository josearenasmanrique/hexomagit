<?php
require('conexion.php');
// Obtén los datos del formulario
$prueb="
<th></th>
              <th>Nombre del Cliente</th>
              <th>Apellido Materno</th>
              <th>Apellido Paterno</th>
              <th>Sexo</th>
              <th>Telefono</th>
              <th>Celular</th>
              <th>Correo</th>
              <th>pass</th>
";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT `idempleado`, `Nombre_empleado`, `Apellido1_empleado`, `Apellido2_empleado`, `Sexo_empleado`, 
    `Calle_empleado`, `NoExterior_empleado`, `NoInterior_empleado`, `Colonia_empleado`, `C_P_empleado`, `Municipio_empleado`, 
    `Estado_empleado`, `Tel_empleado`, `cel_empleado`, `Correo_empleado`, `pass_empleado`, `rol` FROM `empleado`";
    $stmt = $conn->query($sql);
    while ($row = $stmt->fetch()) {
    $idEmpleado = $row['idempleado'];
    $nombreEmpleado = $row['Nombre_empleado'];
    $apellido1Empleado = $row['Apellido1_empleado'];
    $apellido2Empleado = $row['Apellido2_empleado'];
    $sexoEmpleado = $row['Sexo_empleado'];
    $calleEmpleado = $row['Calle_empleado'];
    $noExteriorEmpleado = $row['NoExterior_empleado'];
    $noInteriorEmpleado = $row['NoInterior_empleado'];
    $coloniaEmpleado = $row['Colonia_empleado'];
    $cPempleado = $row['C_P_empleado'];
    $municipioEmpleado = $row['Municipio_empleado'];
    $estadoEmpleado = $row['Estado_empleado'];
    $telEmpleado = $row['Tel_empleado'];
    $celEmpleado = $row['cel_empleado'];
    $correoEmpleado = $row['Correo_empleado'];
    $passEmpleado = $row['pass_empleado'];
    $rol = $row['rol'];
    echo '<tr>';
    echo '<td><div style="display:none;"><h5 id="idempleado'.$idEmpleado.'" style="color:black">' .$idEmpleado. '</h5></div></td>';
    echo '<td><div style="display:none;"><h5 id="rolamodificar'.$idEmpleado.'" style="color:black">' . $rol . '</h5></div></td>';
    echo '<td><h5 id="nombreempleado'.$idEmpleado.'" style="color:black">' . $nombreEmpleado . '</h5></td>';
    echo '<td><h5 id="apellido1'.$idEmpleado.'" style="color:black">' . $apellido1Empleado . '</h5></td>';
    echo '<td><h5 id="apellido2'.$idEmpleado.'" style="color:black">' . $apellido2Empleado . '</h5></td>';
    echo '<td><h5 id="sexo'.$idEmpleado.'" style="color:black">' . $sexoEmpleado . '</h5></td>';
    //echo '<td><h5 id="calleempleado'.$idEmpleado.'" style="color:black">' . $calleEmpleado . '</h5></td>';
    //echo '<td><h5 id="noexteriorempleado'.$idEmpleado.'" style="color:black">' . $noExteriorEmpleado . '</h5></td>';
    //echo '<td><h5 id="nointeriorempleado'.$idEmpleado.'" style="color:black">' . $noInteriorEmpleado . '</h5></td>';
    //echo '<td><h5 id="coloniaempleado'.$idEmpleado.'" style="color:black">' . $coloniaEmpleado . '</h5></td>';
    //echo '<td><h5 id="cpempleado'.$idEmpleado.'" style="color:black">' . $cPempleado . '</h5></td>';
    //echo '<td><h5 id="municipioempleado'.$idEmpleado.'" style="color:black">' . $municipioEmpleado . '</h5></td>';
    //echo '<td><h5 id="estadoempleado'.$idEmpleado.'" style="color:black">' . $estadoEmpleado . '</h5></td>';
    echo '<td><h5 id="telempleado'.$idEmpleado.'" style="color:black">' . $telEmpleado . '</h5></td>';
    echo '<td><h5 id="celempleado'.$idEmpleado.'"style="color:black">' . $celEmpleado . '</h5></td>';
    echo '<td><h5 id="correoempleado'.$idEmpleado.'" style="color:black">' . $correoEmpleado . '</h5></td>';
    echo '<td><div style="display:none;"><input id="password'.$idEmpleado.'" type="password" value="' . $passEmpleado . '" readonly /></div></td>';
    echo '<td class="icono"><a onclick="abrirmodificacionempleado(' . $idEmpleado . ');"><span class="fa fa-pencil-square-o fa-2x"></span> </a></td>';
    echo '<td class="icono"><a onclick="eliminarempleadocompleto(' . $idEmpleado . ');"><span class="fa fa-trash fa-2x"></span></a></td>';
    echo '</tr>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>