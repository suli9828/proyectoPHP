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
    
    $idGrupo = $_POST['idGrupo'];
    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];
    
      
    $sql = "UPDATE grupos SET idGrupo = '$idGrupo', nombre = '$nombre', curso = '$curso' WHERE idGrupo = '$idGrupo';";        

}
header("Location: principalGrupo.php");

    
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han actualizado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   