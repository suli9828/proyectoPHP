<?php
require_once 'cabecera.php'; ?>

<div id="principal">

    <br />
    <form action="insertGrupo.php" method="POST">
        <label for="idGrupo">ID del grupo:</label>
        <input type="number" name="idGrupo" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idGrupo') : ''; ?>

        <label for="nombre">Nombre del grupo:</label>
        <input type="text" name="nombre" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

        <label for="curso">Curso:</label>
        <input type="number" name="curso" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'curso') : ''; ?>


        <input type="submit" value="Insertar grupo" />
    </form>
    <?php borrarErrores(); ?>
</div>