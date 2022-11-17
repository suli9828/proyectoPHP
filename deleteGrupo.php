<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'instituto';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['idGrupo'])) {
    
    require_once 'conexion.php';
    
    $idGrupo = $_GET['idGrupo'];
      
        $sql = "DELETE FROM grupos WHERE idGrupo = $idGrupo";
    }
    
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   