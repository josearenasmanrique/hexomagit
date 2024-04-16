<?php
require('conexion.php'); // Reemplaza 'conexion.php' con tu archivo de conexión real

$diaFiltrado = isset($_POST['filtroDia']) ? $_POST['filtroDia'] : '';
$mesFiltrado = isset($_POST['filtroMes']) ? $_POST['filtroMes'] : '';
$horaFiltrada = isset($_POST['filtroHora']) ? $_POST['filtroHora'] : '';
$anoFiltrado = isset($_POST['filtroAno']) ? $_POST['filtroAno'] : '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $mesNumero = date("n");
    $anoActual = date("Y");

    // Consulta para obtener los datos de la agenda
    $sql = "
    SELECT ag.idAgenda, ag.idCliente, 
    CONCAT(cli.Nombre_cliente, ' ', cli.Apellido1_cliente, ' ', cli.Apellido2_cliente) AS NombreCompleto, 
    ag.dia, ag.mes, ag.año, DATE_FORMAT(ag.horario, '%H:%i') AS horario,
    pg.Estatus_Pago, pg.Monto
    FROM agenda AS ag
    JOIN cliente AS cli ON cli.idCliente = ag.idCliente
    JOIN pagos AS pg ON pg.idAgenda = ag.idAgenda
    WHERE (:diaFiltrado = '' OR ag.dia = :diaFiltrado)
    AND (:mesFiltrado = '' OR ag.mes = :mesFiltrado)
    AND (:horaFiltrada = '' OR DATE_FORMAT(ag.horario, '%H:%i') = :horaFiltrada)
    AND (:anoFiltrado = '' OR ag.año = :anoFiltrado)  -- Filtro de año
    ORDER BY ag.dia ASC, ag.mes ASC, ag.año ASC, ag.horario ASC;
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':diaFiltrado', $diaFiltrado);
    $stmt->bindParam(':mesFiltrado', $mesFiltrado);
    $stmt->bindParam(':horaFiltrada', $horaFiltrada);
    $stmt->bindParam(':anoFiltrado', $anoFiltrado); // Vincula el año filtrado

    $stmt->execute();
    $agendaData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Calcula la suma de montos solo para elementos filtrados
    $sumaMontos = 0;
    foreach ($agendaData as $agenda) {
        if ($agenda['Estatus_Pago'] == 'Completado' || $agenda['Estatus_Pago'] == 'Finalizado') {
            $sumaMontos += $agenda['Monto'];
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Cierra la conexión a la base de datos al final del script
?>

<!DOCTYPE html>
<html>
<head>
    <title>REPORTE</title>
</head>
<style>
    body {
        text-align: center;
    }

    table {
        margin: 0 auto; /* Centra la tabla horizontalmente */
        border: 1px solid black;
    }

    th, td {
        padding: 10px;
        border: 1px solid black;
    }
    select {
            -webkit-appearance: none;  /* Quitar las flechas en Safari */
            -moz-appearance: none;  /* Quitar las flechas en Firefox */
            appearance: none;  /* Quitar las flechas en otros navegadores */
            background-color: #fff;  /* Color de fondo */
            border: 1px solid #ccc;  /* Borde */
            padding: 5px;  /* Espaciado interno */
            width: 150px;  /* Ancho del select */
            cursor: pointer;  /* Cursor estilo "mano" al pasar sobre el select */
        }

        /* Estilo al pasar el ratón sobre el select */
        select:hover {
            border-color: #333;  /* Cambia el color del borde al pasar el ratón */
        }

        /* Estilo al hacer clic en el select */
        select:focus {
            border-color: #0066cc;  /* Cambia el color del borde al hacer clic */
        }

    @media print {
        .print-hidden {
            display: none;
        }
    }
</style>
<body>
<h1>REPORTE DE PAGOS</h1>

<div class="print-hidden">
    <button onclick="window.print(); "><h1>imprimir</h1></button>
    <br><br>
    <form method="POST">
        <label for="filtroDia">Día:</label>
        <select name="filtroDia" id="filtroDia">
            <option value="">Todos</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <label for="filtroMes">Mes:</label>
        <select name="filtroMes" id="filtroMes">
            <option value="">Todos</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <label for="filtroHora">Hora:</label>
        <select name="filtroHora" id="filtroHora">
            <option value="">Todas</option>
            <?php
            for ($i = 0; $i < 24; $i++) {
                $hora = sprintf("%02d", $i);
                echo "<option value='$hora'>$hora:00</option>";
            }
            ?>
        </select>

        <label for="filtroAno">Año:</label>  <!-- Agregado filtro de año -->
        <select name="filtroAno" id="filtroAno">
            <option value="">Todos</option>
            <?php
            // Ajusta el rango de años según tus necesidades
            $anoInicio = 2022;
            $anoActual = date("Y");
            $anoFin = $anoActual;
            for ($i = $anoInicio; $i <= $anoFin; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>

        <button type="submit" value="Filtrar">Filtrar</button>
    </form>
</div>

<h2>Total de Montos Pagados: $<?php echo $sumaMontos; ?></h2> <!-- Mostrar la suma de montos de elementos filtrados -->

<br>

<table border="1" width="100%">
    <tr>
        <th>No. cita</th>
        <th>Nombre</th>
        <th>Día</th>
        <th>Mes</th>
        <th>Año</th>
        <th>Horario</th>
        <th>Pago</th>
        <th>Monto</th>
    </tr>
    <?php foreach ($agendaData as $agenda): ?>
        <tr>
            <td><?php echo $agenda['idAgenda']; ?></td>
            <td><?php echo $agenda['NombreCompleto']; ?></td>
            <td><?php echo $agenda['dia']; ?></td>
            <td><?php echo $agenda['mes']; ?></td>
            <td><?php echo $agenda['año']; ?></td>
            <td><?php echo $agenda['horario']; ?></td>
            <td><?php echo $agenda['Estatus_Pago']; ?></td>
            <td><?php echo $agenda['Monto']; ?></td>
            <td></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
