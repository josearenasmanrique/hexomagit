<?php
// Verifica si el formulario se envió por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $ids = isset($_POST["id"]) && is_array($_POST["id"]) ? $_POST["id"] : [];
    $horas = isset($_POST["horas"]) && is_array($_POST["horas"]) ? $_POST["horas"] : [];
    echo  ''.$ids;
    
$urlparallevar=$_POST["urlallevar"];
    // Credenciales de la base de datos
    require('conexion.php');


    // Crear una conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }
    $cantidad=count($ids);
    echo $cantidad.'<br>';
    // Itera sobre los arrays de IDs y horas
    for ($i = 0; $i < count($ids)+1; $i++) {
        if($ids[$i]==""){
        $id="nuevo";  
        }else{
        $id = $conn->real_escape_string($ids[$i]); // Evita inyección SQL
        }
        $hora = $conn->real_escape_string($horas[$i]); // Evita inyección SQL
        echo  '<br>'.$id;
        echo  '<br>'.$hora;
        
        
       if($id=="nuevo"){
        $sql = "INSERT INTO `horasestablecidas`(HoraEstablecida) VALUES ($hora)";    
       }else{
          // Preparar la consulta SQL para actualizar
        $sql = "UPDATE `horasestablecidas` SET HoraEstablecida=$hora WHERE ID=$id"; 
       }

        

        if ($conn->query($sql) !== TRUE) {
          echo "<br> Error al insertar o actualizar datos: " . $conn->error;
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();

    //header("Location: ".$urlparallevar);
}
?>
