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
    
    
    
    // Validación
    $errores = array();
    
    if (empty($idAlumno) || !is_numeric($idAlumno)) {
        $errores['idAlumno'] = 'El id del alumno no es v&aacutelido.';
    }
    
    if (empty($nombre)) {
        $errores['nombre'] = 'No se puede dejar el nombre vacío.';
    }
    
    if (empty($apellidos)) {
        $errores['apellidos'] = 'No se pueden dejar los apellidos vacío.';
    }
    
    if (empty($expediente)) {
        $errores['expediente'] = 'No se puede dejar el expediente vacío.';
    }
    
    if (empty($telefono)) {
        $errores['telefono'] = 'No se puede dejar el telefono vacío.';
    }
    
    if (empty($email)) {
        $errores['email'] = 'No se puede dejar el email vacío.';
    }
    
    if (empty($Grupo_idGrupo)) {
        $errores['Grupo_idGrupo'] = 'No se puede dejar vacío el grupo al que pertenece el alumno.';
    }
    
    
    
    if (count($errores) == 0) {
        
        $sql = "INSERT INTO alumnos (idAlumno, nombre, apellidos, expediente, telefono, email, Grupo_idGrupo) VALUES ('$idAlumno', '$nombre', '$apellidos', '$expediente', '$telefono', '$email', '$Grupo_idGrupo')";
                        
        
    } else {
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
    }
    
    header("Location: formAlumno.php");
}
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();