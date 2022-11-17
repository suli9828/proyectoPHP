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
    
    $idTutoria = $_POST['idTutoria'];
    $Profesor_idProfesor = $_POST['Profesor_idProfesor'];
    $Grupo_idGrupo = $_POST['Grupo_idGrupo'];
    
    
        $errores = array();
    
    if (empty($idTutoria) || !is_numeric($idTutoria)) {
        $errores['idTutoria'] = 'El ID de tutoría no es v&aacutelido.';
    }
    
    if (empty($Profesor_idProfesor)) {
        $errores['Profesor_idProfesor'] = 'No se puede dejar el ID del profesor vacío.';
    }
    
    if (empty($Grupo_idGrupo)) {
        $errores['Grupo_idGrupo'] = 'No se pueden dejar el ID del grupo vacío.';
    }
    
    
    if (count($errores) == 0) {
        
        $sql = "INSERT INTO tutoria (idTutoria, Profesor_idProfesor, Grupo_idGrupo) VALUES ('$idTutoria', '$Profesor_idProfesor', '$Grupo_idGrupo')";
        
                        
        
    } else {
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
    }
    
    header("Location: formTutoria.php");
}
if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();