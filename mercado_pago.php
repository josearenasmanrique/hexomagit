<?php
require('conexion.php');
$idparallevar = $_GET['idparallevar'];
$mesparallevar = $_GET['mesparallevar'];
$anoparallevar = $_GET['anoparallevar'];
$servicioparallevar = $_GET['servicioparallevar'];
$diaparallevar = $_GET['diaparallevar'];
$horarallevar = $_GET['horarallevar'];
$subserviciosparallevar = $_GET['subserviciosparallevar'];
$totalparallevar = $_GET['totalparallevar'];

$servicio=$servicioparallevar ;
$precio=$totalparallevar;


try {
    // Crea una conexión a la base de datos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establece el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Consulta para insertar en la tabla "agenda" y obtener el idAgenda
    $sqlAgenda = "INSERT INTO `agenda`(`idCliente`, `dia`, `mes`, `año` , `horario`) VALUES (:idCliente, :dia, :mes, :ano , :horario)";
    $stmtAgenda = $conn->prepare($sqlAgenda);
    $stmtAgenda->bindParam(':idCliente', $idparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':dia', $diaparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':mes', $mesparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':ano', $anoparallevar, PDO::PARAM_INT);
    $stmtAgenda->bindParam(':horario', $horarallevar, PDO::PARAM_STR);
    $stmtAgenda->execute();
    $idAgenda = $conn->lastInsertId();

    // Consulta para insertar en la tabla "adquisiciones" usando el idAgenda
    $sqlAdquisiciones = "INSERT INTO `adquisiciones`(`idAgenda`, `Servicio_nombre`, `Sub_servicio_nombre`) VALUES (:idAgenda, :Servicio_nombre, :Sub_servicio_nombre)";
    $stmtAdquisiciones = $conn->prepare($sqlAdquisiciones);
    $stmtAdquisiciones->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtAdquisiciones->bindParam(':Servicio_nombre', $servicioparallevar, PDO::PARAM_STR);
    $stmtAdquisiciones->bindParam(':Sub_servicio_nombre', $subserviciosparallevar, PDO::PARAM_STR);
    $stmtAdquisiciones->execute();

    // Consulta para insertar en la tabla "pagos"
    $estatus_pago="Pendiente";
    $sqlPagos = "INSERT INTO `pagos` (`idCliente`, `idAgenda`, `Estatus_Pago`, `Monto`) VALUES (:idCliente, :idAgenda, :Estatus_Pago, :Monto)";
    $stmtPagos = $conn->prepare($sqlPagos);
    $stmtPagos->bindParam(':idCliente', $idparallevar, PDO::PARAM_INT);
    $stmtPagos->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtPagos->bindParam(':Estatus_Pago',$estatus_pago, PDO::PARAM_STR); // Asigna el estado del pago, puede ser "Pendiente" u otro valor
    $stmtPagos->bindParam(':Monto', $totalparallevar, PDO::PARAM_STR);
    $stmtPagos->execute();


    $sqlPagos = "INSERT INTO `resultados`(`idAgenda`) VALUES (:idAgenda)";
    $stmtPagos = $conn->prepare($sqlPagos);
    $stmtPagos->bindParam(':idAgenda', $idAgenda, PDO::PARAM_INT);
    $stmtPagos->execute();    

    $response['mensaje'] = "concluido";


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


require 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-6657540846200884-110114-2a3d8383b62965d0d266adaf8b6f25d7-222394250');
$preference = new MercadoPago\Preference();
$item= new MercadoPago\Item();

$item->id = $idAgenda;
$item->title = $idAgenda.' '.$servicio;
$item->quantity = 1;
$item->unit_price=$precio;
$item->currency_id= 'MXN';

$preference->items=array($item);
$preference->back_urls = array(
"success"=> "approved.php",
"pending"=> "approved.php",
"failure"=> "fallo.php"
);
$preference->auto_return="approved";
//$preference->binary_mode=true;
$preference->save();




} catch (PDOException $e) {
    // Maneja cualquier error aquí, por ejemplo, registrar el error.
    $response['mensaje'] = "Error: " . $e->getMessage();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://sdk.mercadopago.com/js/v2"></script>
<title>MercadoPago</title>
<style>
    #detalles-de-pago {
    text-align: center;
    background-color: azure;
    align-items: center;
}

#table-container {
    text-align: center; /* Alinea el contenido al centro horizontalmente */
    margin: 0 auto; /* Centra el contenedor horizontalmente */
}
</style>

</head>
<body>


    <div id="detalles-de-pago">        
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExbGhuamVxMnAzNW12azI1N2ppYWU3NWN0bjlxM2I0YnU5emRzNHRzbCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/BD3fG0QsiyXU7Zat34/giphy.gif" alt="Descripción de la imagen" width="300" height="200">
<h3>Detalles</h3>
<table id="table-container">
    <tr>
        <td>Id</td>
        <td><?php echo $idAgenda; ?></td>
    </tr>
    <tr>
        <td>servicio</td>
        <td><?php echo $servicio; ?></td>
    </tr>
    <tr>
        <td>precio</td>
        <td><?php echo $precio; ?></td>
    </tr>

</table>
<br><br><br>

    <div class="checkout-btn"></div>
    </div>


    <script>
        const mp= new MercadoPago('APP_USR-ea4524ac-58f8-4780-96d3-3c6c6d28a30e',{
            locale: 'es-MX'
        });
        mp.checkout({
           preference: {
            id: '<?php echo  $preference->id; ?>'
           },
           render: {
            container: '.checkout-btn',
            label: 'Proceder con el pago'
           }
        })
    </script>
    
</body>
</html>