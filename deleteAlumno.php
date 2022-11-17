<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['idAlumno'])) {
    
    require_once 'conexion.php';
    
    $idAlumno = $_GET['idAlumno'];
      
        $sql = "DELETE FROM alumnos WHERE idAlumno = $idAlumno";
    }
    
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   