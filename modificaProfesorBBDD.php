<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST)) {
    
    require_once 'conexion.php';
    
    $idProfesor = $_POST['idProfesor'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    
      
    $sql = "UPDATE profesores SET idProfesor = '$idProfesor', nombre = '$nombre', apellidos = '$apellidos' WHERE idProfesor = '$idProfesor';";        

}
header("Location: principalProfesor.php");

    
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han actualizado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   