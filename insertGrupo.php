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
    
    
    $errores = array();
    
    if (empty($idGrupo) || !is_numeric($idGrupo)) {
        $errores['idGrupo'] = 'El id del grupo no es v&aacutelido.';
    }
    
    if (empty($nombre)) {
        $errores['nombre'] = 'No se puede dejar el nombre del grupo vacío.';
    }
    
    if (empty($curso)) {
        $errores['curso'] = 'No se puede dejar el curso vacío.';
    }
    
    
    
    if (count($errores) == 0) {
        
        $sql = "INSERT INTO grupos (idGrupo, nombre, curso) VALUES ('$idGrupo', '$nombre', '$curso')";
                        
        
    } else {
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
    }
    
    header("Location: formGrupo.php");
}
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();