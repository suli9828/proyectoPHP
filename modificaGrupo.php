<?php

if (isset($_POST)) {
    
    require_once 'conexion.php';
        
    $idGrupo = $_POST['idGrupo'];
    
    $errores = array();
    
    if (empty($idGrupo) || !is_numeric($idGrupo)) {
        $errores['idGrupo'] = 'El ID de grupo no es v&aacutelido.';
    }
    
    
    if (count($errores) == 0) {
        
        $sql = "SELECT * FROM grupos WHERE idGrupo = '$idGrupo';";
        
        
        
        $modificar = mysqli_query($db, $sql);
        
        if ($modificar && mysqli_num_rows($modificar) == 1) {
            $grupos = mysqli_fetch_assoc($modificar);
            $_SESSION["editargrupo"] = $grupos;
        }
    } else {
        
        $_SESSION["errores_entrada"] = $errores;
        
    }
    header("Location:editaGrupo.php");
}