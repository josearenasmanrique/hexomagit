<!DOCTYPE html>
<html>

<head>
  <!-- basico -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Hexoma</title>


  <link rel="stylesheet" type="text/css" href="css/paginaindex.css" />
  <!-- contenido -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsivo css -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .contenido {
      height: 100vh;
      background-color: transparent;
      background-image: url('https://c.pxhere.com/photos/63/0d/analysis_biochemistry_biologist_biology_biotechnology_chemistry_clinic_clinical-1192476.jpg!d');
      background-size: 100% 100%;
      /* Tamaño al 100% del ancho y alto del contenedor */
      background-repeat: no-repeat;
      /* Evita que se repita la imagen */
      background-attachment: fixed;

      /*<img src="https://c.pxhere.com/photos/de/81/microscope_slide_research_close_up_test_experiment_micro_microscopy-984930.jpg!d" srcset="https://c.pxhere.com/photos/de/81/microscope_slide_research_close_up_test_experiment_micro_microscopy-984930.jpg!d" alt="soltar, ligero, tecnología, rueda, herramienta, rojo, lente, equipo, plato, máquina, micro, láser, investigación, de cerca, cámara digital, estudiar, Instrumento científico, laboratorio, descubrimiento, diapositiva, prueba, experimentar, microscopía, muestra, médico, científico, microscopio, análisis, biotecnología, instrumento óptico, escrutinio, analítico, Fotos gratis In PxHere"> */
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
                alt="Hexoma" style="width: 300px;height: 100px;"></span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#etiquetamenu"
            aria-controls="etiquetamenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="etiquetamenu">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">

              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#quienessomos">Nosotros </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#servicios">Servicios</a>
                </li>
              </ul>

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

    <!-- carrusel 1 -->
    <section class=" carrusel_uno position-relative" id="servicios">
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
                   'onclick="presionamodal(\'' . $var4 . '\', ' . $ids[$i] . ')">Comprar ahora</a>
                                
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
                   'onclick="presionamodal(\'' . $var4 . '\', ' . $ids[$i] . ')">Comprar ahora</a>
                            
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

        <a class="carrusel_anterior" href="#Indicadores" role="button" data-slide="prev">
          <span class="sr-only">regresar</span>
        </a>
        <a class="carrusel_siguiente" href="#Indicadores" role="button" data-slide="next">
          <span class="sr-only">siguiente</span>
        </a>

      </div>
    </section>

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
    <div class="modal-content" style="width: 400px;">
      <span class="close" onclick="cerrarpresionamodal('pagomodeal');">&times;</span>
      <center>
        <h2>Resumen</h2>

        <div id="PAGO" style="width: 400px;color:black;">

        </div>
      </center>
    </div>
  </div>


  <!-- PAGO Modal -->
  <div id="exitomodeal" class="modal">
    <div class="modal-content" style="width: 400px;">
      <span class="close" onclick="cerrarpresionamodal('pagomodeal');">&times;</span>
      <center>
        <h2>SE HA REGISTRO CON EXITO</h2>
        <input onclick="cerrarpresionamodal('exitomodeal');" class="botonesmodalesiniciales"
          style="background-color: aquamarine; color: black;" type="submit" value="ACEPTAR">
      </center>
    </div>
  </div>


  <!-- PAGO Modal -->
  <div id="REGISTRARmodeal" class="modal">
    <div class="modal-content" style="width: 900px;">
      <span class="close" onclick="cerrarpresionamodal('REGISTRARmodeal');">&times;</span>
      <center>
        <img src="images/user.png" alt="hexoma" width="40px" height="40px">
        <h2>NUEVO CLIENTE</h2>
        <form id="registroCliente" method="post">
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
              <td colspan="4"> <!-- Usa colspan para ocupar toda la fila -->
                <center>
                  <input class="botonesmodalesiniciales" style="background-color: aquamarine; color: black;"
                    type="submit" value="Registrar">
                </center>
              </td>
            </tr>
          </table>
        </form>


      </center>
    </div>
  </div>



  <!-- inciosesion Modal -->
  <div id="inciosesion" class="modal">
    <div class="modal-content" style="width: 500px;">
      <table>
        <tr>

          <td>
            <input onclick="cerrarpresionamodal('inciosesion');
    presionamodal('REGISTRARmodeal','INICIO');
    " class="botonesmodalesiniciales" style="background-color: aquamarine; color: black;" type="submit"
              value="Registrar">
          </td>
        </tr>
      </table>

      <span class="close" style="color: red;" onclick="cerrarpresionamodal('inciosesion');">&times;</span>
      <div style="background-color: antiquewhite; width: 450px; margin: 0 auto; text-align: center;">
        <br><br>
        <h2>INGRESAR</h2>
        <form action="iniciodesecioncliente.php" method="post">
          <label style="color: black;" for="usuario">Usuario: </label>
          <input type="email" id="usuariot" name="correo" required>
          <br><br>
          <label style="color: black;" for="contrasena">Contraseña:</label>
          <input type="password" id="passwordt" name="contrasena" placeholder="Contraseña">
          <input type="checkbox" id="mostrar" onchange="mostrarContrasena()"> Mostrar



          <br><br>

          <input class="botonesmodalesiniciales" style="background-color: aqua; color: black;" type="submit"
            value="Iniciar Sesión">

        </form>
      </div>
    </div>
  </div>


  <!-- personalizar Modal -->
  <div id="usuarioincorrectomodeal" class="modal">
    <div class="modal-content" style="width: 700px;">
      <span class="close" onclick="cerrarpresionamodal('usuarioincorrectomodeal');presionamodal('inciosesion');">&times;</span>
      <h2>USUARIO INCORRECTO O CONTRASEÑA INVALIDA</h2>
      
    </div>
  </div>



  <!-- personalizar Modal -->
  <div id="Personalizarmodeal" class="modal">
    <div class="modal-content" style="width: 700px;">
      <span class="close" onclick="cerrarpresionamodal('Personalizarmodeal');">&times;</span>
      <h2>Personalizar</h2>
      <div id="personalizar">
      </div>

      <p style="background-color:bisque;">Total: <span style="font-size: 30px;">$</span><span style="font-size: 30px;"
          id="total">0</span><span>/MXN</span></p>


    </div>
  </div>






  <!-- acerca seccion -->
  <section class="acerca_seccion layout_padding" id="quienessomos">
    <div class="container">
      <div class="cabecera_acercade ">

      </div>
      <div class="img-box">
        <img src="images/quienessomos.png" id="im1">
      </div>
      <div class="detail-box">
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
        <div class="d-flex justify-content-center">
          <a href="">
            Leer mas
          </a>
        </div>
      </div>
    </div>
  </section>



  

  <script>


    // Función para obtener los parámetros de la URL
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
    var nombre = getParameterByName('nombre');
    var correo = getParameterByName('correo');
    var contrasena = getParameterByName('contrasena');

    // Actualizar elementos en la página con los valores
    document.getElementById("usuario").textContent = nombre;
    //alert(contrasena);
    document.getElementById("usuariot").value = correo;
    document.getElementById("passwordt").value = contrasena;



  </script>


  <?php
  include("insercioncliente.php");
  ?>






  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
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

  <script src="js/ingresar.js"></script>
  <script>
    var totalpersonalizar = 0;
    function sumarpersonalizar(asumar) {
      var checkbox = document.getElementsByName('personalizarbox');
      var total = 0;
      for (var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked) {
          total += parseFloat(checkbox[i].value);
        }
      }

      // Actualiza el valor total en tu página
      document.getElementById('total').textContent = total;
    }


    function eliminarDuplicados(array) {
      return array.filter((valor, indice, self) => self.indexOf(valor) === indice);
    }


    // Función para abrir un modal
    function openModal(modalId, servicio) {
      var usuario = document.getElementById("usuario").innerHTML;
      if (usuario == "Ingresas") {
        //alert("INGRESO a: \n"+modalId+" \n "+servicio);
        document.getElementById("inciosesion").style.display = "block";
        return;
      }
      document.getElementById(modalId).style.display = "block";
      document.getElementById("Indicaciones").innerHTML = indicaciones[servicio - 1];
      document.getElementById("descripcion").innerHTML = descripcion[servicio - 1];

      //alert(subservicios[servicio-1]);
      var cadenaSubservicios = subservicios[servicio - 1];
      var cadenaPrecios = preciosubservicios[servicio - 1];
      var cadenadescripcion = Sub_servicio_nombre_descripcion[servicio - 1];
      var partesSubservicios = cadenaSubservicios.split(',');
      var partesSubserviciosSinDuplicados = eliminarDuplicados(partesSubservicios);
      var partesPrecios = cadenaPrecios.split(',');
      var partesdescripcion = cadenadescripcion.split(',');
      //var nombresespeciales = NombreEspecial[servicio];
      partesSubservicios = partesSubserviciosSinDuplicados;
      //alert(partesSubservicios.length);
      document.getElementById("personalizar").innerHTML = "";
      var tablaHTML = '<center><table style="border-collapse: collapse;color:black;border:1px solid black;"><tr><td>Selecciona</td><td><center>servicio</center></td><td>precio</td><td>descripcion</td>';
      // Verifica que ambas cadenas tengan la misma cantidad de elementos
      for (var i = 0; i < partesSubservicios.length; i++) {
        tablaHTML += "<tr>";
        tablaHTML += "<td><center><input name='personalizarbox' onclick='sumarpersonalizar(" +
          partesPrecios[i] + ");' type='checkbox' value='"
          + partesPrecios[i] + "'></center></td>";
        tablaHTML += "<td><center>" + partesSubservicios[i] + "</center></td>";
        tablaHTML += "<td>$" + partesPrecios[i] + "/MXN</td>";
        tablaHTML += "<td>" + partesdescripcion[i] + "</td>";
        tablaHTML += "</tr>";
      }
      tablaHTML += "</table></center>";
      // Muestra la tabla generada en el elemento con ID 'personalizar'
      document.getElementById('total').textContent = 0;
      document.getElementById("personalizar").innerHTML = tablaHTML;




      var opciones = incluye[servicio - 1];
      var partespago = opciones.split(',');
      var cantidad = partespago.length;
      //alert(cantidad);

      var opcionesHTML = "";
      for (let i = 0; i < partespago.length; i++) {
        opcionesHTML += partespago[i];
        if (i < partespago.length - 1) {
          opcionesHTML += "<br>";
        }
      }
      //nombreservicio
      document.getElementById("PAGO").innerHTML = "";
      var posicion = "nombreservicio" + servicio;
      var servicionombre = document.getElementById(posicion).innerHTML;
      //alert(servicionombre);

      var posicion = "precio" + servicio;
      var precio = document.getElementById(posicion).innerHTML;
      document.getElementById("PAGO").innerHTML = "<h1 style='color:red'>" + servicionombre + "</h1><h5>subservicios elegidos:</h5><br>" + opcionesHTML + "<br> <h1>$" + precio + "</h1>";
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


    presionamodal('usuarioincorrectomodeal');

  </script>

</body>

</html>