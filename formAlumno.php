<?php
require_once 'cabecera.php'; ?>

<div id="principal">

    <br />
    <form action="insertAlumno.php" method="POST">
        <label for="idAlumno">ID del alumno:</label>
        <input type="number" name="idAlumno" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idAlumno') : ''; ?>

        <label for="nombre">Nombre del alumno:</label>
        <input type="text" name="nombre" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

        <label for="apellidos">Apellidos del alumno:</label>
        <input type="text" name="apellidos" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellidos') : ''; ?>

        <label for="expediente">Expediente:</label>
        <input type="number" name="expediente" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'expediente') : ''; ?>

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'telefono') : ''; ?>

        <label for="email">E-mail:</label>
        <input type="email" name="email" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'email') : ''; ?>

        <label for="Grupo_idGrupo">ID del grupo:</label>
        <input type="number" name="Grupo_idGrupo" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'Grupo_idGrupo') : ''; ?>

        <input type="submit" value="Insertar alumno" />
    </form>
    <?php borrarErrores();?>
</div>