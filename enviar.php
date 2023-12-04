<?php 
define('RUTA', 'http://localhost/tienda2/');
require 'functions.php';

    // Establecer la conexión a la base de datos
    $servername = "localhost"; // Cambia esto por tu servidor de base de datos
    $username = "root"; // Cambia esto por tu nombre de usuario de la base de datos
    $password = "Linea16LXL"; // Cambia esto por tu contraseña de la base de datos
    $dbname = "tienda"; // Cambia esto por el nombre de tu base de datos

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $numcontrol = $_POST['numcontrol'];
   

    $sql= "INSERT INTO contacto (nombre, apellido, username, ciudad, estado,numcontrol) 
        VALUES (?,?,?,?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nombre, $apellido, $username, $ciudad, $estado,$numcontrol);
    if ($stmt->execute()) {
        header('Location: ' . RUTA);
    }else{
        echo "No jalo esta vaina".  $conn->connect_error;

    }


    $stmt->close();
    $conn->close();


}


?>

