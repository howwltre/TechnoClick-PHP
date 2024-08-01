<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Iniciar Sesión</title>
    <link rel="stylesheet" href="Cambiar-Contrasena.css">
</head>
<body>
<?php include '../Header/header.php'; ?>
    <main>
        <section class="login">
            <h2>Cambiar Contraseña</h2>
            <form action="../config3.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="password">Nueva contraseña:</label>
                <input type="password" id="cambiar_contrasena" name="cambiar_contrasena" required>

                <label for="password">Confirmar nueva contraseña:</label>
                <input type="password" id="cambiar_nueva_contrasena" name="cambiar_nueva-contrasena" required>

                <button type="submit">Cambiar Contraseña</button>
            </form>
        </section>
    </main>

    <!-- Incluir el footer -->
    <?php include '../Footer/footer.html'; ?>
</body>
</html>