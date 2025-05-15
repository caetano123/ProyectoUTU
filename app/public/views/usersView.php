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

    <!-- Mostrar todos los usuarios -->
    <h2>Lista de usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <?php while ($fila = $usuarios->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($fila['id']) ?></td>
                <td><?= htmlspecialchars($fila['nombre']) ?></td>
                <td><?= htmlspecialchars($fila['email']) ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <!-- Buscar usuario por ID -->
    <h2>Buscar usuario por ID</h2>
    <form method="GET" action="">
        <input type="number" name="usuario_id" placeholder="Ingrese ID del usuario" required>
        <button type="submit">Buscar</button>
    </form>

    <?php if (isset($usuario)): ?>
        <h3>Usuario encontrado</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
            </tr>
        </table>
    <?php endif; ?>

</body>
</html>
