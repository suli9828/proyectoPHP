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
    
    $idAlumno = $_POST['idAlumno'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $expediente = $_POST['expediente'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $Grupo_idGrupo = $_POST['Grupo_idGrupo'];
    
      
    $sql = "UPDATE alumnos SET idAlumno = '$idAlumno', nombre = '$nombre', apellidos = '$apellidos', expediente = '$expediente', telefono = '$telefono', email = '$email', Grupo_idGrupo = '$Grupo_idGrupo' WHERE idAlumno = '$idAlumno';";        

}
header("Location: principalAlumno.php");

    
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han actualizado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   