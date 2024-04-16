<!DOCTYPE html>
<html>

<head>
  <!-- basico -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Hexoma</title>

  <link rel="stylesheet" type="text/css" href="css/tabla.css" />

  <link rel="stylesheet" type="text/css" href="css/paginaindex.css" />
  <!-- contenido -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsivo css -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/bf66789927.css">
  <style>
    .ancho-input {
    width: 400px;
}

    .contenido {
      height: 100vh;
      background-color: transparent;
      background-image: url('https://c.pxhere.com/photos/63/0d/analysis_biochemistry_biologist_biology_biotechnology_chemistry_clinic_clinical-1192476.jpg!d');
      background-size: 100% 100%;
      /* Tamaño al 100% del ancho y alto del contenedor */
      background-repeat: no-repeat;
      /* Evita que se repita la imagen */
      background-attachment: fixed;
    }
  </style>

  <style>
    .botonesmodalesiniciales {
      display: inline-block;
      padding: 10px 20px;
      /* Ajusta el relleno según tu preferencia */
      background-color: rgb(0, 255, 225);
      color: black;
      border-radius: 25px 25px 0 0;
      /* Redondea solo los lados izquierdo y derecho */
      text-decoration: none;
      /* Elimina el subrayado predeterminado en enlaces */
      text-align: center;
      /* Alinea el texto en el centro */
      font-weight: bold;
      /* Añade negrita al texto (opcional) */
      width: 200px;
      /* Ajusta el ancho según tu preferencia */
      transition: background-color 0.3s;
      /* Agrega una transición suave de color al pasar el mouse (opcional) */
      color: rgb(253, 253, 253);
      background-color: rgb(222, 77, 77);
    }

    .botonesmodalesiniciales_mostrar {
      display: inline-block;
      padding: 10px 20px;
      /* Ajusta el relleno según tu preferencia */
      background-color: rgb(0, 255, 225);
      color: black;
      border-radius: 25px 25px 0 0;
      /* Redondea solo los lados izquierdo y derecho */
      text-decoration: none;
      /* Elimina el subrayado predeterminado en enlaces */
      text-align: center;
      /* Alinea el texto en el centro */
      font-weight: bold;
      /* Añade negrita al texto (opcional) */
      width: 100px;
      /* Ajusta el ancho según tu preferencia */
      transition: background-color 0.3s;
      /* Agrega una transición suave de color al pasar el mouse (opcional) */
      color: rgb(0, 0, 0);
    }


    .botonesmodalesiniciales2 {
      display: inline-block;
      padding: 10px 20px;
      /* Ajusta el relleno según tu preferencia */
      background-color: rgb(0, 255, 225);
      color: black;
      border-radius: 0 0 25px 25px;
      /* Redondea solo los lados izquierdo y derecho */
      text-decoration: none;
      /* Elimina el subrayado predeterminado en enlaces */
      text-align: center;
      /* Alinea el texto en el centro */
      font-weight: bold;
      /* Añade negrita al texto (opcional) */
      width: 200px;
      /* Ajusta el ancho según tu preferencia */
      transition: background-color 0.3s;
      /* Agrega una transición suave de color al pasar el mouse (opcional) */
      color: rgb(253, 253, 253);
      background-color: rgb(222, 77, 77);
    }




    /* Estilos para el modal y el contenedor */
    .modal-container {
      display: none;
      position: fixed;
      z-index: 999;
      /* Asegura que el modal esté en la parte superior */
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
    }

    .modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Estilos adicionales para el contenido del modal si es necesario */

    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      cursor: pointer;
    }

    /* Estilos para los modales y los contenedores */
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      /* Asegura que el modal esté en la parte superior */
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
    }

    .modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Estilos adicionales para el contenido de los modales si es necesario */

    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      cursor: pointer;
    }

    .estilo-checkbox input[type="checkbox"] {
      display: none;
      /* Hide the default checkbox */
    }

    .estilo-checkbox label {
      position: relative;
      padding-left: 30px;
      /* Create space for a custom checkbox icon */
      cursor: pointer;
    }

    .estilo-checkbox label:before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 20px;
      /* Width of the custom checkbox */
      height: 20px;
      /* Height of the custom checkbox */
      border: 2px solid #b97a7a;
      /* Border color of the custom checkbox */
      background-color: #eeff00;
      /* Fill color of the custom checkbox when checked */
    }

    .estilo-checkbox input[type="checkbox"]:checked+label:before {

      color: rgb(255, 255, 255);
      background-color: #000000;
      /* Change fill color when the checkbox is checked */
    }
  </style>


  <style>
    #tabladiasactivos {
    margin: 0 auto; /* Esto centrará la tabla horizontalmente */
    display: block;
}

        .calendario {
            font-family: Arial, sans-serif;
            text-align: center;
            max-width: 300px;
            margin: 0 auto;
        }

        .dias {
            width: 100%;
        }

        .dias th {
            background-color: #333;
            color: white;
            padding: 5px;
        }

        .dias td {
            padding: 5px;
            cursor: pointer; /* Hace que las celdas sean clicables */
        }

        .inactivo {
            background-color: red;
        }
  </style>

<style>
        .calendario {
            font-family: Arial, sans-serif;
            text-align: center;
            max-width: 300px;
            margin: 0 auto;
        }

        .diasagenda {
            width: 100%;
        }

        .diasagenda th {
            background-color: #333;
            color: white;
            padding: 5px;
        }

        .diasagenda td {
            padding: 4px;
            color: white;
            cursor: pointer; /* Hace que las celdas sean clicables */
        }

        .inactivo {
            background-color: #b97a7a;
        }

        .destacado {
            background-color: rgb(15, 243, 15);
            color: white;
        }
    </style>
</head>

<body>
  <div class="contenido" id="contenido">
    <header class="cabecera_seccion">
      <div class="container">

      </div>


      <div class="fluidodecontenido">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

          <a class="navegacion" href="index.html">
            <span>
              <img
                src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMXZjZXc1dG5pZTVjMGd1bzQwMTR5cnd5bGVhYzg4MWlucWhxaXA3MyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/6Lf6EwGNiTITohCnfo/giphy.gif"
                alt="Hexoma" style="width: 200px;height: 100px;"></span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#etiquetamenu"
            aria-controls="etiquetamenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="etiquetamenu">
            <div id="servicios"
              class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">

              <div id="item_menus">

              </div>

              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a onclick="presionamodal('inciosesion','INICIO')">
                  <img src="images/user.png" alt="hexoma" width="40px" height="40px">
                  <h4 id="usuario">Ingresa</h4>
                </a>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- FIN header section -->

    <!-- carrusel  -->
    <section class=" carrusel_uno position-relative" >
      <div id="Indicadores" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#Indicadores" data-slide-to="0" class="active"></li>
          <li data-target="#Indicadores" data-slide-to="1"></li>
          <li data-target="#Indicadores" data-slide-to="2"></li>
          <li data-target="#Indicadores" data-slide-to="3"></li>
          <li data-target="#Indicadores" data-slide-to="4"></li>
          <li data-target="#Indicadores" data-slide-to="5"></li>
        </ol>


        <div class="carousel-inner" style="height: 100%;">


          <?php
          require('conexion.php');


          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
          }

          $sql = "
         SELECT
             S.IdServicio,
             S.Servicio_Nombre,
             COALESCE(S.Servicio_Nombre_indicaciones, 'NO') AS Servicio_Nombre_indicaciones,
             COALESCE(S.Servicio_descripcion, 'NO') AS Servicio_descripcion,
             Sub.IdSubservicio,
             Sub.Sub_servicio_nombre,
             COALESCE(Sub.Sub_servicio_nombre_precio, 0) AS Sub_servicio_nombre_precio,
             COALESCE(Sub.Sub_servicio_nombre_basico, 'NO') AS Sub_servicio_nombre_basico,
             COALESCE(Sub.Sub_servicio_nombre_descripcion, 'NO') AS Sub_servicio_nombre_descripcion
            
         FROM Servicios AS S
         LEFT JOIN Subservicios AS Sub ON S.IdServicio = Sub.IdServicio
         ORDER BY S.IdServicio;
         ";





          $arreglo_asociativo = [
            "id" => [],
            "nombre" => [],
            "indicaciones" => [],
            "descripcion" => [],
            "incluye" => [],
            "total" => [],
            "subservicios" => [],
            "preciosubservicios" => [],
            "Sub_servicio_nombre_descripcion" => [],
            "NombreEspecial" => [],
            "PrecioEspecial" => [],
            "DescripcionEspecial" => [],
          ];


          $result = $conn->query($sql);
          $clave_a_buscar;


          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

              $clave_a_buscar = $row["IdServicio"];
              $a_comprobar = $row["Sub_servicio_nombre_basico"];
              $posicion = array_search($clave_a_buscar, $arreglo_asociativo["id"]);

              if (in_array($clave_a_buscar, $arreglo_asociativo["id"])) {
                $valor_a_agregar = $row["Sub_servicio_nombre"];
                // Solo añade si se marcó el subservicio como un básico y el valor no existe ya en el arreglo
                if ($a_comprobar == "SI") {
                  if (!in_array($valor_a_agregar, explode(",", $arreglo_asociativo["incluye"][$posicion]))) {
                    // No existe, entonces agrega el valor
                    $arreglo_asociativo["incluye"][$posicion] = $arreglo_asociativo["incluye"][$posicion] . "," . $valor_a_agregar;
                  }
                }


                //añade cada subservicio que exista con el fin de que el usuario personalice
                $arreglo_asociativo["subservicios"][$posicion] = $arreglo_asociativo["subservicios"][$posicion] . "," . $row["Sub_servicio_nombre"];
                $arreglo_asociativo["preciosubservicios"][$posicion] = $arreglo_asociativo["preciosubservicios"][$posicion] . "," . $row["Sub_servicio_nombre_precio"];
                $arreglo_asociativo["Sub_servicio_nombre_descripcion"][$posicion] = $arreglo_asociativo["Sub_servicio_nombre_descripcion"][$posicion] . "," . $row["Sub_servicio_nombre_descripcion"];

              } else {


                $arreglo_asociativo["id"][] = $row["IdServicio"];
                $arreglo_asociativo["nombre"][] = $row["Servicio_Nombre"];
                $arreglo_asociativo["indicaciones"][] = $row["Servicio_Nombre_indicaciones"];
                $arreglo_asociativo["descripcion"][] = $row["Servicio_descripcion"];
                $a_comprobar = $row["Sub_servicio_nombre_basico"];
                $posicion = array_search($clave_a_buscar, $arreglo_asociativo["id"]);
                if ($a_comprobar == "SI") {
                  $arreglo_asociativo["incluye"][$posicion] = $row["Sub_servicio_nombre"];
                }
                if ($a_comprobar == "NO") {
                  $arreglo_asociativo["incluye"][$posicion] = "";
                }
                $arreglo_asociativo["subservicios"][$posicion] = $row["Sub_servicio_nombre"];
                $arreglo_asociativo["preciosubservicios"][$posicion] = $row["Sub_servicio_nombre_precio"];
                $arreglo_asociativo["Sub_servicio_nombre_descripcion"][$posicion] = $row["Sub_servicio_nombre_descripcion"];



                $idServicio = $clave_a_buscar;





                $sql4 = "
                 SELECT
                  GROUP_CONCAT(E.NombreEspecial SEPARATOR ', ') AS NombresEspeciales,
                   GROUP_CONCAT(E.PrecioEspecial SEPARATOR ', ') AS PreciosEspeciales,
                   GROUP_CONCAT(E.DescripcionEspecial SEPARATOR ', ') AS DescripcionesEspeciales
                 FROM Subservicio_nombre_especial AS E
                 WHERE E.IdServicio = $idServicio
                 ORDER BY E.IdServicio;
                 ";



              }
            }
          } else {
            echo "No se encontraron resultados.";
          }





          $cantidad_ids = count($arreglo_asociativo["id"]);
          $cantidad_name = count($arreglo_asociativo["nombre"]);
          $ids = $arreglo_asociativo["id"];
          $names = $arreglo_asociativo["nombre"];
          $indicaciones = $arreglo_asociativo["indicaciones"];
          $descripcion = $arreglo_asociativo["descripcion"];
          $incluye = $arreglo_asociativo["incluye"];

          $sql2 = "
           SELECT S.IdServicio, S.Servicio_Nombre,
            SUM( CASE WHEN Sub.Sub_servicio_nombre_basico = 'SI' 
            THEN Sub.Sub_servicio_nombre_precio ELSE 0 END ) 
            AS SumaPrecioBasicos FROM Servicios AS 
            S LEFT JOIN Subservicios AS Sub ON
             S.IdServicio = Sub.IdServicio GROUP 
             BY S.IdServicio, S.Servicio_Nombre;
           ";
          $result2 = $conn->query($sql2);
          if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
              $clave_a_buscar = $row2['IdServicio'];
              $sumaPrecioBasicos = $row2['SumaPrecioBasicos'];
              // Asocia IdServicio con la suma de precios básicos
              //  echo '<script>alert('.$total[1].')</script>';
              $arreglo_asociativo["total"][$clave_a_buscar] = $sumaPrecioBasicos;
            }
          }

          $total = $arreglo_asociativo["total"];
          //echo '<script>alert('.$total[1].')</script>';
          
          $incluye = $arreglo_asociativo["incluye"];
          $subservicios = $arreglo_asociativo["subservicios"];
          $preciosubservicios = $arreglo_asociativo["preciosubservicios"];
          $Sub_servicio_nombre_descripcion = $arreglo_asociativo["Sub_servicio_nombre_descripcion"];

          $NombreEspecial = $arreglo_asociativo["NombreEspecial"];
          $PrecioEspecial = $arreglo_asociativo["PrecioEspecial"];
          $DescripcionEspecial = $arreglo_asociativo["DescripcionEspecial"];

          echo '<script> var incluye = ' . json_encode($incluye) . ';</script>';
          echo '<script> var ids = ' . json_encode($ids) . ';</script>';
          echo '<script> var nombres = ' . json_encode($names) . ';</script>';
          echo '<script> var indicaciones = ' . json_encode($indicaciones) . '; </script>';
          echo '<script> var descripcion = ' . json_encode($descripcion) . '; </script>';

          echo '<script> var subservicios = ' . json_encode($subservicios) . ';</script>';
          echo '<script> var preciosubservicios = ' . json_encode($preciosubservicios) . ';</script>';
          echo '<script> var Sub_servicio_nombre_descripcion = ' . json_encode($Sub_servicio_nombre_descripcion) . ';</script>';




          $var1 = "indicacionesmodeal";
          $var2 = "Descripcionmodeal";
          $var3 = "Personalizarmodeal";
          $var4 = "pagomodeal";

          if (count($ids) == count($names)) {
            // Recorrer los arreglos y mostrar los datos en una tabla
            $paraelprimero = 0;
            $paraelprimero = 0;
            $SumaPrecioBasico = 0;

            for ($i = 0; $i < count($ids); $i++) {
              $service_name = $names[$i]; // Obtén el nombre del servicio desde tu arreglo
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sql = "SELECT S.IdServicio, S.Servicio_Nombre,
     SUM(CASE WHEN Sub.Sub_servicio_nombre_basico = 'SI' THEN Sub.Sub_servicio_nombre_precio ELSE 0 END)
      AS SumaPrecioBasicos
     FROM Servicios AS S
     LEFT JOIN Subservicios AS Sub ON S.IdServicio = Sub.IdServicio
     WHERE S.Servicio_Nombre = :service_name
     GROUP BY S.IdServicio, S.Servicio_Nombre";

              $stmt = $conn->prepare($sql);
              $stmt->bindParam(':service_name', $service_name, PDO::PARAM_STR);
              $stmt->execute();
              // Manejar el resultado de la consulta aquí
              $result = $stmt->fetch(PDO::FETCH_ASSOC); // Obtén un array asoci
              $SumaPrecioBasico = $result['SumaPrecioBasicos'];




              $incluye2 = $incluye[$i];
              $opciones = explode(",", $incluye2);
              $varprovicional = "";
              foreach ($opciones as $opcion) {
                $varprovicional .= '                
                 <input type="checkbox" checked disabled>
                 <label style="color: black;">' . $opcion . '</label> 
                 ';
              }

              if ($paraelprimero == 0) {
                $paraelprimero = 1;
                echo '
                 <div class="carousel-item active">
                             <div class="container">
                               <div class="row">
                               <div class="col-md-4">
                               <div class="img-box">
                               </div>
                              </div>
                              <div class="col-md-8">
                               <center>
                               <a href="#" type="button" style=" background-color:  rgb(0, 255, 225);color:black;" class="botonesmodalesiniciales" ' .
                  'onclick="presionamodal(\'' . $var1 . '\', ' . $ids[$i] . ')">Indicaciones</a>
                               <a href="#" type="button" style=" background-color:  rgb(0, 255, 225);color:black;" class="botonesmodalesiniciales" ' .
                  'onclick="presionamodal(\'' . $var2 . '\', ' . $ids[$i] . ')">Descripcion</a>
                               </center>
             
                               <center>
                                 <div class="detail-box">
                                   <div class="estilo-checkbox"
                                     style=" width: 400px;height: auto; background-color: rgb(255, 255, 255);opacity: 0.7;">
                                     <h1 style="background-color: rgb(219, 70, 152); color: white;" id="nombreservicio' . $ids[$i] . '">' . $names[$i] . '</h1><br>
                                     <div id="incluyeservicios' . $ids[$i] . '">   
             
                                     </div>
                                    
                                     <h4 style="color: black;" >Esto incluye</h4>
                                     '
                  . $varprovicional .
                  '
                                     
                                     <div style="text-align: left;text-align: left;">
                                       <center>
                                         
                                               <h1 style=" color:rgb(0, 0, 0); " id="precio' . $ids[$i] . '">$ ' . $SumaPrecioBasico . '/MXN</h1>
                                       
                                       </center>
                                     </div>
                                   </div>
                               </center>
                               <center>
                               <a href="#" type="button"  style=" background-color:  rgb(0, 255, 225);color:black;" class="botonesmodalesiniciales2" ' .
                  'onclick="presionamodal(\'' . $var3 . '\', ' . $ids[$i] . ')">Personalizar</a>
                               <a href="#" type="button"  style=" background-color:  rgb(0, 255, 225);color:black;"class="botonesmodalesiniciales2" ' .
                  'onclick="presionamodal(\'' . $var3 . '\', ' . $ids[$i] . ')">Comprar ahora</a>
                                
                               </center>
 
                             </div>
                               </div>
                             </div>
                           </div>
                 
                 
                 ';
              } else {


                echo '
         <div class="carousel-item">
                     <div class="container">
                       <div class="row">
                         <div class="col-md-4">
                           <div class="img-box">
                             <!--<img src="images/medicine2.png" id="img1" width="auto" height="auto">-->
                           </div>
                         </div>
                         <div class="col-md-8">
                           <center>
                           <a href="#" type="button" style=" background-color:  rgb(0, 255, 225);color:black;" class="botonesmodalesiniciales" ' .
                  'onclick="presionamodal(\'' . $var1 . '\', ' . $ids[$i] . ')">Indicaciones</a>
                           <a href="#" type="button" style=" background-color:  rgb(0, 255, 225);color:black;" class="botonesmodalesiniciales" ' .
                  'onclick="presionamodal(\'' . $var2 . '\', ' . $ids[$i] . ')">Descripcion</a>
                           </center>
         
                           <center>
                             <div class="detail-box">
                               <div class="estilo-checkbox"
                                 style=" width: 403px;height: auto; background-color: rgb(255, 255, 255);opacity: 0.7;">
                                 <h1 style="background-color: rgb(219, 70, 152); color: white;" id="nombreservicio' . $ids[$i] . '">' . $names[$i] . '</h1><br>
                                 <div id="incluyeservicios' . $ids[$i] . '">   
         
                                 </div>
                                
                                 <h4 style="color: black;" >Esto incluye</h4>
                                 '
                  . $varprovicional .
                  '
                                 
                                 <div style="text-align: left;text-align: left;">
 
                                 <center>
                                         
                                 <h1 style=" color:rgb(0, 0, 0); ">$ ' . $SumaPrecioBasico . '/MXN</h1>
                         
                         </center>
                                 </div>
                               </div>
                           </center>
                           <center>
                           <a href="#" type="button"  style=" background-color:  rgb(0, 255, 225);color:black;" class="botonesmodalesiniciales2" ' .
                  'onclick="presionamodal(\'' . $var3 . '\', ' . $ids[$i] . ')">Personalizar</a>
                           <a href="#" type="button"  style=" background-color:  rgb(0, 255, 225);color:black;"class="botonesmodalesiniciales2" ' .
                  'onclick="presionamodal(\'' . $var3 . '\', ' . $ids[$i] . ')">Comprar ahora</a>
                            
                           </center>
                         </div>
                       </div>
                     </div>
                   </div>
         
         
         ';

              }



            }

          }



          ?>




        </div>

        <br><br><br><br> <br><br><br><br>


        <a class="carrusel_anterior" href="#Indicadores" role="button" data-slide="prev">
          <span class="sr-only">regresar</span>
        </a>
        <a class="carrusel_siguiente" href="#Indicadores" role="button" data-slide="next">
          <span class="sr-only">siguiente</span>
        </a>

      </div>
    </section>
  </div>


 <!-- AGENDA MENSUAL Modal -->
 <div id="agendamensual" class="modal">
    <div class="modal-content" style="width:auto;height: 700px; overflow: auto;">
      <span class="close" onclick="cerrarpresionamodal('agendamensual');">&times;</span>
      <h2>AGENDA MENSUAL</h2>
      <div>
       
          <div style="display: none;">
            <input style="width: auto;" name="urlparallevar" id="urlparallevar" />
          </div>

            <div id="menuagendamensual" style="display: block;">
            <h1>SELECCIONA UNA OPCION</h1>
            <button class="botonesmodalesiniciales2" onclick="ponerhorasestablecidas('inicio');" type="button"
              style="background-color: aqua; color: black; float: CENTER;">HORAS ESTABLECIDAS</button>
            <button class="botonesmodalesiniciales"  onclick="poneragendaestablecidas();" type="button">AGENDA MENSUAL</button>
            </div>

            <div id="agendaestablecidasmensual" style="display: none;float: CENTER;">

        


            <div class="calendario">
                <div class="encabezado">
                  <h2 id="mes-y-ano"></h2>
                </div>          

  <label> selecciona el mes para añadir mas campos: </label>
          <select onchange="ponercalendario();" id="messeleccionado" name="mes">
    <option value=""></option>
    <option value="01">Enero</option>
    <option value="02">Febrero</option>
    <option value="03">Marzo</option>
    <option value="04">Abril</option>
    <option value="05">Mayo</option>
    <option value="06">Junio</option>
    <option value="07">Julio</option>
    <option value="08">Agosto</option>
    <option value="09">Septiembre</option>
    <option value="10">Octubre</option>
    <option value="11">Noviembre</option>
    <option value="12">Diciembre</option>
          </select>
 
        <br><br>
        <center>
             <table style="color:black;display: none;" id="dias"class="dias">
               <tr>
                <th>Dom</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mié</th>
                <th>Jue</th>
                <th>Vie</th>
                <th>Sáb</th>
              </tr>
             </table>
      </center>          
          </div>
          <center>
            <form action="modificaroinsertaragenda.php" method="post">
              <div style="display: none;">
              <input id="urlparaactualizarconagenda" name="urlparaactualizarconagendasha" />
              </div>
             <table style="color:black; display: inline-block;" id="tabladiasactivos">
               <tr>
               <th></th>
               <th>DIA</th>
               <th>MES</th>
               <th>Hora</th>
                </tr>
                <?php
                include 'traerdiasyhorasestablecidas.php';
                ?>
            </table>
            <br>

            <button class="botonesmodalesiniciales2" type="submit">GUARDAR</button>


          </form>
        </center>
        <script>


          function eliminarfechaasignada(id) {
            // alert(id);

            const url = 'borrarfechasestablecidas.php?id=' + id;
            fetch(url)
              .then(response => {
                if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
              })
              .then(data => {
                document.getElementById("urlparaactualizar").value = urlpagina;
                document.getElementById("agendamensual").style.display = "none";
                document.getElementById("exitomodeal").style.display = "block";
              })
              .catch(error => {
                console.error('Error:', error);
              });



          }


          function poneragendaestablecidas() {
            document.getElementById("urlparaactualizarconagenda").value = urlpagina;
            document.getElementById("menuagendamensual").style.display = "none";
            document.getElementById("agendaestablecidasmensual").style.display = "block";
          }

          function ponercalendario() {
            document.getElementById("dias").style.display = "block";
            document.getElementById("tabladiasactivos").style.display = "block";
            const mesYAno = document.getElementById('mes-y-ano');
            const tablaDias = document.querySelector('.dias');
            const resultado = document.getElementById('resultado');

            var mes = document.getElementById("messeleccionado").value;
            document.getElementById("messeleccionado").disabled = true;
            var fecha = new Date();
            var año = fecha.getFullYear();
            alert(año);
            const primerDia = new Date(año, mes - 1, 1);
            const ultimoDia = new Date(año, mes, 0);
            const numDias = ultimoDia.getDate();
            const primerDiaSemana = primerDia.getDay();
            //alert("funcion");
            mesYAno.textContent = new Intl.DateTimeFormat('es', { month: 'long', year: 'numeric' }).format(primerDia);

            let dia = 1;
            for (let i = 0; i < 6; i++) {
              const fila = document.createElement('tr');

              for (let j = 0; j < 7; j++) {
                let celda;

                if ((i === 0 && j < primerDiaSemana) || dia > numDias) {
                  celda = document.createElement('td');
                  celda.textContent = "";
                  celda.style.color = "black";
                } else {
                  celda = document.createElement('td');
                  celda.textContent = dia;
                  celda.style.color = "black";

                  if (j === 0 || j === 6) {
                    celda.classList.add('inactivo'); // Marcar fines de semana como inactivos
                  } else {
                    celda.addEventListener('click', () => {
                      //resultado.textContent = `Día seleccionado: ${celda.textContent}`;
                      agregarFilaActivos(mes, celda.textContent);
                    });
                  }

                  dia++;
                }

                fila.appendChild(celda);
              }

              tablaDias.appendChild(fila);
            }



          }


          function agregarFilaActivos(mes, dia) {
            var tabla = document.getElementById('tabladiasactivos');
            var nuevaFila = document.createElement('tr');
            var cantidadFilas = tabla.rows.length;

            // Genera un identificador único para la fila
            var filaId = cantidadFilas;
            var celda0 = document.createElement('td');
            var div0 = document.createElement('div');
            div0.style.display = 'none';
            var input0 = document.createElement('input');
            input0.setAttribute('name', 'id[]');
            input0.value = "nuevo"; // Aquí puedes establecer un valor fijo para los nuevos registros
            div0.appendChild(input0);
            celda0.appendChild(div0);

            var celda1 = document.createElement('td');
            var div1 = document.createElement('div');
            div1.style.display = 'block';
            var input1 = document.createElement('input');
            input1.setAttribute('name', 'dia[]');
            input1.value = dia;
            div1.appendChild(input1);
            celda1.appendChild(div1);

            var celda2 = document.createElement('td');
            var div2 = document.createElement('div');
            div2.style.display = 'block';
            var input2 = document.createElement('input');
            input2.setAttribute('name', 'mes[]');
            input2.value = mes;
            div2.appendChild(input2);
            celda2.appendChild(div2);

            var celda3 = document.createElement('td');
            fetch('traerhorasparaevaluar.php')
              .then(response => response.json())
              .then(data => {
                data.forEach(hora => {
                  var input3 = document.createElement('input');
                  input3.setAttribute('type', 'checkbox');
                  input3.setAttribute('name', 'horas[' + filaId + '][]'); // Usa filaId para agrupar las horas en el mismo arreglo
                  input3.value = hora;
                  input3.checked = true; // Establece el checkbox como marcado por defecto
                  var label = document.createElement('label');
                  label.textContent = hora;
                  celda3.appendChild(input3);
                  celda3.appendChild(label);
                });

                nuevaFila.appendChild(celda0);
                nuevaFila.appendChild(celda1);
                nuevaFila.appendChild(celda2);
                nuevaFila.appendChild(celda3);
                tabla.appendChild(nuevaFila);
              })
              .catch(error => {
                console.error('Error al obtener los resultados:', error);
              });
          }
        </script>
      </div>

      <div id="horasestablecidasmensual" style="display: none;height: 500px; overflow: auto;">
        <button type="button" class="botonesmodalesiniciales"
          onclick="ponerhorasestablecidas('regreso');">regresar</button>
        <form action="guardarhorasestablecidas.php" method="post">
          <h1>ESTAS SON LAS HORAS ESTABLECIDAS</h1>
          <div style="display: none;">
            <input id="urlparaestablecidas" name="urlallevar" />
          </div>

          <center>
            <table id="tablahorasasignadas">
              <tr>
                <th style="color:black;">
                  </td>
                <th style="color:black;">
                  hora
                </th>
                <th>
                </th>
              </tr>
              <?php include 'traerfechasestablecidas.php';
              ?>
            </table>
          </center>
          <br>
          <button style="background-color: aqua;color: black;" type="button" class="botonesmodalesiniciales2"
            onclick="agregarFilaparahorasestablecidas();">Añadir filas</button>
          <br><br><br><br>
          <button type="submit" class="botonesmodalesiniciales" onclick="">Guardar</button>
        </form>
      </div>
    </div>
    <script>



      function agregarFilaparahorasestablecidas() {
        var tabla = document.getElementById('tablahorasasignadas');
        var cantidadFilas = tabla.rows.length; // Resta 1 para excluir la fila de encabezado
        //alert(cantidadFilas);
        var nuevaFila = document.createElement('tr');
        var celda0 = document.createElement('td');
        var input0 = document.createElement('input');
        input0.setAttribute('type', 'text');
        input0.setAttribute('name', 'id[]');
        input0.setAttribute('value', 'nuevo');
        // Crear un div oculto
        var divOculto = document.createElement('div');
        divOculto.style.display = 'none';
        // Agregar el input al div oculto
        divOculto.appendChild(input0);
        // Agregar el div oculto a la celda
        celda0.appendChild(divOculto);
        // Celda 2: Hora
        var celda1 = document.createElement('td');
        var input1 = document.createElement('input');
        input1.setAttribute('type', 'time');
        input1.setAttribute('name', 'horas[]'); // Usar un arreglo para almacenar múltiples horas
        celda1.appendChild(input1);
        // Celda 3: Botón Eliminar
        var celda2 = document.createElement('td');
        var botonEliminar = document.createElement('button');
        botonEliminar.setAttribute('type', 'button');
        botonEliminar.style.width = '120px';
        botonEliminar.className = 'botonesmodalesiniciales2';
        botonEliminar.innerHTML = 'Eliminar';
        celda2.appendChild(botonEliminar);
        // Agregar las celdas a la nueva fila
        nuevaFila.appendChild(celda0);
        nuevaFila.appendChild(celda1);
        nuevaFila.appendChild(celda2);
        // Agregar la nueva fila a la tabla
        tabla.appendChild(nuevaFila);
      }

      function eliminarhoraestablecida(hora) {
       // alert(hora);
        const url = 'borrarhoraestablecida.php?hora=' + hora + '&urlpagina=' + urlpagina;
        fetch(url)
          .then(response => {
            if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
          })
          .then(data => {
            document.getElementById("agendamensual").style.display = "none";
            document.getElementById("urlparaactualizar").value = urlpagina;
            document.getElementById("exitomodeal").style.display = "block";
          })
          .catch(error => {
            console.error('Error:', error);
          });



      }
      function ponerhorasestablecidas(hacer) {
        if (hacer == "inicio") {
          //urlparaestablecidas  
          document.getElementById("urlparaestablecidas").value = urlpagina;
          document.getElementById("menuagendamensual").style.display = "none";
          document.getElementById("horasestablecidasmensual").style.display = "block";
        }
        if (hacer == "regreso") {
          document.getElementById("horasestablecidasmensual").style.display = "none";
          document.getElementById("menuagendamensual").style.display = "block";
        }
      }


    </script>

  </div>
</div>
<!-- subir factura Modal -->
<div id="subirfactura" class="modal">
    <div class="modal-content" style="width: 400px;">
      <span class="close" onclick="cerrarpresionamodal('subirfactura');">&times;</span>
      <h2>Factura</h2>
      <form action="procesar_documento_factura.php" method="post" enctype="multipart/form-data">
    <div style="display:none;">
        <input type="text" name="urlparallevarresultado" id="urlparallevarfactura" readonly>
    </div>
    <label style="color:black;" for="idagenda">Id agenda:</label>
    <input type="text" name="idagenda" id="idagendafactura" readonly>
    <br><br><br><br>
    <label for="archivo">Ingrese la factura:</label>
    <input type="file" name="archivo" id="archivo" accept=".pdf" required>
    <br>
    <br> <br> 
    <input type="submit" value="Subir Documento">
</form>

    </div>
  </div>
 <!-- solicitud de factura Modal -->
 <div id="Facturasolicitudparasubir" class="modal">
    <div class="modal-content" style="width: 400px;">
      <span class="close" onclick="cerrarpresionamodal('Facturasolicitudparasubir');">&times;</span>
      <h2>Solicitud de factura</h2>
      <form action="procesar_solicitud_factura.php" method="post" enctype="multipart/form-data">
    <div style="display:none;">
        <input type="text" name="urlparallevarresultado" id="urlparallevarsolfac" readonly>
    </div>
    <label style="color:black;" for="idagenda">Id agenda:</label>
    <input type="text" name="idagenda" id="idagendasfac" readonly>
    <div style="display:none;">
    <label style="color:black;" for="RFC">Ingrese su RFC:</label>
    <input type="text" value="NO" name="RFC" required>
    </div>
    <label for="archivo">Ingrese su constancia fiscal:</label>
    <input type="file" name="archivo" accept=".pdf" required>
    <br>
    <br> <br> 
    <input type="submit" value="Subir Documento">
</form>

    </div>
  </div>
 <!-- Resultadosparasubir Modal -->
 <div id="Resultadosparasubir" class="modal">
    <div class="modal-content" style="width: 400px;">
      <span class="close" onclick="cerrarpresionamodal('Resultadosparasubir');">&times;</span>
      <h2>Resultados</h2>
      <form action="procesar_documento_resultado.php" method="post" enctype="multipart/form-data">
    <div style="display:none;">
        <input type="text" name="urlparallevarresultado" id="urlparallevarresultado" readonly>
    </div>
    <label style="color:black;" for="idagenda">Id agenda:</label>
    <input type="text" name="idagenda" id="idagenda" readonly>
    <br><br><br><br>
    <label for="archivo">Ingrese su url:</label>
    <input type="file" name="archivo" id="archivo" accept=".pdf">
    <br>
    <br> <br> 
    <input type="submit" value="Subir Documento">
</form>

    </div>
  </div>
  <!-- menuadministradores Modal -->
  <div id="menuadministradores" class="modal" style="display: none;">
    <div class="modal-content" style="width: 300px;">
      <span class="close" onclick="cerrarpresionamodal('menuadministradores');">&times;</span>
      <h2>Menu principal</h2>
      <div>
      <button id="btn_SERVICIOSACr" href="#SERVICIOSACr" type="button" onclick="abrirmenuprincipaladmin('SERVICIOS');"  >Servicios</button><br><br>
      <button type="button" id="btn_UsuariosACr" href="#UsuariosACr" onclick="abrirmenuprincipaladmin('UsuariosACr');">Pacientes</button><br><br>
      <button type="button" id="btn_EmpleadosACr" href="#EmpleadosACr" onclick="abrirmenuprincipaladmin('EmpleadosACr');">Trabajadores</button><br><br>
      <button type="button" id="btn_CITASAC" href="#CITASAC" onclick="abrirmenuprincipaladmin('CITASAC');">Citas Mensuales</button><br><br>
      <button type="button" id="btn_CITASACt"  href="#CITASACt" onclick="abrirmenuprincipaladmin('CITASACt');">Historial de Citas</button><br><br>
      </div>
    </div>
  </div>
  <!-- NUEVOSSERVICIOS Modal -->
  <div id="anadirnuevoserviciosmodeal" class="modal">
    <div class="modal-content" style="width: 800px;">
      <span class="close" onclick="cerrarpresionamodal('anadirnuevoserviciosmodeal');">&times;</span>
      <h2>AGREGAR SERVICIOS</h2>
      <div>
        <form action="agregarnuevoservicioysub.php" method="post">
          <div style="display: none;">
            <input style="width: 400px;" name="urlparallevar" id="urlparallevarservicios" />
          </div>
          <center>
            <h5>Introduce el Servicio:</h5>
            <input style="width: 400px;" name="servicioparallevar" placeholder="introduce el servicio aqui..." />

            <h5>Introduce las indicaciones:</h5>
            <textarea style="width: 400px;" name="indicacionesparallevar"
              placeholder="introduce las indicaciones  aqui..."></textarea>

            <h5>Introduce la Descripcion:</h5>
            <textarea style="width: 400px;" name="descripcionparallevar"
              placeholder="introduce la Descripcion  aqui..."></textarea>

            <table id="nuevoserviciostable">
              <tr>
                <th></th>
                <th>Sub servicio</th>
                <th>Costo</th>
                <th>Descripcion</th>
                <th>Es basico</th>
              </tr>
              <br><br>
              <tr>
                <td></td>
                <td>
                  <input name="subservicioparallevar" placeholder="Ingresa subservicio" />
                </td>
                <td>
                  <input name="precioparallevar" placeholder="Ingresa precio" />
                </td>
                <td>
                  <textarea name="descripciondelsubservicioparallevar" placeholder="Ingresa Descripcion"></textarea>
                </td>
                <td>
                  <select class="botonesmodalesiniciales" style="width:100px;" name="basicoparallevar">
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                  </select>
                </td>
              </tr>
            </table>
            <button class="botonesmodalesiniciales2" onclick="agregartdparanuevosservicios();" type="button"
              style="background-color: aqua; color: black; float: CENTER;">AGREGAR FILAS</button>
            <button class="botonesmodalesiniciales" type="submit">GUARDAR</button>
          </center>
        </form>
      </div>



    </div>
  </div>
  <!-- modificarservicios Modal -->
  <div id="modificarserviciosmodeal" class="modal">
    <div class="modal-content" style="width: 1000px;height: 500px; overflow: auto;">
      <span class="close" onclick="cerrarpresionamodal('modificarserviciosmodeal');">&times;</span>
      <h2>MODIFICAR SERVICIOS</h2>

      <div id="dosserviciosamodificar">

      </div>

      <div id="serviciosamodificar" style="width: 1000px">

      </div>
    </div>
  </div>
  <!-- INDICACIONES Modal -->
  <div id="indicacionesmodeal" class="modal">
    <div class="modal-content" style="width: 300px;">
      <span class="close" onclick="cerrarpresionamodal('indicacionesmodeal');">&times;</span>
      <h2>Indicaciones</h2>
      <div id="Indicaciones"></div>
    </div>
  </div>
  <!-- DESCRIPCION Modal -->
  <div id="Descripcionmodeal" class="modal">
    <div class="modal-content" style="width: 400px;">
      <span class="close" onclick="cerrarpresionamodal('Descripcionmodeal');">&times;</span>
      <h2>Descripcion</h2>
      <div id="descripcion"></div>
    </div>
  </div>
  <!-- PAGO Modal -->
  <div id="pagomodeal" class="modal">
    <div class="modal-content" style="width: 450px;">
      <span class="close" onclick="cerrarpresionamodal('pagomodeal');">&times;</span>
      <center>
        <h2>Resumen</h2>

        <div id="PAGO" style="width: 400px;color:black;">
<table>
  <tr>
    <th>
    </th>
    <th>
    </th>  
    </tr>

    <tr>
      <td style="color:black">
       cliente
      </td>
      <td style="color:black">
      <div id="clienteaseleccionar" style="display: block;">
        <input id="clienteelegido" name="clienteelegido" readonly/>
      </div>
      </td>
    </tr>



    <tr>
      <td style="color:black">
       servicio
      </td>
      <td style="color:black">
        <input id="servicioelegido" name="servicioelegido" readonly/>
      </td>
    </tr>


    <tr>
      <td style="color:black">
       Dia
      </td>
      <td style="color:black">
        <input id="Diaelegido" name="Diaelegido" readonly />
      </td>
    </tr>


    <tr>
      <td style="color:black">
       Mes
      </td>
      <td style="color:black">
        <input id="Meselegido" name="Meselegido" readonly />
      </td>
    </tr>

    <tr>
      <td style="color:black">
      a&ntilde;o
      </td>
      <td style="color:black">
        <input id="ANOelegido" name="ANOelegido" readonly />
      </td>
    </tr>

    <tr>
      <td style="color:black">
       Horario
      </td>
      <td style="color:black">
        <input id="Horarioelegido" name="Horarioelegido" readonly/>
      </td>
    </tr>


    <tr>
      <td style="color:black">
       Subservicios
      </td>
      <td style="color:black">
        <input id="subservicioelegido" name="subservicioelegido"readonly />
      </td>
    </tr>


    <tr>
      <td style="color:black">
       Total
      </td>
      <td style="color:black">
        <input id="Totalelegido" name="Totalelegido" readonly/>
      </td>
    </tr>

</table>
<H1>METODO DE PAGO</H1>
<button onclick="pagarservicios('ventanilla');" type="button">PAGO EN VENTANILLA</button><br><br>
<button  onclick="pagarservicios('mercadopago');" type="button">PAGO CON MERCADO</button><br>
<img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExd253bTVoYmduNHE5anphbnZndWl0eXpvZW5pZmhxZTdqb3c0a3YyaSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/TIyWyxTo09auTrkjFA/giphy.gif"  width="200px" height="80px" alt="Mi imagen" />

        </div>
      </center>
    </div>
  </div>
  <!-- registro con exito Modal -->
  <div id="exitomodeal" class="modal">
    <div class="modal-content" style="width: 400px;">
      <center>
        <form action="actualizar.php" method="post">
          <h2>SE HAN REALIZADO LOS CAMBIOS CON EXITO</h2>
          <div style="display: none;">
            <input name="urlparaactualizar" id="urlparaactualizar" />
          </div>
          <input onclick="cerrarpresionamodal('exitomodeal');" class="botonesmodalesiniciales"
            style="background-color: aquamarine; color: black;" type="submit" value="ACEPTAR">
        </form>
      </center>
    </div>
  </div>
  <!-- formulario de perfil Modal -->
  <div id="REGISTRARmodeal" class="modal">
  <br><br><br><br>
  <div class="modal-content" style="width: 90%; max-width: 800px; margin: 0 auto; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: auto;">
  <span class="close" style="color: #ff3333; font-size: 44px; cursor: pointer; position: absolute; top: 20px; right: 10px;" onclick="cerrarpresionamodal('REGISTRARmodeal');">&times;</span>
        <center>
            <img src="images/user.png" alt="hexoma" width="40px" height="40px" style="margin-bottom: 15px;">
            <h2 style="color: #333;">NUEVO PACIENTE</h2>
            <form action="insercioncliente.php" method="post">
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex-basis: 100%; margin-bottom: 10px;">
                        <label style="color: #333; font-weight: bold;" for="nombre">Correo Electrónico:</label>
                        <input type="text" id="correo" name="correo" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="contrasena">Contraseña:</label>
                        <input type="password" id="contrasena" name="contrasena" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="nombre">Nombre(s):</label>
                        <input type="text" id="nombre" name="nombre" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="apellido1">Primer Apellido:</label>
                        <input type="text" id="apellido1" name="apellido1" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="apellido2">Segundo Apellido:</label>
                        <input type="text" id="apellido2" name="apellido2" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                            <option value=""></option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;display: none;">
                        <label style="color: #333; font-weight: bold;" for="calle">Calle:</label>
                        <input type="text" id="calle" value="NO" name="calle" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                        <label style="color: #333; font-weight: bold;" for="no_exterior">Número Exterior:</label>
                        <input type="text" id="no_exterior" value="NO" name="no_exterior" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                        <label style="color: #333; font-weight: bold;" for="no_interior">Número Interior:</label>
                        <input type="text" id="no_interior" value="NO" name="no_interior" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="colonia">Colonia:</label>
                    <input type="text" id="colonia" value="NO" name="colonia" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="codigo_postal">Código Postal:</label>
                    <input type="text" id="codigo_postal" value="NO" name="codigo_postal" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="municipio">Municipio:</label>
                    <input type="text" id="municipio" value="NO" name="municipio" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="estado">Estado:</label>
                    <input type="text" id="estado" value="NO" name="estado" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;">
                    <label style="color:black;"for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;">
                    <label style="color:black;"for="celular">Celular:</label>
                    <input type="text" id="celular" name="celular" required>
                    </div>
                </div>
                <center>
                   <!-- <input class="botonesmodalesiniciales" style="background-color: #0077cc; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;" type="submit" value="Registrar">-->
                </center>
            </form>
            <br>
            <br>
        </center>
    </div>
</div>
  <!-- formulario de registro Modal -->
  <div id="REGISTRARnuevomodeal" class="modal">
    <div class="modal-content" style="width: 90%; max-width: 800px; margin: 0 auto; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: auto;">
      <span class="close" onclick="cerrarpresionamodal('REGISTRARnuevomodeal');">
        <h3>&times;</h3>
      </span>
      <center>
        <img src="images/user.png" alt="hexoma" width="50px" height="50px">
        <h2 id="pestañanuevocliente">NUEVO PACIENTE</h2><br><br><br>
        <form action="insercionclienteadmin.php" method="post">
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex-basis: 100%; margin-bottom: 10px;">
                        <label style="color: #333; font-weight: bold;" for="nombre">Correo Electrónico:</label>
                        <input type="text" id="correo" name="correo" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="contrasena">Contraseña:</label>
                        <input type="password" id="contrasena" name="contrasena" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="nombre">Nombre(s):</label>
                        <input type="text" id="nombre" name="nombre" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="apellido1">Primer Apellido:</label>
                        <input type="text" id="apellido1" name="apellido1" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="apellido2">Segundo Apellido:</label>
                        <input type="text" id="apellido2" name="apellido2" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                        <label style="color: #333; font-weight: bold;" for="sexo">Sexo:</label>
                        <select id="sexo" name="sexo" required style="padding: 8px; border: 3px solid #ccc; border-radius: 5px; width: 100%;">
                            <option value=""></option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div style="flex-basis: 100%; margin-bottom: 15px;display: none;">
                        <label style="color: #333; font-weight: bold;" for="calle">Calle:</label>
                        <input type="text" id="calle" value="NO" name="calle" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                        <label style="color: #333; font-weight: bold;" for="no_exterior">Número Exterior:</label>
                        <input type="text" id="no_exterior" value="NO" name="no_exterior" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                        <label style="color: #333; font-weight: bold;" for="no_interior">Número Interior:</label>
                        <input type="text" id="no_interior" value="NO" name="no_interior" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="colonia">Colonia:</label>
                    <input type="text" id="colonia" value="NO" name="colonia" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="codigo_postal">Código Postal:</label>
                    <input type="text" id="codigo_postal" value="NO" name="codigo_postal" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="municipio">Municipio:</label>
                    <input type="text" id="municipio" value="NO" name="municipio" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;display: none;">
                    <label style="color:black;"for="estado">Estado:</label>
                    <input type="text" id="estado" value="NO" name="estado" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;">
                    <label style="color:black;"for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                    </div>
                    <div style="flex-basis: 48%; margin-bottom: 15px;">
                    <label style="color:black;"for="celular">Celular:</label>
                    <input type="text" id="celular" name="celular" required>
                    </div>
                  
                    <div style="flex-basis: 100%; margin-bottom: 15px;">
                    <input class="botonesmodalesiniciales" style="background-color: aquamarine; color: black;"
                      type="submit" value="Registrar">
                      </div>
               
              
        </form>


      </center>
    </div>
  </div>
  <!-- formulario de nuevo empleado  Modal -->
  <div id="REGISTRARnuevoempleadomodeal" class="modal">
    <div class="modal-content" style="width:auto;height:70%;">
      <span class="close" onclick="cerrarpresionamodal('REGISTRARnuevoempleadomodeal');">
        <h3>&times;</h3>
      </span>
      <center>
        <img src="images/user.png" alt="hexoma" width="50px" height="50px">
        <h2 id="pestañanuevocliente">NUEVO EMPLEADO</h2><br><br><br>
        <form action="insercionnuevoempleado.php" method="post">
          <div style="display: none;">
            <input type="text" id="urlpararegistrarempleado" name="urlparallevar" required><br><br>
          </div>
          <table>
            <tr>
              <td>
                <label style="color:black;" for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="apellido1">Primer Apellido:</label>
                <input type="text" id="apellido1" name="apellido1" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="apellido2">Segundo Apellido:</label>
                <input type="text" id="apellido2" name="apellido2" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                  <option value=""></option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;" for="calle">Calle:</label>
                <input type="text" id="calle" name="calle" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="no_exterior">Número Exterior:</label>
                <input type="text" id="no_exterior" name="no_exterior" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="no_interior">Número Interior:</label>
                <input type="text" id="no_interior" name="no_interior" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;" for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="codigo_postal">Código Postal:</label>
                <input type="text" id="codigo_postal" name="codigo_postal" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="municipio">Municipio:</label>
                <input type="text" id="municipio" name="municipio" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;" for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="celular">Celular:</label>
                <input type="text" id="celular" name="celular" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;">Rol del trabajador</label>
                <select name="rol" required>
                  <option value=""></option>
                  <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                  <option value="SECRETARIA">SECRETARIA</option>
                  <option value="CONTADOR">CONTADOR</option>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="4"> <!-- Usa colspan para ocupar toda la fila -->
                <center>
                  <div id="btnregistrar">
                    <input class="botonesmodalesiniciales" style="background-color: aquamarine; color: black;"
                      type="submit" value="Registrar">

                  </div>
                </center>
              </td>
            </tr>
          </table>
        </form>


      </center>
    </div>
  </div>
  <!-- formulario de MODIFICACION DE CLIENTE Modal -->
  <div id="MODIFICARCLIENTEmodeal" class="modal">
    <div class="modal-content" style="width: 90%; max-width: 800px; margin: 0 auto; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: auto;">
      <span class="close" onclick="cerrarpresionamodal('MODIFICARCLIENTEmodeal');">
        <h3>&times;</h3>
      </span>
      <center>
        <img src="images/user.png" alt="hexoma" width="50px" height="50px">
        <h2>MODIFICAR CLIENTE</h2><br><br><br>
        <form action="modificarcliente.php" method="post">
    <input type="hidden" id="ideM" name="id" required>
    <input type="hidden" id="urlmodificacion" name="urlaponer" required>
    
    <div style="margin-bottom: 20px;">
        <label style="color:black;" for="nombre">Nombre:</label>
        <input type="text" id="nombreM" name="nombre" required>
    </div>
    <div style="margin-bottom: 20px;">
        <label style="color:black;" for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1M" name="apellido1" required>
    </div>
    <div style="margin-bottom: 20px;">
        <label style="color:black;" for="apellido2">Segundo Apellido:</label>
        <input type="text" id="apellido2M" name="apellido2" required>
    </div>
    <div style="margin-bottom: 20px;">
        <label style="color:black;" for="sexo">Sexo:</label>
        <select id="sexoM" name="sexo" required>
            <option value=""></option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="calle">Calle:</label>
        <input type="text" id="calleM" name="calle" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="no_exterior">Número Exterior:</label>
        <input type="text" id="no_exteriorM" name="no_exterior" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="no_interior">Número Interior:</label>
        <input type="text" id="no_interiorM" name="no_interior" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="colonia">Colonia:</label>
        <input type="text" id="coloniaM" name="colonia" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postalM" name="codigo_postal" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="municipio">Municipio:</label>
        <input type="text" id="municipioM" name="municipio" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="estado">Estado:</label>
        <input type="text" id="estadoM" name="estado" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="telefono">Teléfono:</label>
        <input type="text" id="telefonoM" name="telefono" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="celular">Celular:</label>
        <input type="text" id="celularM" name="celular" required>
    </div>
    <div style="margin-bottom: 20px;">
        <label style="color:black;" for="correo">Correo Electrónico:</label>
        <input type="email" id="correoM" name="correo" required>
    </div>
    <div style="margin-bottom: 20px;display: none;">
        <label style="color:black;" for="contrasena">Contraseña:</label>
        <input type="password" id="contrasenaM" name="contrasena" required>
    </div>
    
    <div>
        <input class="botonesmodalesiniciales" style="background-color: aquamarine; color: black;" type="submit" value="GUARDAR">
    </div>
</form>

        <script>
          function restaurarpass() {
            var confirmacion = confirm("¿Estás seguro de que desea restaurar la contraseña?");

            if (confirmacion) {
              document.getElementById("contrasenaM").value = "12345";
            } else {
              // El usuario hizo clic en "Cancelar" o cerró la caja de diálogo
              // Aquí puedes manejar lo que sucede si el usuario cancela la acción
            }

          }
        </script>
        <script>


          function abrirmodificacioncliente(cliente) {
            //este no
            document.getElementById("MODIFICARCLIENTEmodeal").style.display = "block";
            var idcliente = document.getElementById("idclientemodificar" + cliente).innerHTML;
            var nombre = document.getElementById("nombreclientemodificar" + cliente).innerHTML;
            var apellido1 = document.getElementById("ap1clientemodificar" + cliente).innerHTML;
            var apellido2 = document.getElementById("ap2clientemodificar" + cliente).innerHTML;
            var sexo = document.getElementById("sxclientemodificar" + cliente).innerHTML;
            var calle = document.getElementById("calleclientemodificar" + cliente).innerHTML;
            var no_exterior = document.getElementById("exclientemodificar" + cliente).innerHTML;
            var no_interior = document.getElementById("interclientemodificar" + cliente).innerHTML;
            var colonia = document.getElementById("coloniaclientemodificar" + cliente).innerHTML;
            var codigo_postal = document.getElementById("cpclientemodificar" + cliente).innerHTML;
            var municipio = document.getElementById("municipioclientemodificar" + cliente).innerHTML;
            var estado = document.getElementById("estadoclientemodificar" + cliente).innerHTML;
            var telefono = document.getElementById("telclientemodificar" + cliente).innerHTML;
            var celular = document.getElementById("celclientemodificar" + cliente).innerHTML;
            var correo = document.getElementById("correoclientemodificar" + cliente).innerHTML;
            var contrasena = document.getElementById("passclientemodificar" + cliente).innerHTML;
            var mensaje = 'Nombre: ' + nombre + '\n' +
              'Apellido 1: ' + apellido1 + '\n' +
              'Apellido 2: ' + apellido2 + '\n' +
              'Sexo: ' + sexo + '\n' +
              'Calle: ' + calle + '\n' +
              'Número Exterior: ' + no_exterior + '\n' +
              'Número Interior: ' + no_interior + '\n' +
              'Colonia: ' + colonia + '\n' +
              'Código Postal: ' + codigo_postal + '\n' +
              'Municipio: ' + municipio + '\n' +
              'Estado: ' + estado + '\n' +
              'Teléfono: ' + telefono + '\n' +
              'Celular: ' + celular + '\n' +
              'Correo: ' + correo + '\n' +
              'Contraseña: ' + contrasena;
            //alert(mensaje);  // Actualizar elementos en la página con los valores
            //
            document.getElementById("ideM").value = cliente;
            document.getElementById("nombreM").value = nombre;
            document.getElementById("apellido1M").value = apellido1;
            document.getElementById("apellido2M").value = apellido2;
            document.getElementById("sexoM").value = sexo;
            document.getElementById("calleM").value = calle;
            document.getElementById("no_exteriorM").value = no_exterior;
            document.getElementById("no_interiorM").value = no_interior;
            document.getElementById("coloniaM").value = colonia;
            document.getElementById("codigo_postalM").value = codigo_postal;
            document.getElementById("municipioM").value = municipio;
            document.getElementById("estadoM").value = estado;
            document.getElementById("telefonoM").value = telefono;
            document.getElementById("celularM").value = celular;
            document.getElementById("correoM").value = correo;
            document.getElementById("contrasenaM").value = contrasena;
            document.getElementById("urlmodificacion").value = urlpagina;

          }
        </script>

      </center>
    </div>
  </div>
  <!-- formulario de MODIFICACION DE EMPLEADO Modal -->
  <div id="MODIFICARempleadomodeal" class="modal">
    <div class="modal-content" style="width:auto;height:600px; overflow: auto;">
      <span class="close" onclick="cerrarpresionamodal('MODIFICARempleadomodeal');">
        <h3>&times;</h3>
      </span>
      <center>
        <img src="images/user.png" alt="hexoma" width="50px" height="50px">
        <h2>MODIFICAR TRABAJADOR</h2><br><br><br>
        <form action="modificarempleado.php" method="post">

          <div style="display: none;">
            <input type="text" id="ideME" name="id" required><br><br>
            <input type="text" id="urlmodificacionE" name="urlaponer" required><br><br>
          </div>
          <table>
            <tr>
              <td>
                <label style="color:black;" for="nombre">Nombre:</label>
                <input type="text" id="nombreME" name="nombre" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="apellido1">Primer Apellido:</label>
                <input type="text" id="apellido1ME" name="apellido1" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="apellido2">Segundo Apellido:</label>
                <input type="text" id="apellido2ME" name="apellido2" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;" for="sexo">Sexo:</label>
                <select id="sexoME" name="sexo" required>
                  <option value=""></option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select><br><br>
              </td>

              <td>
                <label style="color:black;" for="calle">Calle:</label>
                <input type="text" id="calleME" name="calle" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="no_exterior">Número Exterior:</label>
                <input type="text" id="no_exteriorME" name="no_exterior" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;" for="no_interior">Número Interior:</label>
                <input type="text" id="no_interiorME" name="no_interior" required><br><br>
              </td>

              <td>
                <label style="color:black;" for="colonia">Colonia:</label>
                <input type="text" id="coloniaME" name="colonia" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="codigo_postal">Código Postal:</label>
                <input type="text" id="codigo_postalME" name="codigo_postal" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;" for="municipio">Municipio:</label>
                <input type="text" id="municipioME" name="municipio" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="estado">Estado:</label>
                <input type="text" id="estadoME" name="estado" required><br><br>
              </td>

              <td>
                <label style="color:black;" for="telefono">Teléfono:</label>
                <input type="text" id="telefonoME" name="telefono" required><br><br>
              </td>
            </tr>
            <tr>
              <td>
                <label style="color:black;" for="celular">Celular:</label>
                <input type="text" id="celularME" name="celular" required><br><br>
              </td>
              <td>
                <label style="color:black;" for="correo">Correo Electrónico:</label>
                <input type="email" id="correoME" name="correo" required><br><br>
              </td>
            </tr>
            <tr>
            <td>
                <label style="color:black;" for="rol">rol:</label>
                <select id="rol" name="rol" required>
                  <option value=""></option>
                  <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                  <option value="SECRETARIA">SECRETARIA/O</option>
                  <option value="CONTADOR">CONTADOR</option>
                </select>
              </td>

              <td>
                <br>
                <div style="display: bloc;">
                  <label style="color:black;" for="contrasena">Contraseña:</label>
                  <input type="password" id="contrasenaME" name="contrasena" required>
                </div>

                <button class="botonesmodalesiniciales" onclick="restaurarpassempleado();"> restaurar contrasena</button>

              </td>
            </tr>
            <tr>

              <td colspan="5"> <!-- Usa colspan para ocupar toda la fila -->
                <center>

                  <div id="btnregistrar">
                    <input class="botonesmodalesiniciales" style="background-color: aquamarine; color: black;"
                      type="submit" value="GUARDAR">

                  </div>
                </center>
              </td>
            </tr>
          </table>
        </form>
        <script>
          function restaurarpassempleado() {
            var confirmacion = confirm("¿Estás seguro de que desea restaurar la contraseña?");

            if (confirmacion) {
              document.getElementById("contrasenaME").value = "12345";
            } else {
              // El usuario hizo clic en "Cancelar" o cerró la caja de diálogo
              // Aquí puedes manejar lo que sucede si el usuario cancela la acción
            }

          }

          function abrirmodificacionempleado(empleado) {
              var id = document.getElementById("idempleado"+empleado).innerHTML;
              var ROL = document.getElementById("rolamodificar"+empleado).innerHTML;
              var nombre = document.getElementById("nombreempleado" + empleado).innerHTML;
              var apellido1 = document.getElementById("apellido1" + empleado).innerHTML;
              var apellido2 = document.getElementById("apellido2" + empleado).innerHTML;
              var sexo = document.getElementById("sexo" + empleado).innerHTML;
              var calleempleado = document.getElementById("calleempleado" + empleado).innerHTML;
              var noexteriorempleado = document.getElementById("noexteriorempleado" + empleado).innerHTML;
              var nointeriorempleado = document.getElementById("nointeriorempleado" + empleado).innerHTML;
              var coloniaempleado = document.getElementById("coloniaempleado" + empleado).innerHTML;
              var cpempleado = document.getElementById("cpempleado" + empleado).innerHTML;
              var municipioempleado = document.getElementById("municipioempleado" + empleado).innerHTML;
              var estadoempleado = document.getElementById("estadoempleado" + empleado).innerHTML;
              var telempleado = document.getElementById("telempleado" + empleado).innerHTML;
              var celempleado = document.getElementById("celempleado" + empleado).innerHTML;
              var correoempleado = document.getElementById("correoempleado" + empleado).innerHTML;
              var password = document.getElementById("password" + empleado).value;
              var mensaje = "Nombre: " + nombre + "\n" +
                "Apellido1: " + apellido1 + "\n" +
                "Apellido2: " + apellido2 + "\n" +
                "Sexo: " + sexo + "\n" +
                "Calle: " + calleempleado + "\n" +
                "Número Exterior: " + noexteriorempleado + "\n" +
                "Número Interior: " + nointeriorempleado + "\n" +
                "Colonia: " + coloniaempleado + "\n" +
                "Código Postal: " + cpempleado + "\n" +
                "Municipio: " + municipioempleado + "\n" +
                "Estado: " + estadoempleado + "\n" +
                "Teléfono: " + telempleado + "\n" +
                "Celular: " + celempleado + "\n" +
                "Correo Electrónico: " + correoempleado + "\n" +
                "Contraseña: " + password;
             //# alert(mensaje);
             document.getElementById("ideME").value = id;
             document.getElementById("rol").value = ROL;
              document.getElementById("nombreME").value = nombre;
              document.getElementById("apellido1ME").value = apellido1;
              document.getElementById("apellido2ME").value = apellido2;
              document.getElementById("sexoME").value = sexo;
              document.getElementById("calleME").value = calleempleado;
              document.getElementById("no_exteriorME").value = noexteriorempleado;
              document.getElementById("no_interiorME").value = nointeriorempleado;
              document.getElementById("coloniaME").value = coloniaempleado;
              document.getElementById("codigo_postalME").value = cpempleado;
              document.getElementById("municipioME").value = municipioempleado;
              document.getElementById("estadoME").value = estadoempleado;
              document.getElementById("telefonoME").value = telempleado;
              document.getElementById("celularME").value = celempleado;
              document.getElementById("correoME").value = correoempleado;
              document.getElementById("contrasenaME").value = password;       
              document.getElementById("urlmodificacionE").value = urlpagina;          
              document.getElementById("MODIFICARempleadomodeal").style.display = "block";
            }

        </script>
        </center>
    </div>
  </div>
  <!-- inciosesion Modal -->
  <div id="inciosesion" class="modal">
    <div class="modal-content" style="width: 450px; margin: 20px auto; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <span class="close" style="color: red; font-size: 24px; position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="cerrarpresionamodal('inciosesion');">&times;</span>
        <div style="text-align: center;">
            <button class="botonesmodalesiniciales" style="background-color: aquamarine; color: black; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; margin-right: 10px;" onclick="cerrarpresionamodal('inciosesion'); presionamodal('REGISTRARmodeal','INICIO');">Ver mis datos</button>
            <h2 style="color: #333; margin-top: 20px;">MI INFORMACION</h2>
            <form action="iniciodesecioncliente.php" method="post">
                <div style="text-align: center; margin-bottom: 15px;">
                    <label style="color: #333; font-weight: bold; display: block; margin-bottom: 5px;" for="usuario">Usuario:</label>
                    <input type="email" id="usuariot" name="correo" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 80%; max-width: 300px; margin-bottom: 15px;">
                </div>
                <div style="text-align: center; margin-bottom: 15px;">
                    <label style="color: #333; font-weight: bold; display: block; margin-bottom: 5px;" for="contrasena">Contraseña:</label>
                    <input type="password" id="passwordt" name="contrasena" placeholder="Contraseña" required style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 80%; max-width: 300px; margin-bottom: 15px;">
                </div>
                <div>
                <a onclick="cerrarpresionamodal('inciosesion');" style="color: #0077cc; text-decoration: none;">Restaurar Contraseña</a>
                </div>
                <!--<input type="checkbox" id="mostrar" onchange="mostrarContrasena()" style="margin-right: 5px;"> Mostrar contraseña-->
                </form>
            <hr style="border-top: 1px solid #ccc; margin: 20px 0;">
            <form action="index.php" method="post" style="display: inline; text-align: center;">
                <button class="botonesmodalesiniciales" style="background-color: #b97a7a; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;" type="submit">Cerrar sesión</button>
            </form>
        </div>
    </div>
</div>


  <!-- personalizar Modal -->
<div id="Personalizarmodeal" class="modal">
  <div class="modal-content" style="width: 700px;height: 600px; overflow: auto;">
    <span class="close" onclick="cerrarpresionamodal('Personalizarmodeal');">&times;</span>
    <h1 id="pestañadearribaperzonalizar">Personalizar</h1>
    <div id="personalizar"></div>
    <div id="segundo" style="display: none;">
      <p style="background-color:bisque;">
        Total: <span style="font-size: 30px;">$</span
        ><span style="font-size: 30px;" id="total">0</span
        ><span>/MXN</span>
      </p>
      <div id="btnparasiguiente">
      <button onclick="botonparaagendar();" class="botonesmodalesiniciales" type="button">CONTINUAR</button>
      </div>
    </div>
    <div id="calendariocita" style="display: none;">
    <h5>Selecciona el dia que deseeas acudir</h5>
      <div class="calendario">
        <div class="encabezado">
          <h2 id="mes-y-ano-agenda">Octubre 2023</h2>
        </div>
        <table class="diasagenda">
        <tr>
    <th>Dom</th>
    <th>Lun</th>
    <th>Mar</th>
    <th>Mié</th>
    <th>Jue</th>
    <th>Vie</th>
    <th>Sáb</th>
  </tr>
        </table>
      </div>
      <div id="resultadoagenda"></div>
    </div>
  </div>

  <?php include 'traerhorasparacitasinicial.php'; ?>

  <script>
  let diaSeleccionado = null; // Variable para almacenar el día seleccionado
  var ANOfinal;
  function botonparaagendar() {
    //btnparasiguiente
    document.getElementById("btnparasiguiente").style.display = "none";
    document.getElementById("calendariocita").style.display = "block";
    const fechaActual = new Date();
    const mesActual = fechaActual.getMonth() + 1;
    const añoActual = fechaActual.getFullYear();
    ANOfinal=añoActual;
    generarCalendario(mesActual, añoActual);
  }
const mesYAno = document.getElementById("mes-y-ano-agenda");
    const tablaDias = document.querySelector(".diasagenda");
    const resultado = document.getElementById("resultadoagenda");
    //const fechasDestacadas = [2,3,4,5,6,10,16,25,23,24,25,26,27,30,31];


function generarCalendario(mes, año) {
  //alert(fechasDestacadas);
  const fechaActual = new Date();
  const hoy = new Date();
  const primerDia = new Date(año, mes - 1, 1);
  const ultimoDia = new Date(año, mes, 0);
  const numDias = ultimoDia.getDate();
  const primerDiaSemana = primerDia.getDay();

  mesYAno.textContent = new Intl.DateTimeFormat("es", { month: "long", year: "numeric" }).format(primerDia);

  let dia = 1;
  let fila = document.createElement("tr");

  for (let i = 0; i < primerDiaSemana; i++) {
    const celdaVacia = document.createElement("td");
    celdaVacia.textContent = "";
    fila.appendChild(celdaVacia);
  }

  for (let i = 1; i <= numDias; i++) {
    const celda = document.createElement("td");
    celda.innerHTML = `<button style="background-color: transparent;" id="${dia}" onclick="mostrarDiaSeleccionado(this)">${dia}</button>`;
    if ((i + primerDiaSemana) % 7 === 1 || (i + primerDiaSemana) % 7 === 0) {
      celda.classList.add("inactivo");
    } else if (fechasDestacadas.includes(dia)) {
      const fechaActual = new Date();
      const diaActual = fechaActual.getDate();

      if(dia<= diaActual){
      celda.classList.add("inactivo");
      }else{
      celda.classList.add("destacado");
      }
    } else if (primerDia <= hoy && dia < hoy.getDate()) {
      celda.classList.add("inactivo");
    }
    dia++;
    fila.appendChild(celda);
    if ((i + primerDiaSemana) % 7 === 0 || dia > numDias) {
      tablaDias.appendChild(fila);
      fila = document.createElement("tr");
    }
  }
}

var cantidad=0;
var diafinal;
var mesfinal;

  function mostrarDiaSeleccionado(button) {
    
if(cantidad>0){
  const confirmacion = confirm("¿Estás seguro de que deseas cambiar el dia solicitado?");
if (confirmacion) {
  //alert("Confirmado. Continuemos.");
  const boton = document.getElementById(diafinal);
    boton.style.backgroundColor = "transparent";
} else {
  alert("Cancelado. La operación se ha detenido.");
}
}

   const diaSeleccionado = button.textContent;
    diafinal=diaSeleccionado;
    const fechaActual = new Date();
    const diaActual = fechaActual.getDate();
    const mesActual = fechaActual.getMonth() + 1;
    mesfinal=mesActual;
    if(diaSeleccionado <= diaActual){
        alert("Lo sentimos este dia no puede ser seleccionado");
        return;
      }else{
        cantidad=1;
        const boton = document.getElementById(diaSeleccionado);
    boton.style.backgroundColor = "aqua";


        //alert(`Día seleccionado: `+diaSeleccionado);
        const url = 'traerhorasparacitas.php?dia='+diaSeleccionado+'&mes='+mesActual;
        fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json();
           } else { 
            throw new Error('Error en la solicitud'); 
          }
        })
        .then(data => {
          document.getElementById("resultadoagenda").innerHTML = "<h1>Selecciona el horario de tu cita</h1><br>"+data.mensaje+"<br><br><br><button onclick='finalizarcita();' class='botonesmodalesiniciales' style='background-color:aqua;color:black;' type='button'>Reservar Cita</button>";
        })
        .catch(error => {
          console.error('Error:', error);
        });



      }
}

function  finalizarcita(){
var serviciofinal=document.getElementById("nombreserviciofinal").innerHTML;
var total=document.getElementById('total').textContent;
var hora=document.getElementById("horafinal").value;
if(hora==""){
 alert("Debe seleccionar la hora"); 
 return;
}
var subserviciosescogidos="";
var checkbox = document.getElementsByName('personalizarbox');
    for (var i = 0; i < checkbox.length; i++) {
      if (checkbox[i].checked) {
        var posicion="subservicionombrefinal"+i;
        var subservicio=document.getElementById(posicion).innerHTML;
        subserviciosescogidos+=subservicio+",";
      }
    }


//alert(subserviciosescogidos);
const confirmacion = confirm("¿Desea continuar?");
if (confirmacion) {
  //clienteaseleccionar
  //alert(tipo);
    if (tipo == "010101111111001010101111011110111101111111010001010101010101010") {
    document.getElementById("clienteelegido").value=iduser;
    }else{
    var usuario=document.getElementById("clienteelegido").value;
    if(usuario==""){
      if(citapuesta=="SI"){
        //alert(idclientec);
        document.getElementById("clienteelegido").value=idclientec;
      }else{
    alert("Debe seleccionar un cliente");
    return;
      }//else
    }//usuario
  }

  //
  document.getElementById("Personalizarmodeal").style.display = "none";
  document.getElementById("pagomodeal").style.display = "block";
  document.getElementById("Meselegido").value=mesfinal;
  document.getElementById("ANOelegido").value=ANOfinal;

document.getElementById("servicioelegido").value=serviciofinal;
 document.getElementById("Diaelegido").value=diafinal;
 document.getElementById("Horarioelegido").value=hora;
 document.getElementById("subservicioelegido").value=subserviciosescogidos;
 document.getElementById("Totalelegido").value=total;

} else {
  //alert("Cancelado. La operación se ha detenido.");
}

}
</script>
</div>
  <!-- seleccionaserviciocitaadmin/SECRETARIA Modal -->
  <div id="nuevacitaprimero" class="modal">
    <div class="modal-content" style="width: 700px;">
      <span class="close" onclick="cerrarpresionamodal('nuevacitaprimero');">&times;</span>
      <h2>SERVICIOS</h2>
      <h5>Selecciona un servicio</h5>
      <?php include 'PONERSERVICIOSPARANUEVACITAADMINSECRE.php';
      ?>

       <!-- <a href="#" type="button"  style=" background-color:  rgb(0, 255, 225);color:black;" class="botonesmodalesiniciales2" 
          onclick="presionamodal('Personalizarmodeal',ID);">SIGUIENTE</a>
       -->

    </div>
  </div>
  <!-- servicios seccion -->
  <section class="acerca_seccion layout_padding" id="SERVICIOSAC" style="width: 100%; height: 100%; SERVICIOSACr">
    <div class="container" id="SERVICIOSACr" style="width: 100%; height: 600px;display: none;overflow: auto;">

      <div class="detail-box">
        <main class="main">

          <h1>SERVICIOS</h1>
          <BR><BR>
          <table style="width: 100%;">
            <tr>
              <td>
                <button id="openModal3" onclick="agregarservicios();" style="
background-color: #3498db;
color: #fff;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 16px;
cursor: pointer;
transition: background-color 0.3s ease;
">AGREGAR</button>
              </td>
              <td colspan="7">
                <label for="myInput">Ingrese un servicio:</label>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="INGRESE NOMBRE DEL SERVICIO AQUI">
              </td>
            </tr>
          </table>

            <?php
            include 'serviciosexistentes.php';
            ?>







          




          <script>
            function myFunction() {
              var input, filter, table, tr, td0, td6, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td0 = tr[i].getElementsByTagName("td")[0]; // Columna de id
                td6 = tr[i].getElementsByTagName("td")[1]; // Columna de nombre

                if (td0 || td6) { // Verifica si se encontró la columna de Nombre o C.P
                  txtValue = (td0 ? td0.textContent || td0.innerText : "") + " " + (td6 ? td6.textContent || td6.innerText : "");
                  // Combina el texto de Nombre y C.P

                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
          </script>
      </div>
    </div>
  </section>
  <!-- clientes seccion -->
  <section class="acerca_seccion layout_padding" id="UsuariosAC" style="width: 100%; height: 100%; overflow: auto;">
    <div class="container" id="UsuariosACr" style="width: 100%; height:600px;display: none;overflow: auto;">

      <div class="detail-box">
        <main class="main">

          <h1>PACIENTES</h1>
          <BR><BR>
          <table style="width: 100%;">
            <tr>
              <td>
                <button id="openModal3" onclick="nuevocliente();" style="
background-color: #3498db;
color: #fff;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 16px;
cursor: pointer;
transition: background-color 0.3s ease;
">AGREGAR</button>
              </td>
              <td colspan="15">
                <input style="width: 100%;" type="text" id="myInputclientes" onkeyup="funciondeclientes()"
                  placeholder="INGRESA NOMBRE DEL CLIENTE">
              </td>
            </tr>
          </table>

          <table id="myTablecliente" style="width: 100%;">

            <tr class="header">
              <th></th>
              <th>Nombre del Cliente</th>
              <th></th>
              <th></th>
              <th></th>
              <th>Sexo</th>
              
              <th>Telefono</th>
              <th>Celular</th>
              <th>Correo</th>
              <th></th>
              <th colspan="2">Opciones</th>
            </tr>

            <?php
            include 'usuariosexistentes.php';
            ?>

          </table>




          <script>
            function funciondeclientes() {
              var input, filter, table, tr, td0, td6, i, txtValue;
              input = document.getElementById("myInputclientes");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTablecliente");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td0 = tr[i].getElementsByTagName("td")[0]; // Columna de id
                td6 = tr[i].getElementsByTagName("td")[1]; // Columna de nombre

                if (td0 || td6) { // Verifica si se encontró la columna de Nombre o C.P
                  txtValue = (td0 ? td0.textContent || td0.innerText : "") + " " + (td6 ? td6.textContent || td6.innerText : "");
                  // Combina el texto de Nombre y C.P

                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
          </script>
      </div>
    </div>
  </section>
  <!-- empleados seccion -->
  <section class="acerca_seccion layout_padding" id="EmpleadosAC" style="width: 100%; height: 100%; overflow: auto;">
    <div class="container" id="EmpleadosACr" style="width: 100%; height:600px;display: none;overflow: auto;">
      <div class="detail-box">
        <main class="main">
          <h1>TRABAJADORES</h1>
          <BR><BR>
          <table style="width: 100%;">
            <tr>
              <td>
                <button id="openModal3" onclick="agregarnuevoempleado();" style="
background-color: #3498db;
color: #fff;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 16px;
cursor: pointer;
transition: background-color 0.3s ease;
">AGREGAR</button>
              </td>
              <td colspan="15">
                <input style="width: 100%;" type="text" id="myInputempleados" onkeyup="funciondeempleados()"
                  placeholder="INGRESA NOMBRE DEL TRABAJADOR">
              </td>
            </tr>
          </table>

          <table id="myTableempleado" style="width: 100%;">

            <tr class="header">
              <th></th>
              <th></th>
              <th>Nombre del Trabajador</th>
              <th>Apellido Materno</th>
              <th>Apellido Paterno</th>
              <th>Sexo</th>
              
              <th>Telefono</th>
              <th>Celular</th>
              <th>Correo</th>
              <th>pass</th>

              <th colspan="2">Opciones</th>
            </tr>

            <?php
            include 'empleadosexistentes.php';
            ?>

          </table>




          <script>
            function eliminarempleadocompleto(empleado){
           
            const url = 'borrarempleadodefi.php?empleado='+empleado+'&urlacrgar='+urlpagina;
            fetch(url)
            .then(response => {
          if (response.status === 200) {
            return response.json();
          } else {
            throw new Error('Error en la solicitud');
          }
        })
        .then(data => {
          //urlparaactualizar
          document.getElementById("urlparaactualizar").value=urlpagina;
          document.getElementById("exitomodeal").style.display = "block";
        })
        .catch(error => {
          console.error('Error:', error);
        });



            }
           
            function agregarnuevoempleado() {
              //alert("funciono");
              document.getElementById("urlpararegistrarempleado").value = urlpagina;
              document.getElementById("REGISTRARnuevoempleadomodeal").style.display = "block";

            }
            function funciondeempleados() {
              var input, filter, table, tr, td0, td6, i, txtValue;
              input = document.getElementById("myInputempleados");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTableempleado");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td0 = tr[i].getElementsByTagName("td")[2]; // Columna de id
                td6 = tr[i].getElementsByTagName("td")[3]; // Columna de nombre

                if (td0 || td6) { // Verifica si se encontró la columna de Nombre o C.P
                  txtValue = (td0 ? td0.textContent || td0.innerText : "") + " " + (td6 ? td6.textContent || td6.innerText : "");
                  // Combina el texto de Nombre y C.P

                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
          </script>
      </div>
    </div>
  </section>
  <!-- CITAS seccion -->
  <section class="acerca_seccion layout_padding" id="CITASAC" style="width: 100%; height: 100%; overflow: auto;">
    <div class="container" id="CITASACr" style="display: none;height:600px;overflow: auto;">

      <div class="detail-box">
        <main class="main">

          <h1>CITAS MENSUALES</h1>
          <BR><BR>
          <table  style="width: 100%;">
          <tr>
            <th>
            </th>
            <th>
            </th>
          </tr>
            <tr>
            <td>
            <button id="openModal3" onclick="reportecitas();" style="
background-color: brown;
color: beige;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 20px;
cursor: pointer;
transition: background-color 0.3s ease;
">REPORTE DE CITAS</button>  
      <button id="openModal3" onclick="reportedepagos();" style="
background-color: brown;
color: beige;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 20px;
cursor: pointer;
transition: background-color 0.3s ease;
">REPORTE DE PAGOS</button>   
                <button id="openModal3" onclick="abriragendamensual();" style="
background-color: brown;
color: beige;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 20px;
cursor: pointer;
transition: background-color 0.3s ease;
">AGENDA MENSUAL</button>   
 <br> <br>  <br>  
 <h4 style="color:Red">Buscar paciente</h4>
 <label style="color:black;">Ingrese el nombre del paciente</label>            
               <input type="text" id="citainput" class="ancho-input" onkeyup="buscarcita()" placeholder="INGRESA NOMBRE DEL CLIENTE">
              </td>
            </tr>
          </table>

          <table id="tablacitas" style="width: 100%;">

            <tr class="header">
            <th></th>
            <th></th>
            <th>Nombre Cliente</th>
            <th>Día</th>
            <th>Mes</th>
            <th>Año</th>
            <th>Horario</th>
            <th></th>
            <th>Servicio Nombre</th>
            <th>Sub Servicio Nombres</th>
            <th></th>
            <th>Estatus Cita</th>
              <th>Estatus Pago</th>
              <th>Monto</th>
              <th>Factura</th>
                <th colspan="5">Opciones</th>
            </tr>

            <?php
            include 'citasexistentes.php';
            ?>
          </table>




          <script>
            function cancelarfactura(idagenda) {
              //alert(idagenda);

              const url = 'ponerenprocesodefactura2.php?idagenda='+idagenda;
             fetch(url)
             .then(response => {
               if (response.status === 200) { return response.json();
               } else {
                 throw new Error('Error en la solicitud');
                 }
               }
               )
               .then(data => {
                //#b97a7aalert(urlpagina);
                document.getElementById("urlparaactualizar").value = urlpagina;
             document.getElementById("exitomodeal").style.display = "block";
              })
             .catch(error => {
              console.error('Error:', error);
              });



            }

            function subirfactura(idagenda) {             
            document.getElementById("idagendafactura").value = idagenda;
            document.getElementById("urlparallevarfactura").value = urlpagina;
            document.getElementById("subirfactura").style.display = "block";

            }

            function ponerenproceso(idagenda){
            //alert(idagenda);

              const url = 'ponerenprocesodefactura.php?idagenda='+idagenda;
             fetch(url)
             .then(response => {
               if (response.status === 200) { return response.json();
               } else {
                 throw new Error('Error en la solicitud');
                 }
               }
               )
               .then(data => {
                //#b97a7aalert(urlpagina);
                document.getElementById("urlparaactualizar").value = urlpagina;
             document.getElementById("exitomodeal").style.display = "block";
              })
             .catch(error => {
              console.error('Error:', error);
              });



            }
            function reportecitas2(){
              //alert("Reporte de citas");
              const url = 'reportedecitas2.php';
              window.open(url, '_blank');
            }

            function reportedepagos2(){
              const url = 'reportedepagos2.php';
              window.open(url, '_blank');
            }



            function reportecitas(){
              //alert("Reporte de citas");
              const url = 'reportedecitas.php';
              window.open(url, '_blank');
            }

            function reportedepagos(){
              const url = 'reportedepagos.php';
              window.open(url, '_blank');
            }

          function borrarresultado(idagenda) {
            if(rol == "SECRETARIA") {alert("Lo sentimos no tienes autorizacion para eliminar resultados");return;}

              const confirmacion = confirm("¿Desea eliminar el resultado?");
            if (confirmacion) {
            const url = 'marcarcomopagado.php?idagenda='+idagenda;
             fetch(url)
             .then(response => {
               if (response.status === 200) { return response.json();
               } else {
                 throw new Error('Error en la solicitud');
                 }
               }
               )
               .then(data => {
                //#b97a7aalert(urlpagina);
                document.getElementById("urlparaactualizar").value = urlpagina;
             document.getElementById("exitomodeal").style.display = "block";
              })
             .catch(error => {
              console.error('Error:', error);
              });
            }else{
              return;
            }
            }



            function Reflejapago(idagenda) {
              const confirmacion = confirm("¿Desea marca esta cita como pagada?");
            if (confirmacion) {
            const url = 'marcarcomopagado.php?idagenda='+idagenda;
             fetch(url)
             .then(response => {
               if (response.status === 200) { return response.json();
               } else {
                 throw new Error('Error en la solicitud');
                 }
               }
               )
               .then(data => {
                //#b97a7aalert(urlpagina);
                document.getElementById("urlparaactualizar").value = urlpagina;
             document.getElementById("exitomodeal").style.display = "block";
              })
             .catch(error => {
              console.error('Error:', error);
              });
            }else{
              return;
            }
            }


            function verticketdepago(idagenda){
              //alert(idagenda);
              const url = 'ticket.php?idagenda='+idagenda;
              window.open(url, '_blank');
            }

            var citapuesta="";
            var idagendac;
            var idclientec;
            function abrirmodificacioncita(idservicio,idAgenda,idcliente){
            citapuesta="SI";
            idagendac=idAgenda;
            idclientec=idcliente;
            //alert(idservicio+"\n"+idAgenda+"\n"+idcliente);
            openModal("Personalizarmodeal", idservicio);
            }

            function eliminarcitaompleto(id) {

              const confirmacion = confirm("¿Desea cancelar la cita?");
            if (confirmacion) {
             //alert(id);
             //return;
             const url = 'borrarcitadecliente.php?idagendab='+id;
             fetch(url)
             .then(response => {
               if (response.status === 200) { return response.json();
               } else {
                 throw new Error('Error en la solicitud');
                 }
               }
               )
               .then(data => {
                //#b97a7aalert(urlpagina);
                document.getElementById("urlparaactualizar").value = urlpagina;
             document.getElementById("exitomodeal").style.display = "block";
              })
             .catch(error => {
              console.error('Error:', error);
              });

                }else{
                 //alert("Debe seleccionar un cliente");
                 return;
                }//else 
        
            }


            function ponerbotonnuevacita(){
              document.getElementById("nuevacitaprimero").style.display = "none";
              var opcion=document.getElementById("servicioSelectnuevacita").value;
              presionamodal('Personalizarmodeal',opcion);
            }
            function agregarnuevacita(cliente){
              document.getElementById("clienteelegido").value=cliente;
              document.getElementById("nuevacitaprimero").style.display = "block";
            }

            function abriragendamensual(){
              document.getElementById("agendamensual").style.display = "block";
            }


            function buscarcita() {
              var input, filter, table, tr, td0, td6, i, txtValue;
              input = document.getElementById("citainput");
              filter = input.value.toUpperCase();
              table = document.getElementById("tablacitas");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td0 = tr[i].getElementsByTagName("td")[2]; // Columna de nombre
                td6 = tr[i].getElementsByTagName("td")[3]; // Columna de dia

                if (td0 || td6) { // Verifica si se encontró la columna de Nombre o C.P
                  txtValue = (td0 ? td0.textContent || td0.innerText : "") 
                  + " " + (td6 ? td6.textContent || td6.innerText : "")
                  
                  ;
                  // Combina el texto de Nombre y C.P

                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
          </script>
      </div>
    </div>
  </section>
   <!-- CITAS seccion -->
   <section class="acerca_seccion layout_padding" id="CITASACt" style="width: 100%; height: 100%; overflow: auto;">
    <div class="container" id="CITASACrt" style="display: none;height:600px;overflow: auto;">

      <div class="detail-box">
        <main class="main">

          <h1>Historial CITAS</h1>
          <BR><BR>
          <table  style="width: 100%;">
          <tr>
            <th>
            </th>
            <th>
            </th>
          </tr>
            <tr>
            <td>
            <button id="openModal3" onclick="reportecitas2();" style="
background-color: brown;
color: beige;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 20px;
cursor: pointer;
transition: background-color 0.3s ease;
">REPORTE DE CITAS</button>  

      <button id="openModal3" onclick="reportedepagos2();" style="
background-color: brown;
color: beige;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 20px;
cursor: pointer;
transition: background-color 0.3s ease;
">REPORTE DE PAGOS</button>
                <button id="openModal3" onclick="abriragendamensual();" style="
background-color: brown;
color: beige;
border: none;
padding: 10px 20px;
border-radius: 5px;
font-size: 20px;
cursor: pointer;
transition: background-color 0.3s ease;
">AGENDA MENSUAL</button>   
               <br> <br>
               <input type="text" id="citainputGLOBAL" class="ancho-input" onkeyup="buscarcitaGLOBAL()" placeholder="INGRESA NOMBRE DEL CLIENTE">
              </td>
            </tr>
          </table>
          <br> <br>
          <table id="tablacitasGLOBAL" style="width: 100%;">

            <tr class="header">
            <th>No. cita</th>
            <th></th>
            <th>Nombre Cliente</th>
            <th>Día</th>
            <th>Mes</th>
            <th>Año</th>
            <th>Horario</th>
            <th></th>
            <th>Servicio Nombre</th>
            <th>Sub Servicio Nombre</th>
            <th></th>
            <th>Estatus cita</th>
              <th>Estatus Pago</th>
              <th>Monto</th>
                <!--<th colspan="2">Opciones</th>-->
            </tr>

            <?php
            include 'citasexistentestotal.php';
            ?>
          </table>




          <script>


            function ponerbotonnuevacita(){
              document.getElementById("nuevacitaprimero").style.display = "none";
              var opcion=document.getElementById("servicioSelectnuevacita").value;
              presionamodal('Personalizarmodeal',opcion);
            }
            function agregarnuevacita(cliente){
              document.getElementById("clienteelegido").value=cliente;
              document.getElementById("nuevacitaprimero").style.display = "block";
            }

            function abriragendamensual(){
              document.getElementById("agendamensual").style.display = "block";
            }


            function buscarcitaGLOBAL() {
              var input, filter, table, tr, td0, td6, i, txtValue;
              input = document.getElementById("citainputGLOBAL");
              filter = input.value.toUpperCase();
              table = document.getElementById("tablacitasGLOBAL");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td0 = tr[i].getElementsByTagName("td")[2]; // Columna de nombre
                td6 = tr[i].getElementsByTagName("td")[3]; // Columna de dia

                if (td0 || td6) { // Verifica si se encontró la columna de Nombre o C.P
                  txtValue = (td0 ? td0.textContent || td0.innerText : "") 
                  + " " + (td6 ? td6.textContent || td6.innerText : "")
                  
                  ;
                  // Combina el texto de Nombre y C.P

                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
          </script>
      </div>
    </div>
  </section>
<!--SERVICIOS PARA CLIENTE-->
<div class="container" id="SERVICIOSACrCLIENTE" style="width: 100%;height:500px;overflow:auto;display: none;">
<div class="detail-box">
  <main class="main">
<br><br>
    <h1>NUESTROS SERVICIOS</h1>
    
    <table style="width: 100%;height: 100px;">
      <tr>
        <td>

        </td>
        <td>
          <input type="text" id="myInputCLEITE" onkeyup="myFunction()" placeholder="INGRESA NOMBRE DEL SERVICIO" style="width: 400px;">
        </td>
      </tr>
    </table>

    <table id="myTableCLIENTE" style="width: 100%;">

      <tr class="header">
        <th>Nombre del Servicio</th>
        <th>Indicaciones</th>
        <th>Descripcion</th>
      </tr>

      <?php
      include 'serviciosexistentesexternosincio.php';
      ?>


        </table>

    <script>
      function myFunction() {
        var input, filter, table, tr, td0, td6, i, txtValue;
        input = document.getElementById("myInputCLEITE");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTableCLIENTE");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td0 = tr[i].getElementsByTagName("td")[0]; // Columna de id
          td6 = tr[i].getElementsByTagName("td")[1]; // Columna de nombre

          if (td0 || td6) { // Verifica si se encontró la columna de Nombre o C.P
            txtValue = (td0 ? td0.textContent || td0.innerText : "") + " " + (td6 ? td6.textContent || td6.innerText : "");
            // Combina el texto de Nombre y C.P

            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>
</div>
</div>  
<br><br><br>


  </main>
<br><br><br><br>

</body>


<!--Función para abrir un modal-->
<script>



  function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
  }

  // Función para cerrar un modal
  function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
  }

  // Agrega manejadores de eventos para los botones "Indicaciones 1" y "Indicaciones 2"
  document.getElementById("openModal1").addEventListener("click", function () {
    openModal("myModal1");
  });

  document.getElementById("openModal2").addEventListener("click", function () {
    openModal("myModal2");
  });
  document.getElementById("openModal3").addEventListener("click", function () {
    openModal("myModal3");
  });

  // Agrega manejadores de eventos para los botones de cierre (la "X") de los modales
  document.getElementById("closeModal1").addEventListener("click", function () {
    closeModal("myModal1");
  });

  document.getElementById("closeModal2").addEventListener("click", function () {
    closeModal("myModal2");
  });
  document.getElementById("closeModal3").addEventListener("click", function () {
    closeModal("myModal3");
  });

  // Cierra los modales si se hace clic fuera de ellos
  window.addEventListener("click", function (event) {
    if (event.target === document.getElementById("myModal1")) {
      closeModal("myModal1");
    }
    if (event.target === document.getElementById("myModal2")) {
      closeModal("myModal2");
    }
    if (event.target === document.getElementById("myModal3")) {
      closeModal("myModal3");
    }
  });
</script>
</main>


</div>
</div>
</section>




<!-- // Función para obtener los parámetros de la URL-->
<script>

function abrirmenuprincipaladmin(abrir){
//alert(abrir);
var seccion = document.getElementById("menuadministradores");
seccion.style.display = "none";//menuadministradores
var seccion = document.getElementById("SERVICIOSACr");
seccion.style.display = "none";//SERVICIOS
var seccion = document.getElementById("CITASACr");
seccion.style.display = "none";//CITASAC
var seccion = document.getElementById("CITASACrt");
seccion.style.display = "none";//CITASACt-->globales
var seccion = document.getElementById("UsuariosACr");
seccion.style.display = "none";//UsuariosACr
var seccion = document.getElementById("EmpleadosACr");
seccion.style.display = "none";//EmpleadosACr



if(abrir=="menu"){
 var seccion = document.getElementById("menuadministradores");
seccion.style.display = "block";//menuadministradores
}

if (rol == "SECRETARIA") {
///btn_SERVICIOSACr,btn_UsuariosACr,btn_EmpleadosACr,btn_CITASAC,btn_CITASACt
var boton = document.getElementById("btn_EmpleadosACr");boton.disabled = true;
var botonesModificar = document.getElementsByName("btn_modificarservicio");for (var i = 0; i < botonesModificar.length; i++) {botonesModificar[i].disabled = true;}
var botonesEliminar = document.getElementsByName("btn_eliminarservicio");for (var i = 0; i < botonesEliminar.length; i++) {botonesEliminar[i].disabled = true;}
//btn_resultados
}//secretaria


if(abrir=="SERVICIOS"){
var seccion = document.getElementById("SERVICIOSACr");
seccion.style.display = "block";//SERVICIOS
}
if(abrir=="CITASAC"){
var seccion = document.getElementById("CITASACr");
seccion.style.display = "block";//CITASAC
}
if(abrir=="CITASACt"){
var seccion = document.getElementById("CITASACrt");
seccion.style.display = "block";//CITASACt-->globales
}
if(abrir=="UsuariosACr"){
var seccion = document.getElementById("UsuariosACr");
seccion.style.display = "block";//UsuariosACr
}
if(abrir=="EmpleadosACr"){
var seccion = document.getElementById("EmpleadosACr");
seccion.style.display = "block";//EmpleadosACr
}         
}

function resultadosDOS(idagenda) {
 
if(rol == "SECRETARIA") {return;}

//Resultadosparasubir
document.getElementById("Resultadosparasubir").style.display = "block";
//idagenda
document.getElementById("idagenda").value=idagenda;
document.getElementById("urlparallevarresultado").value=urlpagina;

}




function resultados(idagenda) {
  //alert(idagenda);

  //estatuspago
var estatus=document.getElementById("estatuspago"+idagenda).innerHTML;
if(estatus=="Pendiente"){alert("El pago debe estar completado");return;}
if(rol == "SECRETARIA") {return;}
//Resultadosparasubir
document.getElementById("Resultadosparasubir").style.display = "block";
//idagenda
document.getElementById("idagenda").value=idagenda;
document.getElementById("urlparallevarresultado").value=urlpagina;

}

  function pagarservicios(metodo) {
var idparallevar=document.getElementById("clienteelegido").value;
var mesparallevar=document.getElementById("Meselegido").value;
var anoparallevar=document.getElementById("ANOelegido").value;
var servicioparallevar=document.getElementById("servicioelegido").value;
var diaparallevar= document.getElementById("Diaelegido").value;
var horarallevar=document.getElementById("Horarioelegido").value;
var subserviciosparallevar=document.getElementById("subservicioelegido").value;
var totalparallevar=document.getElementById("Totalelegido").value;
var url = 'insertarcita.php?idparallevar='+idparallevar+'&mesparallevar='+mesparallevar
+'&anoparallevar='+anoparallevar+'&servicioparallevar='+servicioparallevar
+'&diaparallevar='+diaparallevar+'&horarallevar='+horarallevar
+'&subserviciosparallevar='+subserviciosparallevar
+'&totalparallevar='+totalparallevar;
if(citapuesta=="SI"){
 // alert(citapuesta);
  url = 'modificarcitadecliente.php?idagendac='+idagendac+'&idparallevar='+idparallevar+'&mesparallevar='+mesparallevar
+'&anoparallevar='+anoparallevar+'&servicioparallevar='+servicioparallevar
+'&diaparallevar='+diaparallevar+'&horarallevar='+horarallevar
+'&subserviciosparallevar='+subserviciosparallevar
+'&totalparallevar='+totalparallevar;
}
var confirmacion = confirm("¿Estás seguro de que deseas pagar en "+metodo+" ?");
    if (confirmacion) {
      if(metodo=="ventanilla"){
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          document.getElementById("pagomodeal").style.display = "none";
          document.getElementById("urlparaactualizar").value = urlpagina;
          document.getElementById("exitomodeal").style.display = "block";
        })
        .catch(error => {
          console.error('Error:', error);
        });
}
if(metodo=="mercadopago"){
//alert("mercadopago");
var confirmacion = confirm("Le notificamos que una vez confirmado este mensaje su cita quedara agendada, si hubiera un problema con el pago usted podra pagar en ventanilla");
    if (confirmacion) {   
url = 'mercado_pago.php?idparallevar='+idparallevar+'&mesparallevar='+mesparallevar
+'&anoparallevar='+anoparallevar+'&servicioparallevar='+servicioparallevar
+'&diaparallevar='+diaparallevar+'&horarallevar='+horarallevar
+'&subserviciosparallevar='+subserviciosparallevar
+'&totalparallevar='+totalparallevar;
window.open(url, '_blank'); // Abre la URL en una nueva ventana o pestaña
    }else{
return;      
    }
}//mercadolibre

    }else{
return;
    }


  }//funcion



  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  // Obtener los parámetros de la URL
  var iduser = getParameterByName('idCliente');
  var nombre = getParameterByName('nombre');
  var correo = getParameterByName('correo');
  var contrasena = getParameterByName('contrasena');
  var apellido1 = getParameterByName('apellido1');
  var apellido2 = getParameterByName('apellido2');
  var sexo = getParameterByName('sexo');
  var calle = getParameterByName('calle');
  var no_exterior = getParameterByName('Exterior');
  var no_interior = getParameterByName('noInterior');
  var colonia = getParameterByName('colonia');
  var codigo_postal = getParameterByName('codigoPostal');
  var municipio = getParameterByName('municipio');
  var estado = getParameterByName('estado');
  var telefono = getParameterByName('telefono');
  var celular = getParameterByName('celular');
  var tipo = getParameterByName('tipo');
  var rol = getParameterByName('rol');
  // Actualizar elementos en la página con los valores
  document.getElementById("usuario").textContent = nombre;
  document.getElementById("usuariot").value = correo;
  document.getElementById("passwordt").value = contrasena;
  document.getElementById("nombre").value = nombre;
  document.getElementById("correo").value = correo;
  document.getElementById("contrasena").value = contrasena;
  document.getElementById("apellido1").value = apellido1;
  document.getElementById("apellido2").value = apellido2;
  document.getElementById("sexo").value = sexo;
  document.getElementById("calle").value = calle;
  document.getElementById("no_exterior").value = no_exterior;
  document.getElementById("no_interior").value = no_interior;
  document.getElementById("colonia").value = colonia;
  document.getElementById("codigo_postal").value = codigo_postal;
  document.getElementById("municipio").value = municipio;
  document.getElementById("estado").value = estado;
  document.getElementById("telefono").value = telefono;
  document.getElementById("celular").value = celular;
  document.getElementById("usuariot").disabled = true;
  document.getElementById("passwordt").disabled = true;
  document.getElementById("apellido1").disabled = true;
  document.getElementById("apellido2").disabled = true;
  document.getElementById("sexo").disabled = true;
  document.getElementById("calle").disabled = true;
  document.getElementById("no_exterior").disabled = true;
  document.getElementById("no_interior").disabled = true;
  document.getElementById("colonia").disabled = true;
  document.getElementById("codigo_postal").disabled = true;
  document.getElementById("municipio").disabled = true;
  document.getElementById("estado").disabled = true;
  document.getElementById("telefono").disabled = true;
  document.getElementById("celular").disabled = true;
  document.getElementById("nombre").disabled = true;
  document.getElementById("correo").disabled = true;
  document.getElementById("contrasena").disabled = true;
  //document.getElementById("btnregistrar").style.display = "none";
  //document.getElementById("btningresar").style.display = "none";
  //document.getElementById("btnregistronuevo").value = "Perfil";
  var urlpagina = window.location.href;
  ///history.pushState({}, '', 'iniciocorrecto.php');
  //alert(urlpagina);
  if (tipo == "010101111111001010101111011110111101111111010001010101010101010") {
    //alert("Bienvenido cliente");
    document.getElementById("pestañanuevocliente").innerHTML = "Usuario: C0000" + iduser;
    var pestañas =
      "<ul class='navbar-nav'>" +
      "<li class='nav-item active'><a class='nav-link'>inicio<span class='sr-only'>(current)</span></a></li>" +
      "<li class='nav-item'><a class='nav-link' href='#quienessomos'>Nosotros </a></li>" +
      "<li class='nav-item'><a class='nav-link' href='#SERVICIOSACrCLIENTE'>Servicios</a></li>" +
      "<li class='nav-item'><a class='nav-link' href='#CITASACrCLIENTEx'>Resultados</a></li>" +
      "<li class='nav-item'><a class='nav-link' href='#CITASACrCLIENTEx' >Citas</a></li>" +
      "</ul>";
      //document.getElementById("CITASACrCLIENTEx").style.display = "block";

    document.getElementById("item_menus").innerHTML = pestañas;
    document.getElementById("SERVICIOSACrCLIENTE").style.display = "block";
    //CITASACrCLIENTE
    //CITASACrCLIENTE

  }

  if (rol == "ADMINISTRADOR") {
   // document.getElementById("pestañanuevocliente").innerHTML = "Usuario: E0000" + iduser;
    var pestañas =
  "<ul class='navbar-nav'>" +
  "<li class='nav-item active'><a class='nav-link'>inicio<span class='sr-only'>(current)</span></a></li>" +
  "<li class='nav-item'><a class='nav-link' onclick=\"abrirmenuprincipaladmin('menu');\">Menu principal</a></li>" +
  "</ul>";
    document.getElementById("item_menus").innerHTML = pestañas;
  }

  if (rol == "SECRETARIA") {
    document.getElementById("pestañanuevocliente").innerHTML = "Usuario: E0000" + iduser;
    var pestañas =
  "<ul class='navbar-nav'>" +
  "<li class='nav-item active'><a class='nav-link'>inicio<span class='sr-only'>(current)</span></a></li>" +
  "<li class='nav-item'><a class='nav-link' onclick=\"abrirmenuprincipaladmin('menu');\">Menu principal</a></li>" +
  "</ul>";
    document.getElementById("item_menus").innerHTML = pestañas;
  }

  
  if (rol == "CONTADOR") {
    document.getElementById("pestañanuevocliente").innerHTML = "Usuario: E0000" + iduser;
    var pestañas =
  "<ul class='navbar-nav'>" +
  "<li class='nav-item active'><a class='nav-link'>inicio<span class='sr-only'>(current)</span></a></li>" +
  "<li class='nav-item'><a class='nav-link' onclick=\"abrirmenuprincipaladmin('menu');\">Menu principal</a></li>" +
  "</ul>";
    document.getElementById("item_menus").innerHTML = pestañas;
  }

  function eliminarclientecompleto(cliente) {
    var confirmacion = confirm("¿Estás seguro de que deseas eliminar a este cliente?");
    if (confirmacion) {
      const url = 'borrarcliente.php?cliente=' + cliente + '&urlparallevar=' + urlpagina;
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          document.getElementById("urlparaactualizar").value = urlpagina;
          document.getElementById("exitomodeal").style.display = "block";
        })
        .catch(error => {
          console.error('Error:', error);
        });
    } else {
      return;
    }
  }


  function nuevocliente() {
    document.getElementById("REGISTRARnuevomodeal").style.display = "block";
    document.getElementById("urlpararegistrarcliente").value = urlpagina;

  }

  function agregarservicios() {
    document.getElementById("anadirnuevoserviciosmodeal").style.display = "block";
    document.getElementById("urlparallevarservicios").value = urlpagina;
  }

  function eliminarserviciocompleto(servicio) {
    //alert("vamos a eliminar a este "+ servicio);

    var posicion = "nombreservicio" + servicio;
    var name = document.getElementById(posicion).innerHTML;
    if (confirm("¿Estás seguro de que deseas eliminar este servicio: " + name + " ? \n Esta acción no podrá deshacerse")) {
    } else {
      return;
    }
    const url = 'borrarserviciosysubservicios.php?servicio=' + servicio;
    fetch(url)
      .then(response => {
        if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
      })
      .then(data => {
        document.getElementById("urlparaactualizar").value = urlpagina;
        document.getElementById("exitomodeal").style.display = "block";
      })
      .catch(error => {
        console.error('Error:', error);
      });

  }
</script>



<!--CITAS PARA CLIENTE-->
<div class="container" id="CITASACrCLIENTEx" style="width: 100%;height:500px;overflow:auto;display:none;">
<div class="detail-box">
  <main class="main">
<br><br>
    <h1>CITAS Y RESULTADOS</h1>
    
    <table style="width: 100%;height: 100px;">
      <tr><td></td><td>
          <input type="text" id="myInputCLEITECITAS" onkeyup="myFunction()" placeholder="INGRESA NOMBRE DEL SERVICIO" style="width: 400px;">
        </td>  </tr>  </table>
<center>
    <table id="myTableCLIENTECITAS" style="width: 100%;">
    <tr class="header">
      <th>Id</th>
      <th>Dia</th>
      <th>Mes</th>
      <th>Año</th>
      <th>Horario</th>
    </tr>      
</table>
</center>      
  <div id="respuestacitas"></div>
       <script>
function solicitarfactura(idagenda){
//alert("Factura "+idagenda); 
//Facturasolicitudparasubir 
document.getElementById("Facturasolicitudparasubir").style.display = "block";
document.getElementById("idagendasfac").value=idagenda;
document.getElementById("urlparallevarsolfac").value=urlpagina;
}
if (tipo == "010101111111001010101111011110111101111111010001010101010101010") {
    document.getElementById("CITASACrCLIENTEx").style.display = "block";
  }
const url = 'CITASexistentesexternosincio.php?iduser=' + iduser;
fetch(url)
  .then(response => {
    if (response.status === 200) { 
      return response.json();
     } else { 
      throw new Error('Error en la solicitud'); 
    }
  })
  .then(data => {
    //alert(data.mensaje);
    document.getElementById("myTableCLIENTECITAS").innerHTML = '<table id="myTableCLIENTECITAS" style="width: 100%;"><tr class="header">' +
    '<th></th><th>Nombre Completo</th><th></th><th>Día</th><th>Mes</th><th>Año</th><th>Horario</th><th></th><th>Servicio Nombre</th><th>Subservicio Nombre</th><th></th><th>Estatus cita</th><th>Estatus Pago</th><th>Monto</th><th colspan="2">Opciones</th></tr>' +
    data.mensaje +
    '</table>';

  })
  .catch(error => {
    console.error('Error:', error);
  });
      </script>

    <script>
      function myFunction() {
        var input, filter, table, tr, td0, td6, i, txtValue;
        input = document.getElementById("myInputCLEITECITAS");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTableCLIENTECITAS");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td0 = tr[i].getElementsByTagName("td")[8]; // Columna de id
          td6 = tr[i].getElementsByTagName("td")[1]; // Columna de nombre

          if (td0 || td6) { // Verifica si se encontró la columna de Nombre o C.P
            txtValue = (td0 ? td0.textContent || td0.innerText : "") + " " + (td6 ? td6.textContent || td6.innerText : "");
            // Combina el texto de Nombre y C.P

            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>
</div>
</div>  

<br><br><br><br><br><br>




<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- Función para darle animacion a los servicios-->
<script type="text/javascript">
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 5,
    nav: true,
    navText: [],
    autoplay: true,
    responsive: {
      0: {
        items: 2
      },
      300: {
        items: 2
      },
      1000: {
        items: 10
      }
    }
  });
</script>
<!-- Función para mostrar contraseña-->
<script src="js/ingresar.js"></script>
<script>


  /////////////////////////////////////////////////////////////////////////////
  var totalpersonalizar = 0;
  function sumarpersonalizar() {
    document.getElementById("segundo").style.display = "block";
    var checkbox = document.getElementsByName('personalizarbox');
    var total = 0;
    for (var i = 0; i < checkbox.length; i++) {
      if (checkbox[i].checked) {
        total += parseFloat(checkbox[i].value);
      }
    }
    // Actualiza el valor total en tu página
    var formattedTotal = total.toFixed(2);
    document.getElementById('total').textContent = formattedTotal;
  }


  function eliminarDuplicados(array) {
    return array.filter((valor, indice, self) => self.indexOf(valor) === indice);
  }


  // Función para abrir un modal
  function openModal(modalId, servicio) {
    //alert("INGRESO a: \n"+modalId+" \n "+servicio);


    var usuario = document.getElementById("usuario").innerHTML;
    if (usuario == "Ingresa") {
      //alert("INGRESO a: \n"+modalId+" \n "+servicio);
      document.getElementById("inciosesion").style.display = "block";
      return;
    }

    //alert(modalId + "<--->" + servicio);

    if (modalId == "inciosesion") {
      document.getElementById("inciosesion").style.display = "block";
      return;
    }

    if (modalId == "REGISTRARmodeal") {
      document.getElementById("REGISTRARmodeal").style.display = "block";
      return;
    }

    if (modalId == "indicacionesmodeal") {
      const url = 'traerindicacionesservicios.php?servicio=' + servicio + '&modalId=' + modalId;
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          document.getElementById("Indicaciones").innerHTML = data.mensaje;
          document.getElementById(modalId).style.display = "block";
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }




    if (modalId == "Descripcionmodeal") {
      const url = 'traerindicacionesservicios.php?servicio=' + servicio + '&modalId=' + modalId;
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          document.getElementById("descripcion").innerHTML = data.mensaje;
          document.getElementById(modalId).style.display = "block";
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }


    if (modalId == "Personalizarmodeal") {
      //alert(servicio);
      const url = 'traerindicacionesservicios.php?servicio=' + servicio + '&modalId=' + modalId;
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          var servi=document.getElementById("nombreservicio"+servicio).innerHTML;
          document.getElementById("personalizar").innerHTML = "<h1 id='nombreserviciofinal'>"+servi+"</h1>"+data.mensaje;
          document.getElementById('total').textContent = 0;
          document.getElementById(modalId).style.display = "block";
          document.getElementById("segundo").style.display = "none";
          sumarpersonalizar();
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }



    var posicion = "nombreservicio" + servicio;
    var servicionombre = document.getElementById(posicion).innerHTML;
    var urlprueba = urlpagina;
    var tablaHTML = '<form action="modificaciondesubservicios.php" method="post">' +
      '<h4>Introduzca el Nombre del servicio</h4><input name="nombredelserviciodado" type="text" value="' +
      servicionombre + '"><br><center><table id="tablasubserviciosanadir" style="border-collapse: collapse; color: black; border: 1px solid black;"><center>' +
      '<tr>' +
      '<div style="display:none;" ><input name="urlfinal" type="text" value="' + urlprueba + '"/></div>' +
      '<div style="display:none;" ><input name="idserviciosfinal" type="text" value="' + servicio + '"/></div>' +
      '<h4>Introduzca las indicaciones</h4>' +
      '<textarea rows="2" cols="50" id="indicacionamodificarcabeza" name="indicacionamodificarcabeza"></textarea><br><h4>introduzca la descripcion</h4>' +
      '<textarea rows="2" cols="50" id="descripcionamodificarcabeza" name="descripcionamodificarcabeza"></textarea><br><h4>selecciona subservicio a modificar:</h4></tr></table><div id="subserviciosamodi"></div>';

    document.getElementById("serviciosamodificar").innerHTML = tablaHTML;



    if (modalId == "modificarserviciosmodeal") {
      var provicional = "indicacionesmodeal";
      const url = 'traerindicacionesservicios.php?servicio=' + servicio + '&modalId=' + provicional;
      fetch(url)
      fetch(url)
        .then(response => {
          if (response.status === 200) {
            return response.json();
          } else {
            throw new Error('Error en la solicitud');
          }
        })
        .then(data => {
          document.getElementById("indicacionamodificarcabeza").value = data.mensaje;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
    if (modalId == "modificarserviciosmodeal") {
      const url = 'traerindicacionesservicios.php?servicio=' + servicio + '&modalId=Descripcionmodeal';
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          document.getElementById("descripcionamodificarcabeza").value = data.mensaje;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }


    if (modalId == "modificarserviciosmodeal") {
      const url = 'traerindicacionesservicios.php?servicio=' + servicio + '&modalId=Descripcionmodeal';
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          document.getElementById("descripcionamodificarcabeza").value = data.mensaje;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    if (modalId == "modificarserviciosmodeal") {
      const url = 'traerindicacionesservicios.php?servicio=' + servicio + '&modalId=modificarserviciosmodeal';
      fetch(url)
        .then(response => {
          if (response.status === 200) { return response.json(); } else { throw new Error('Error en la solicitud'); }
        })
        .then(data => {
          tablaHTML2 =
            '<button class="botonesmodalesiniciales2" onclick="agregartd();" type="button" style="background-color: aqua; color: black; float: CENTER;">AGREGAR FILAS</button><br><br><br><br>' +
            '<button class="botonesmodalesiniciales" type="submit">Guardar</button></form>';
          document.getElementById("subserviciosamodi").innerHTML = data.mensaje + tablaHTML2;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    document.getElementById(modalId).style.display = "block";






    return;



  }

  function abrirmodificacion(servici) {
    // posicion="nombreservicio"+servici;
    //var servicio=document.getElementById(posicion).innerHTML;
    servici = servici;
    //alert(servici);
    //modificarserviciosmodeal
    openModal("modificarserviciosmodeal", servici);
  }

  function handleClick(servicio) {
    //alert(servicio);
    if (confirm("¿Estás seguro de que deseas eliminar este registro? \n Esta acción no podrá deshacerse")) {
    } else {
      return;
    }

    const url = 'eliminarsubsercicio.php?servicio=' + servicio;
    fetch(url)
      .then(response => {
        if (response.status === 200) {
          return response.json();
        } else {
          throw new Error('Error en la solicitud');
        }
      })
      .then(data => {
        if (data.eliminado === true) {
          //window.location.href = urlpagina;
          document.getElementById("modificarserviciosmodeal").style.display = "none";
          document.getElementById("urlparaactualizar").value = urlpagina;
          document.getElementById("exitomodeal").style.display = "block";


        } else {
          alert("No se pudo eliminar");
        }
      })
      .catch(error => {
        console.error('Error:', error);
      });


  }



  function agregartdparanuevosservicios() {
    var tabla = document.getElementById('nuevoserviciostable');
    var cantidadFilas = tabla.rows.length;
    cantidadFilas = cantidadFilas - 1;
    //   alert(cantidadFilas);

    var nuevaFila = document.createElement('tr');
    var celda0 = document.createElement('td');
    var celda1 = document.createElement('td');
    var celda2 = document.createElement('td');
    var celda3 = document.createElement('td');
    var celda4 = document.createElement('td');


    var input0 = document.createElement('input');
    input0.setAttribute('type', 'text');
    input0.setAttribute('name', 'subservicios' + cantidadFilas);
    input0.setAttribute('value', 'nuevo');
    var div = document.createElement('div');
    div.setAttribute('class', '');
    div.style.display = 'none';
    div.appendChild(input0);
    celda0.appendChild(div);
    var input1 = document.createElement('input');
    input1.setAttribute('type', 'text');
    input1.setAttribute('value', '');
    input1.setAttribute('name', 'subservicioparallevar' + cantidadFilas);
    celda1.appendChild(input1);
    var input2 = document.createElement('input');
    input2.setAttribute('type', 'text');
    input2.setAttribute('value', '');
    input2.setAttribute('name', 'precioparallevar' + cantidadFilas);
    celda2.appendChild(input2);
    var input3 = document.createElement('input');
    input3.setAttribute('type', 'text');
    input3.setAttribute('value', '');
    input3.setAttribute('name', 'descripciondelsubservicioparallevar' + cantidadFilas);
    celda3.appendChild(input3);
    var select = document.createElement('select');//class="botonesmodalesiniciales"
    select.setAttribute('class', 'botonesmodalesiniciales');
    select.style.width = '100px';
    select.setAttribute('name', 'basicoparallevar' + cantidadFilas);
    var optionSi = document.createElement('option');
    optionSi.setAttribute('value', 'SI');
    optionSi.textContent = 'SI';
    var optionNo = document.createElement('option');
    optionNo.setAttribute('value', 'NO');
    optionNo.textContent = 'NO';
    select.appendChild(optionNo);
    select.appendChild(optionSi);
    celda4.appendChild(select);
    // Paso 4: Establece el contenido de las celdas
    celda1.style.color = 'black';
    celda2.style.color = 'black';
    celda3.style.color = 'black';
    // Paso 5: Agrega las tres celdas a la fila
    nuevaFila.appendChild(celda0);
    nuevaFila.appendChild(celda1);
    nuevaFila.appendChild(celda2);
    nuevaFila.appendChild(celda3);
    nuevaFila.appendChild(celda4);
    // Paso 6: Agrega la nueva fila a la tabla
    tabla.appendChild(nuevaFila);
  }






  function agregartd() {
    var tabla = document.getElementById('tablasubserviciosanadirsubs');
    var cantidadFilas = tabla.rows.length;
    //alert(cantidadFilas);
    cantidadFilas = cantidadFilas - 1;
    var nuevaFila = document.createElement('tr');
    var celda0 = document.createElement('td');
    var celda1 = document.createElement('td');
    var celda2 = document.createElement('td');
    var celda3 = document.createElement('td');
    var celda4 = document.createElement('td');


    var input0 = document.createElement('input');
    input0.setAttribute('type', 'text');
    input0.setAttribute('name', 'subservicios' + cantidadFilas);
    input0.setAttribute('value', 'nuevo');
    var div = document.createElement('div');
    div.setAttribute('class', '');
    div.style.display = 'none';
    div.appendChild(input0);
    celda0.appendChild(div);
    var input1 = document.createElement('input');
    input1.setAttribute('type', 'text');
    input1.setAttribute('value', '');
    input1.setAttribute('name', 'asubservicios' + cantidadFilas);
    celda1.appendChild(input1);
    var input2 = document.createElement('input');
    input2.setAttribute('type', 'text');
    input2.setAttribute('value', '');
    input2.setAttribute('name', 'aprecios' + cantidadFilas);
    celda2.appendChild(input2);
    var input3 = document.createElement('input');
    input3.setAttribute('type', 'text');
    input3.setAttribute('value', '');
    input3.setAttribute('name', 'descripcion' + cantidadFilas);
    celda3.appendChild(input3);
    var select = document.createElement('select');
    select.setAttribute('name', 'basico' + cantidadFilas);
    var optionSi = document.createElement('option');
    optionSi.setAttribute('value', 'SI');
    optionSi.textContent = 'SI';
    var optionNo = document.createElement('option');
    optionNo.setAttribute('value', 'NO');
    optionNo.textContent = 'NO';
    select.appendChild(optionNo);
    select.appendChild(optionSi);
    celda4.appendChild(select);
    // Paso 4: Establece el contenido de las celdas
    celda1.style.color = 'black';
    celda2.style.color = 'black';
    celda3.style.color = 'black';
    // Paso 5: Agrega las tres celdas a la fila
    nuevaFila.appendChild(celda0);
    nuevaFila.appendChild(celda1);
    nuevaFila.appendChild(celda2);
    nuevaFila.appendChild(celda3);
    nuevaFila.appendChild(celda4);
    // Paso 6: Agrega la nueva fila a la tabla
    tabla.appendChild(nuevaFila);
  }

  // Función para cerrar un modal
  function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
  }

  function presionamodal(modal, servicio) {
    openModal(modal, servicio);
  }

  function cerrarpresionamodal(modal) {
    closeModal(modal);
  }
  // Cierra los modales si se hace clic fuera de ellos
  window.addEventListener("click", function (event) {
    if (event.target === document.getElementById("indicacionesmodeal")) {
      closeModal("indicacionesmodeal");
    }
    if (event.target === document.getElementById("Descripcionmodeal")) {
      closeModal("Descripcionmodeal");
    }

    if (event.target === document.getElementById("pagomodeal")) {
      closeModal("pagomodeal");
    }
    if (event.target === document.getElementById("Personalizarmodeal")) {
      closeModal("Personalizarmodeal");
    }
    if (event.target === document.getElementById("inciosesion")) {
      closeModal("inciosesion");
    }
  });


  function mostrarContrasena() {
    var contrasenaInput = document.getElementById("passwordt");
    var mostrarCheckbox = document.getElementById("mostrar");
    // Verificar si la casilla de verificación está marcada
    if (mostrarCheckbox.checked) {
      // Cambiar el tipo de entrada a "text" para mostrar la contraseña
      contrasenaInput.type = "text";
    } else {
      // Cambiar el tipo de entrada a "password" para ocultar la contraseña
      contrasenaInput.type = "password";
    }
  }

 
</script>


 <!-- acerca seccion -->
 <section class="acerca_seccion layout_padding" id="quienessomos">
    <div class="container">
     <div class="img-box">
        <img src="images/quienessomos.png" id="im1">
      </div>
      <div class="detail-box">
        <p style="color:black;">
        Enfocados en la innovación y en la aplicación de las nuevas tecnologías para mejorar su salud y estilo de vida, creemos firmemente que el cuidado de la salud, la prevención de enfermedades y el uso útil de la información genética, no debería estar limitada a unos pocos. Somos un laboratorio que ofrece pruebas clínicas, moleculares y genéticas para el cuidado de la salud, prevención de enfermedades y mejoras en el estilo de vida.
        </p>        
      </div>
    </div>

    <div class="container">
     <div class="img-box">
        <img src="images/mision.png" id="im1" width="200px" height="200px">
        MISION
      </div>
      <div class="detail-box">
        <p style="color:black;">
        Somos un equipo profesional en el área de la salud que fomenta la conciencia del cuidado de la salud, prevención de enfermedades y del uso útil de la información genética, generando beneficios tangibles a nuestros clientes, por medio de una alta calidad de servicio y de alta precisión en los resultados que entregamos. 
        </p>        
      </div>
    </div>

    <div class="container">
     <div class="img-box" style="color:black;">
        <img src="images/vision.png" id="im1" width="200px" height="200px">
        VISION
      </div>
      <div class="detail-box">
        <p style="color:black;">
        Convertirnos en la empresa mexicana líder que ofrezca pruebas para la prevención de la salud, reconocidos por nuestra alta calidad en servicios clínicos, genéticos y moleculares.         </p>        
      </div>
    </div>  

    <div class="container">
     <div class="img-box" style="color:black;">
        <img src="images/3.png" id="im1" width="200px" height="200px">
        Valores de la empresa.
      </div>
      <div class="detail-box">
        <p style="color:black;">
        <li style="color:black;">Confianza</li> <li style="color:black;" >Transparencia</li><li style="color:black;">Excelencia</li>       </p>        
      </div>
    </div>       
  </section>
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contacto
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                 477 647 6600
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <!--<img src="images/email.png" alt="">-->
              </div>
              <div class="detail-box">
                <h6>
                  <!--chuyiitoo.manrique@gmail-->
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#contenido">inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#quienessomos">NOSOTROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#CONTACTO">CONTACTO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#SERVICIOSACr">SERVICIOS</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  
</body>

</html>