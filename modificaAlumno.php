<?php

if (isset($_POST)) {
    
    require_once 'conexion.php';
        
    $idAlumno = $_POST['idAlumno'];
    
    $errores = array();
    
    if (empty($idAlumno) || !is_numeric($idAlumno)) {
        $errores['idAlumno'] = 'El ID de alumno no es v&aacutelido.';
    }
    
    
    if (count($errores) == 0) {
        
        $sql = "SELECT * FROM alumnos WHERE idAlumno = '$idAlumno';";
        
        
        
        $modificar = mysqli_query($db, $sql);
        
        if ($modificar && mysqli_num_rows($modificar) == 1) {
            $alumnos = mysqli_fetch_assoc($modificar);
            $_SESSION["editaralumno"] = $alumnos;
        }
    } else {
        
        $_SESSION["errores_entrada"] = $errores;
        
    }
    header("Location:editaAlumno.php");
}