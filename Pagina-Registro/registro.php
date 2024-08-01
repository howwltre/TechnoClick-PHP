<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Registro</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
<?php include '../Header/header.php'; ?>
    <main>
        <section class="registro">
            <h2>Registro de Usuario</h2>
            <form action="../config1.php" method="get">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
                
                <label for="credencial">Credencial:</label>
                <input type="text" id="credencial" name="credencial" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Registrar</button>
            </form>
        </section>
    </main>

    <!-- Incluir el footer -->
    <?php include '../Footer/footer.html'; ?>
</body>
</html>