<?php
require('conexion.php');
// Obtén los datos del formulario
$prueb="
<th></th>
              <th>Nombre del Cliente</th>
              <th>Apellido Materno</th>
              <th>Apellido Paterno</th>
              <th>Sexo</th>
              <th>Calle</th>
              <th>No.Exterior</th>
              <th>No.Interior</th>
              <th>Colonia</th>
              <th>C.P.</th>
              <th>Municipio</th>
              <th>Estado</th>
              <th>Telefono</th>
              <th>Celular</th>
              <th>Correo</th>
              <th>pass</th>";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT `idCliente`, `Nombre_cliente`, `Apellido1_cliente`, `Apellido2_cliente`, 
    `Sexo_cliente`, `Calle_cliente`, `NoExterior_cliente`, `NoInterior_cliente`, `Colonia_cliente`, `C_P_cliente`,
     `Municipio_cliente`, `Estado_cliente`, `Tel_cliente`, `cel_cliente`, `Correo_cliente`, `pass_cliente` FROM `cliente`";
    $stmt = $conn->query($sql);
    while ($row = $stmt->fetch()) {
        $idCliente = $row['idCliente'];        $nombreCliente = $row['Nombre_cliente'];        $apellido1Cliente = $row['Apellido1_cliente'];        $apellido2Cliente = $row['Apellido2_cliente'];
        $sexoCliente = $row['Sexo_cliente'];        $calleCliente = $row['Calle_cliente'];        $noExteriorCliente = $row['NoExterior_cliente'];
        $noInteriorCliente = $row['NoInterior_cliente'];        $coloniaCliente = $row['Colonia_cliente'];
        $cPCliente = $row['C_P_cliente'];        $municipioCliente = $row['Municipio_cliente'];
        $estadoCliente = $row['Estado_cliente'];        $telCliente = $row['Tel_cliente'];
        $celCliente = $row['cel_cliente'];        $correoCliente = $row['Correo_cliente'];        $passCliente = $row['pass_cliente'];
        echo '<tr>';
        echo '<td><div style="display:none;" ><h5 id="idclientemodificar' . $idCliente . '" style="color:black">' . $idCliente . '</h5></div></td>';
        echo '<td><h5 style="color:black">' . $nombreCliente .' '. $apellido1Cliente . ' ' . $apellido2Cliente .'</h5></td>';
        echo '<td><div style="display:block;"><h5 id="nombreclientemodificar'.$idCliente.'" style="color:black">'.$nombreCliente.'</h5></div></td>';
        echo '<td><div style="display:none;"><h5 id="ap1clientemodificar'.$idCliente.'" style="color:black">' . $apellido1Cliente . '</h5></div></td>';
        echo '<td><div style="display:none;"><h5 id="ap2clientemodificar' . $idCliente . '" style="color:black">' . $apellido2Cliente . '</h5></div></td>';
        echo '<td><h5 id="sxclientemodificar' . $idCliente . '" style="color:black">' . $sexoCliente . '</h5></td>';
        echo '<td><h5 id="calleclientemodificar'.$idCliente.'" style="color:black">'.$calleCliente .'</h5></td>';
        echo '<td><h5 id="exclientemodificar' . $idCliente . '" style="color:black">' . $noExteriorCliente . '</h5></td>';
        echo '<td><h5 id="interclientemodificar' . $idCliente . '" style="color:black">' . $noInteriorCliente . '</h5></td>';
        echo '<td><h5 id="coloniaclientemodificar' . $idCliente . '" style="color:black">' . $coloniaCliente . '</h5></td>';
        echo '<td><h5 id="cpclientemodificar' . $idCliente . '" style="color:black">' . $cPCliente . '</h5></td>';
        echo '<td><h5 id="municipioclientemodificar' . $idCliente . '" style="color:black">' . $municipioCliente . '</h5></td>';
        echo '<td><h5 id="estadoclientemodificar' . $idCliente . '" style="color:black">' . $estadoCliente . '</h5></td>';
        echo '<td><h5 id="telclientemodificar' . $idCliente . '" style="color:black">' . $telCliente . '</h5></td>';
        echo '<td><h5 id="celclientemodificar' . $idCliente . '" style="color:black">' . $celCliente . '</h5></td>';
        echo '<td><h5 id="correoclientemodificar' . $idCliente . '" style="color:black">' . $correoCliente . '</h5></td>';
        echo '<td><div style="display:none;"><h5 id="passclientemodificar' . $idCliente . '">' . $passCliente . '</h5></div></td>';
        echo '<td> <button id="openModal3" onclick="agregarnuevacita('. $idCliente . ');" style="
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        ">NUEVA CITA</button></td>';
        echo '<td class="icono"><a onclick="abrirmodificacioncliente(' . $idCliente . ');"><span class="fa fa-pencil-square-o fa-2x"></span> </a></td>';
        echo '<td class="icono"><a onclick="eliminarclientecompleto(' . $idCliente . ');"><span class="fa fa-trash fa-2x"></span></a></td>';
        echo '</tr>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>