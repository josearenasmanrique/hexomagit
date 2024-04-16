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