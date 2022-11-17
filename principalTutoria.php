<html>

<body>
    <?php
	require_once 'cabecera.php'; ?>

    <div id="principal">
        <h2>Tutoría:</h2>

        <table class="styled-table">
            <tr>
                <th>ID de tutoría</th>
                <th>Grupo de la tutoría</th>
                <th>Profesores de la tutoría</th>
                <th>Eliminar</th>
            </tr>

            <?php
			$tutorias = obtenerTutorias($db);
			if (!empty($tutorias)) {
				while ($tutoria = mysqli_fetch_assoc($tutorias)) {
			?>
            <tr>
                <td><?= $tutoria['idTutoria'] ?></td>
                <td><?= $tutoria['Grupo_idGrupo'] ?></td>
                <td><?= $tutoria['Profesor_idProfesor'] ?></td>
                <td><a href='deleteTutoria.php?idTutoria=<?= $tutoria['idTutoria'] ?>'><input type='button'
                            name='eliminatutoria' value='Eliminar tutoria'></a>
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