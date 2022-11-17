<?php

if (isset($_POST)) {
    
    require_once 'conexion.php';
        
    $idProfesor = $_POST['idProfesor'];
    
    $errores = array();
    
    if (empty($idProfesor) || !is_numeric($idProfesor)) {
        $errores['idProfesor'] = 'El ID de profesor no es v&aacutelido.';
    }
    
    
    if (count($errores) == 0) {
        
        $sql = "SELECT * FROM profesores WHERE idProfesor = '$idProfesor';";
        
        
        
        $modificar = mysqli_query($db, $sql);
        
        if ($modificar && mysqli_num_rows($modificar) == 1) {
            $profesores = mysqli_fetch_assoc($modificar);
            $_SESSION["editarprofesor"] = $profesores;
        }
    } else {
        
        $_SESSION["errores_entrada"] = $errores;
        
    }
    header("Location:editaProfesor.php");
}