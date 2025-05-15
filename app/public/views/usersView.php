<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Usuarios</h1>

    <!-- Formulario para buscar usuario por ID -->
    <h2>Buscar usuario por ID</h2>
    <form method="GET" action="">
        <input type="number" name="usuario_id" placeholder="Ingrese ID del usuario" required>
        <button type="submit">Buscar</button>
    </form>

    <!-- Tabla con todos los usuarios -->
    <h2>Lista de usuarios</h2>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th></tr>
        <?php if ($usuarios && $usuarios->num_rows > 0): ?>
            <?php while ($fila = $usuarios->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($fila['id']) ?></td>
                    <td><?= htmlspecialchars($fila['nombre']) ?></td>
                    <td><?= htmlspecialchars($fila['email']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="3">No hay usuarios para mostrar.</td></tr>
        <?php endif; ?>
    </table>

    <!-- Tabla con usuario filtrado -->
    <?php if ($usuarioFiltrado): ?>
        <h2>Usuario buscado</h2>
        <table>
            <tr><th>ID</th><th>Nombre</th><th>Email</th></tr>
            <tr>
                <td><?= htmlspecialchars($usuarioFiltrado['id']) ?></td>
                <td><?= htmlspecialchars($usuarioFiltrado['nombre']) ?></td>
                <td><?= htmlspecialchars($usuarioFiltrado['email']) ?></td>
            </tr>
        </table>
    <?php elseif (isset($_GET['usuario_id'])): ?>
        <p>No se encontró ningún usuario con ese ID.</p>
    <?php endif; ?>

</body>
</html>
