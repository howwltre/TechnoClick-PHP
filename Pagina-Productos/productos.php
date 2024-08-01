<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Productos</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body>
    <!-- Incluir el header -->
    <?php include '../Header/header.php'; ?>

    <main>
        <section class="productos">
            <h2>Nuestros Productos</h2>
            <div class="producto">
                <img src="../assets/Portatil.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Precio: $100.00</p>
                <button>Comprar</button>
            </div>
            <div class="producto">
                <img src="../assets/Reloj.jpg" alt="Producto 2">
                <h3>Producto 2</h3>
                <p>Precio: $200.00</p>
                <button>Comprar</button>
            </div>
        </section>
    </main>

    <!-- Incluir el footer -->
    <?php include '../Footer/footer.html'; ?>
</body>
</html>