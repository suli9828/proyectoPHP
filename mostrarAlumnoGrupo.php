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

            </tr>

            <?php
			$alumnos = obtenerAlumnosIdGrupo($db);
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
            </tr>

            <?php
    }
}
?>

        </table>
    </div>
</body>

</html>