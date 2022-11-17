<?php
require_once 'cabecera.php'; ?>

<div id="principal">

    <br />
    <form action="insertTutoria.php" method="POST">
        <label for="idTutoria">ID de tutoría:</label>
        <input type="number" name="idTutoria" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idTutoria') : ''; ?>

        <label for="Profesor_idProfesor">ID del profesor:</label>
        <input type="number" name="Profesor_idProfesor" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'Profesor_idProfesor') : ''; ?>

        <label for="Grupo_idGrupo">iD del grupo:</label>
        <input type="number" name="Grupo_idGrupo" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'Grupo_idGrupo') : ''; ?>


        <input type="submit" value="Insertar tutoría" />
    </form>
    <?php borrarErrores(); ?>
</div>