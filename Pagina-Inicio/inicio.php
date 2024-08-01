<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Inicio</title>
    <link rel="stylesheet" href="inicio.css">
</head>
<body>
    <!-- Incluir el header -->
    <?php include '../Header/header.php'; ?>

    <main>
        <section class="inicio">
            <h2>Bienvenido a TecnoClick</h2>
            <p>Los mejores productos tecnológicos a tu alcance.</p>
            <a href="registro.php" class="btn">Regístrate Ahora</a>
            <div class="productos">
                <img src="../assets/Portatil.jpg" alt="Producto 1">
                <img src="../assets/Reloj.jpg" alt="Producto 2">
                <img src="../assets/Camara01.jpg" alt="Producto 3">
            </div>
        </section>
    </main>

    <!-- Incluir el footer -->
    <?php include '../Footer/footer.html'; ?>
</body>
</html>