<html>

<body>
    <?php
	require_once 'cabecera.php'; ?>

    <div id="principal">
        <h2>Profesores:</h2>

        <table class="styled-table">
            <tr>
                <th>ID del profesor</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Eliminar</th>
                <th>Editar</th>
            </tr>

            <?php
			$profesores = obtenerProfesores($db);
			if (!empty($profesores)) {
				while ($profesor = mysqli_fetch_assoc($profesores)) {
			?>
            <tr>
                <td><?= $profesor['idProfesor'] ?></td>
                <td><?= $profesor['nombre'] ?></td>
                <td><?= $profesor['apellidos'] ?></td>
                <td><a href='deleteProfesor.php?idProfesor=<?= $profesor['idProfesor'] ?>'><input type='button'
                            name='eliminaprofesor' value='Eliminar profesor'></a>
                </td>
                <td><a href='editaProfesor.php?
                        idProfesor=<?= $profesor['idProfesor'] ?>
                        nombre=<?= $profesor['nombre'] ?>
                        apellidos=<?= $profesor['apellidos'] ?>'>
                        <input type='button' name='editaprofesor' value='Editar profesor'></a>
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