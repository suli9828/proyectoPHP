<html>

<body>
    <?php
	require_once 'cabecera.php'; ?>

    <div id="principal">
        <h2>Alumnos:</h2>

        <table class="styled-table">
            <tr>
                <th>ID del alumno</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Expediente</th>
                <th>Tel&eacutefono</th>
                <th>E-mail</th>
                <th>Grupo al que pertenece</th>
                <th>Eliminar</th>
                <th>Editar</th>

            </tr>

            <?php
			$alumnos = obtenerAlumnos($db);
			if (!empty($alumnos)) {
				while ($alumno = mysqli_fetch_assoc($alumnos)) {
			?>
            <tr>
                <td><?= $alumno['idAlumno'] ?></td>
                <td><?= $alumno['nombre'] ?></td>
                <td><?= $alumno['apellidos'] ?></td>
                <td><?= $alumno['expediente'] ?></td>
                <td><?= $alumno['telefono'] ?></td>
                <td><?= $alumno['email'] ?></td>
                <td><?= $alumno['Grupo_idGrupo'] ?></td>
                <td><a href='deleteAlumno.php?idAlumno=<?=$alumno['idAlumno']?>'><input type='button'
                            name='eliminaalumno' value='Eliminar alumno'></a>
                </td>
                <td><a href='editaAlumno.php?
                idAlumno=<?= $alumno['idAlumno'] ?>
                nombre=<?= $alumno['nombre'] ?>
                apellidos=<?= $alumno['apellidos'] ?>
                expediente=<?= $alumno['expediente'] ?>
                telefono=<?= $alumno['telefono'] ?>
                email=<?= $alumno['email'] ?>
                Grupo_idGrupo=<?= $alumno['Grupo_idGrupo'] ?>
                '><input type='button' name='editaalumno' value='Editar alumno'></a>
                </td>
            </tr>

            <?php
				}
			}
			?>

        </table>
    </div>
</body>

</html>