<?php
$idagenda = $_GET['idagenda']; 

require('conexion.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
    SELECT
    pg.idAgenda,
    CONCAT(cli.Nombre_cliente, ' ', cli.Apellido1_cliente, ' ', cli.Apellido2_cliente) AS NombreCompleto, 
    ad.Servicio_nombre,
    ad.Sub_servicio_nombre,
    pg.Estatus_Pago,
    pg.Monto
    FROM pagos as pg
    JOIN agenda as age ON pg.idAgenda= age.idAgenda
    JOIN cliente as cli ON age.idCliente=cli.idCliente
    JOIN adquisiciones as ad ON pg.idAgenda=ad.idAgenda
    WHERE pg.idAgenda=$idagenda
    ";
    $stmt = $conn->query($sql);
    $row = $stmt->fetch(); // Obtener la primera fila de resultados

    if ($row) {
        $dia = date('d');   // Obtener el día actual en formato de dos dígitos (por ejemplo, '01' a '31')
        $mes = date('m');   // Obtener el mes actual en formato de dos dígitos (por ejemplo, '01' a '12')
        $ano = date('Y');   // Obtener el año actual en formato de cuatro dígitos (por ejemplo, '2023')
        $agenda = $row['idAgenda'];
        $total = $row['Monto'];
        $nombre = $row['NombreCompleto'];
        $servicio = $row['Servicio_nombre'];
        $subservicios = $row['Sub_servicio_nombre'];
    } 


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket</title>
</head>
<style>
    @page {
  width: 396pt;
  height: 612pt;
}
body {
  font-family: "Roboto", sans-serif;
  font-size: 12pt;
  line-height: 1.25;
  margin: 0;
  padding: 0;
}
.page {
  position: relative;
  width: 396pt;
  height: 612pt;
  margin: 1cm auto;
  padding: 1.25cm 1cm 0.5cm 1cm;
  border: 1px solid black;
}
.section {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
/*   border:1px solid red; */
}
.folio {
/*   float: right; */
  width:3.96cm;
  font-size: 0pt;
  table-layout: auto;
  border-collapse: collapse;
  margin-bottom:5px;
}
.folio-box {
  width: 3.96cm;
  min-height: 1cm;
  border: 1px solid #1CB393;
}
.folio-box p {
  text-align: center;
  font-size: 7pt;
  margin: 0px;
}
.folio-box span {
  display: inline-block;
  text-align: center;
  font-size: 16pt;
}
.folio-code {
  width: 3.96cm;
  height: 0.5cm;
  border: 1px solid #1CB393;
  border-bottom: 0px;
  background: white;
  font-size: 9pt;
  line-height: 0.5cm;
  background-color: #1CB393;
  color: white;
}
.text-center {
  text-align: center;
}

.section-mark {
  position: relative;
}
.section--item {
  border-collapse: separate;
  border-spacing: 0px 5px;
  margin-bottom: 0.25cm;
}
.section--item__header {
  font-size: 9pt;
}
.section--item__header__container {
  padding-left: 15px;
  position: relative;
  font-size: 9pt;
}
.section--item__mark {
  position: absolute;
  left: 0;
  top: 0;
  height: 0.5cm;
  width: 0.2cm;
  background-color: #1CB393;
}
.section--item__content {
  background-color: rgba(49, 168, 161, 0.08);
  padding: 0.25cm;
  font-size: 9pt;
  font-weight: 300;
  font-family: "Roboto", sans-serif;
}

.footer {
  position: absolute;
  padding-top: 0.15cm;
  padding-bottom: 0.15cm;
  left: 0;
  bottom: 1cm;
  width: 100%;
  border-bottom: 1px solid #cfcfcf;
  border-top: 1px solid #cfcfcf;
  font-size: 8px;
  text-align: center;
}
.paid{
  width: 5.6cm;
  height: 1.25cm;
  padding: 0.5cm 0.75cm;
  border: 2px solid black;
  position: absolute;
  top: 60%;
  left: 55%;
  transform: translate(-60%, 0%) rotate(-45deg); /* Rotar 45 grados */;
  font-size: 40pt;
  text-align: center;
  line-height: 40pt;
  color: black;
}

.clearfix:after {
  content:"";
  display:block;
  clear:both;
 }
</style>
<body>

<div class="page">
  <table class="section">
    <tr>
      <td>
        <table class="section">
          <tr>
            <td>
              <img src="https://media.giphy.com/media/6Lf6EwGNiTITohCnfo/giphy.gif" alt="logo-huertos-colibri" width="250px">
             
            </td>
          </tr>
          <tr>
            <td>
            </td>
          </tr>
        </table>
      </td>
      <td align="right">
        
        <div style="display: inline-block; width: 3.96cm;text-align:center;">
          <table class="folio">
            <tr class="folio-code">
              <td align="center">
                <span>Folio: T<?php echo $agenda; ?></span>
              </td>
            </tr>
            <tr class="folio-box">
              <td>
                <p>
                  Total a pagar <br />
                  <span>$<?php echo $total; ?></span>
                </p>
              </td>
            </tr>
          </table>
          <span style="font-size: 12pt; text-transform: uppercase;">Ticket de Pago</span>
        </div>
      </td>
    </tr>
  </table>
  <br><br><br>
  <!--   Sections -->
  <table class="section section--item">
    <tr>
      <td class="section--item__header">
        <div class="section--item__header__container">
          <div class="section--item__mark"></div>
          <strong>Fecha:</strong>
        </div>
      </td>
    </tr>
    <tr>
      <td class="section--item__content">Leon, Guanajuato  a <?php echo $dia; ?> de <?php echo $mes; ?> del <?php echo $ano; ?></td>
    </tr>
  </table>
  <table class="section section--item">
    <tr>
      <td class="section--item__header">
        <div class="section--item__header__container">
          <div class="section--item__mark"></div>
          <strong>Beneficiario</strong>
        </div>
      </td>
    </tr>
    <tr>
      <td class="section--item__content"><?php echo $nombre; ?></td>
    </tr>
  </table>
  <table class="section section--item">
    <tr>
      <td class="section--item__header">
        <div class="section--item__header__container">
          <div class="section--item__mark"></div>
          <strong>Servicio</strong>
        </div>
      </td>
    </tr>
    <tr>
      <td class="section--item__content"><?php echo $servicio; ?></td>
    </tr>
  </table>
    <table class="section section--item">
    <tr>
      <td class="section--item__header">
        <div class="section--item__header__container">
          <div class="section--item__mark"></div>
          <strong>Informacion Adicional</strong>
        </div>
      </td>
    </tr>
    <tr>
      <td class="section--item__content">
        <ul style="line-height:0.5cm;">
          
          <?php 
          $subserviciosArray = explode(",", $subservicios);
          foreach ($subserviciosArray as $subservicio) {
              $subserviciop = trim($subservicio); // Elimina espacios en blanco adicionales
              if (!empty($subserviciop)) {
                  echo "<li>$subservicio</li>\n"; // Agrega una etiqueta <li> y un salto de línea
              }
          }
          ?>
        </ul>
      </td>
    </tr>
  </table>
  <!-- end Sections -->
  <!--   Footer -->
  <div class="footer">
    <p>Si tiene alguna duda comunicarse al teléfono: 477-647-66-00</p>
    <p>Av Paseo del Moral 405A-Int 1, Jardines del Moral, 37160 León, Gto.</p>
  </div>
  <!--Pagado-->
  <div class="paid">
    PAGADO
</div>
  <!--end Pagado-->
</div>



</body>
</html>