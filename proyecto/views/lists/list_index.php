<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contactos</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
</head>
<body>
    <h2> Lista - Contactos creados</h2>
    <table border="1" cellpadding="5" class="table table-striped">
        <thead>
        <tr>
        <th>Nombre</th>
        <th>Cedula</th>
        <th>Correo</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($lists as $list): ?>
            <tr>
                <td><?php echo htmlspecialchars($list['nombre']) ?></td>
                <td><?php echo htmlspecialchars($list['cedula']) ?></td>
                <td><?php echo htmlspecialchars($list['correo']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>