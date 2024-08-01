<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TecnoClick - Header</title>
    <link rel="stylesheet" href="header.css">
<style>
    /* styles.css */

/* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

/* Header */
header {
    background-color: #1b523e;
    color: #fff;
    padding: 10px 0;
}

header .logo {
    display: flex;
    align-items: center;
    margin-left: 20px;
}

header .logo img {
    height: 70px;
    margin-right: 15px;
}

header h1 {
    margin: 0;
    font-size: 1.5em;
}

header nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-end;
    margin-right: 20px;
}

header nav ul li {
    margin-left: 20px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1em;
}

header nav ul li a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <header>
        <div class="logo">
        <img src="../assets/LogoTipo.jpg" alt="TecnoClick Logo" >
            <h1>TecnoClick</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../Pagina-Inicio/inicio.php">Inicio</a></li>
                <li><a href="../Pagina-Productos/productos.php">Productos</a></li>
                <li><a href="../Pagina-Registro/registro.php">Registro</a></li>
                <li><a href="../Pagina-Inicio-Sesion/login.php">Iniciar Sesión</a></li>
            </ul>
        </nav>

    </header>

    <footer>

</footer>
</body>
</html>