<?php
require_once 'cabecera.php'; ?>

<div id="principal">

    <br />
    <form action="insertProfesor.php" method="POST">
        <label for="idProfesor">ID del profesor:</label>
        <input type="number" name="idProfesor" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idProfesor') : ''; ?>

        <label for="nombre">Nombre del profesor:</label>
        <input type="text" name="nombre" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

        <label for="apellidos">Apellidos del profesor:</label>
        <input type="text" name="apellidos" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellidos') : ''; ?>


        <input type="submit" value="Insertar profesor" />
    </form>
    <?php borrarErrores(); ?>
</div>