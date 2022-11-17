<?php require_once 'cabecera.php'; ?>

<div id="principal">
    <h3>Editar profesor</h3>
    <br />

    <form action="modificaProfesor.php" method="POST">
        <label for="idProfesor">ID del profesor:</label>
        <input type="number" name="idProfesor" placeholder="ID Profesor" />

        <input type="submit" value="Buscar" />
    </form>

    <?php
    if (isset($_SESSION['editarprofesor'])) {
        echo "El ID si existe en la base de datos.";
        $profesores = $_SESSION['editarprofesor'];
    } else {
        $profesores['idProfesor']   = "";
        $profesores['nombre']      = "";
        $profesores['apellidos']   = "";

    }
    ?>

    <form action="modificaProfesorBBDD.php" method="POST">
        <input type="hidden" name="idProfesor" value="<?= $profesores['idProfesor'] ?>">

        <label for="idProfesor">ID del profesor:</label>
        <input type="number" name="idProfesor" placeholder="Nombre" value="<?= $profesores['idProfesor'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idProfesor') : ''; ?>

        <label for="nombre">Nombre del profesor</label>
        <input type="text" name="nombre" placeholder="Nombre" value="<?= $profesores['nombre'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

        <label for="apellidos">Apellidos del profesor:</label>
        <input type="text" name="apellidos" placeholder="Apellidos" value="<?= $profesores['apellidos'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellidos') : ''; ?>

        <input type="submit" value="Guardar cambios de profesor" />
    </form>
    <?php borrarErrores();

    if (isset($_SESSION['editarprofesor'])) {
        $_SESSION['editarprofesor'] = null;
    }
    ?>
</div>