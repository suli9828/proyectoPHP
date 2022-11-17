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
    
    
        $errores = array();
    
    if (empty($idProfesor) || !is_numeric($idProfesor)) {
        $errores['idProfesor'] = 'El id del profesor no es v&aacutelido.';
    }
    
    if (empty($nombre)) {
        $errores['nombre'] = 'No se puede dejar el nombre vacío.';
    }
    
    if (empty($apellidos)) {
        $errores['apellidos'] = 'No se pueden dejar los apellidos vacío.';
    }
    
    
    if (count($errores) == 0) {
        
        $sql = "INSERT INTO profesores (idProfesor, nombre, apellidos) VALUES ('$idProfesor', '$nombre', '$apellidos')";
        
                        
        
    } else {
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
    }
    
    header("Location: formProfesor.php");
}
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();