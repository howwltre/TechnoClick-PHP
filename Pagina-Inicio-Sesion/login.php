<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Iniciar Sesión</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php include '../Header/header.php'; ?>
    <main>
        <section class="login">
            <h2>Iniciar Sesión</h2>
            <form action="../config2.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Iniciar Sesión</button>
            </form>
            <p><a href="../Cambiar-Contrasena/Cambiar-Contrasena.php">Cambiar contraseña</a></p>
        </section>
    </main>

    <!-- Incluir el footer -->
    <?php include '../Footer/footer.html'; ?>
</body>
</html>