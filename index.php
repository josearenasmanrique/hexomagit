<!DOCTYPE html>
<html>

<head>
  <!-- basico -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Hexoma</title>

  <link rel="stylesheet" type="text/css" href="css/tabla.css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/bf66789927.css">

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
      

      <div class="fluidodecontenido">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

          <a class="navegacion" href="index.html">
            <span>
              <img
                src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMXZjZXc1dG5pZTVjMGd1bzQwMTR5cnd5bGVhYzg4MWlucWhxaXA3MyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/6Lf6EwGNiTITohCnfo/giphy.gif"
                alt="Hexoma" style="width: 250px;height: 80px;"></span>
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
                  <a class="nav-link" href="#SERVICIOSACr">Servicios</a>
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



    <!-- servicios carrucel-->
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
            include 'traerservicios.php';
        ?>
        </div>

        <BR><BR><BR>        <BR><BR><BR>

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
      
      <div id="PAGO"style="width: 400px;color:black;">

      </div>
      </center>
    </div>
  </div>


  <!-- exito Modal -->
  <div id="exitomodeal" class="modal">
    <div class="modal-content" style="width: 400px;">
      <span class="close" onclick="cerrarpresionamodal('pagomodeal');">&times;</span>
      <center>
      <h2>SE HA REGISTRO CON EXITO</h2>
      <input onclick="cerrarpresionamodal('exitomodeal');" 
    class="botonesmodalesiniciales" 
    style="background-color: aquamarine; color: black;"
     type="submit"
          value="ACEPTAR">
      </center>
    </div>
  </div>
  <!-- REGISTRARmodeal Modal -->
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
                    <input class="botonesmodalesiniciales" style="background-color: #0077cc; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;" type="submit" value="Registrar">
                </center>
            </form>
            <br>
            <br>
        </center>
    </div>
</div>
  <!-- inciosesion Modal -->
  <div id="inciosesion" class="modal">
      <div class="modal-content" style="width: 500px;">
      <div style="background-color: #f9f9f9; width: 450px; margin: 0 auto; text-align: center; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <span class="close" style="color: #ff3333; font-size: 24px; cursor: pointer; position: absolute; top: 10px; right: 10px;" onclick="cerrarpresionamodal('inciosesion');">&times;</span>
    <br><br>
    <h2 style="color: #333;">INGRESAR</h2>
    <form action="iniciodesecioncliente.php" method="post">
        <div>
            <label style="color: #333; font-weight: bold;" for="usuario">Usuario: </label>
            <input type="email" id="usuariot" name="correo" required style="padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div>
            <label style="color: #333; font-weight: bold;" for="contrasena">Contraseña:</label>
            <input type="password" id="passwordt" name="contrasena" placeholder="Contraseña" style="padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
            <input type="checkbox" id="mostrar" onchange="mostrarContrasena()" style="margin-left: 5px;"> Mostrar
        </div>
        <div>
            <a onclick="cerrarpresionamodal('inciosesion');" style="color: #0077cc; text-decoration: none;">Restaurar Contraseña</a>
        </div>
        <br>
        <div>
            <input class="botonesmodalesiniciales" style="background-color: #0077cc; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;" type="submit" value="Iniciar Sesión">
        </div>
    </form>
    <br>
    <hr style="border: 1px solid #ddd;">
    <p style="color: #333;">¿No tienes una cuenta? <button onclick="cerrarpresionamodal('inciosesion'); presionamodal('REGISTRARmodeal','INICIO');" style="background-color: #00cccc; color: #fff; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">Registrarse</button></p>
</div>


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
          <center>
          <button class="botonesmodalesiniciales" onclick="abrirmodalprarra();">Comprar ahora</button>
          </center>
    </div>
   
  </div>

  <!-- TABLA SERVICIOS -->
<div class="container" id="SERVICIOSACr" style="width: 100%;height:500px;overflow:auto;">

      <div class="detail-box">
        <main class="main">
<br><br>
          <h1>NUESTROS SERVICIOS</h1>
          
          <table style="width: 100%;height: 100px;">
            <tr>
              <td>

              </td>
              <td colspan="7">
              <h4>Buscar servicio</h4>
                <label style="color:black;" for="myInput">Ingrese servicio:</label>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="INGRESA NOMBRE DEL SERVICIO">
              </td>
            </tr>
          </table>

          <table id="myTable" style="width: 100%;">

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
            function abrirmodalprarra(){
              document.getElementById("Personalizarmodeal").style.display = "none";

              document.getElementById("inciosesion").style.display = "block";
            }

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

  <!--modales-->
  <script>
  var totalpersonalizar = 0;
  function sumarpersonalizar() {
    //alert();
    //document.getElementById("segundo").style.display = "block";
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
    if (usuario == "Ingresea") {
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
          //document.getElementById("segundo").style.display = "none";
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

    function abrirmodal(){
      openModal("iniciosesion", "INICIO");
    }

    // Función para cerrar un modal
    function closeModal(modalId) {
     document.getElementById(modalId).style.display = "none";
    }

    function presionamodal(modal, servicio) {
      //alert(modal+"\n"+servicio);
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