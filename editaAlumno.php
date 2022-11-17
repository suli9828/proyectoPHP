<?php require_once 'cabecera.php'; ?>

<div id="principal">
    <h3>Editar alumno</h3>
    <br />

    <form action="modificaAlumno.php" method="POST">
        <label for="idAlumno">ID del alumno:</label>
        <input type="number" name="idAlumno" placeholder="ID Alumno" />

        <input type="submit" value="Buscar" />
    </form>

    <?php
    if (isset($_SESSION['editaralumno'])) {
        echo "El ID si existe en la base de datos.";
        $alumnos = $_SESSION['editaralumno'];
    } else {
        $alumnos['idAlumno']   = "";
        $alumnos['nombre']      = "";
        $alumnos['apellidos']   = "";
        $alumnos['expediente']    = "";
        $alumnos['telefono']   = "";
        $alumnos['email']   = "";
        $alumnos['Grupo_idGrupo']   = "";

    }
    ?>

    <form action="modificaAlumnoBBDD.php" method="POST">
        <input type="hidden" name="idAlumno" value="<?= $alumnos['idAlumno'] ?>">

        <label for="idAlumno">ID del alumno:</label>
        <input type="number" name="idAlumno" placeholder="idAlumno" value="<?= $alumnos['idAlumno'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idAlumno') : ''; ?>

        <label for="nombre">Nombre del alumno</label>
        <input type="text" name="nombre" placeholder="Nombre" value="<?= $alumnos['nombre'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

        <label for="apellidos">Apellidos del alumno:</label>
        <input type="text" name="apellidos" placeholder="Apellidos" value="<?= $alumnos['apellidos'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellidos') : ''; ?>

        <label for="expediente">Expediente:</label>
        <input type="number" name="expediente" placeholder="Expediente" value="<?= $alumnos['expediente'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'expediente') : ''; ?>

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" placeholder="Telefono" value="<?= $alumnos['telefono'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'telefono') : ''; ?>

        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="Email" value="<?= $alumnos['email'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'email') : ''; ?>

        <label for="Grupo_idGrupo">ID del grupo:</label>
        <input type="number" name="Grupo_idGrupo" placeholder="ID del grupo" value="<?= $alumnos['Grupo_idGrupo'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'Grupo_idGrupo') : ''; ?>

        <input type="submit" value="Guardar cambios de alumno" />
    </form>
    <?php borrarErrores();

    if (isset($_SESSION['editaralumno'])) {
        $_SESSION['editaralumno'] = null;
    }
    ?>
</div>