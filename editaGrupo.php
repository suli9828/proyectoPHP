<?php require_once 'cabecera.php'; ?>

<div id="principal">
    <h3>Editar grupo</h3>
    <br />

    <form action="modificaGrupo.php" method="POST">
        <label for="idGrupo">ID del grupo:</label>
        <input type="number" name="idGrupo" placeholder="ID Grupo" />

        <input type="submit" value="Buscar" />
    </form>

    <?php
    if (isset($_SESSION['editargrupo'])) {
        echo "El ID si existe en la base de datos.";
        $grupos = $_SESSION['editargrupo'];
    } else {
        $grupos['idGrupo']   = "";
        $grupos['nombre']      = "";
        $grupos['curso']   = "";

    }
    ?>

    <form action="modificaGrupoBBDD.php" method="POST">
        <input type="hidden" name="idGrupo" value="<?= $grupos['idGrupo'] ?>">

        <label for="idGrupo">ID del grupo:</label>
        <input type="number" name="idGrupo" placeholder="idGrupo" value="<?= $grupos['idGrupo'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idGrupo') : ''; ?>

        <label for="nombre">Nombre del grupo</label>
        <input type="text" name="nombre" placeholder="Nombre" value="<?= $grupos['nombre'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

        <label for="curso">curso:</label>
        <input type="text" name="curso" placeholder="Curso" value="<?= $grupos['curso'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'curso') : ''; ?>

        <input type="submit" value="Guardar cambios de grupo" />
    </form>
    <?php borrarErrores();

    if (isset($_SESSION['editargrupo'])) {
        $_SESSION['editargrupo'] = null;
    }
    ?>
</div>