<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['idTutoria'])) {
    
    require_once 'conexion.php';
    
    $idTutoria = $_GET['idTutoria'];
      
        $sql = "DELETE FROM tutoria WHERE idTutoria = $idTutoria";
    }
    
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   