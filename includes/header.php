<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/style.css">
    <title>SanaMarket</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
        }
        .nav-link {
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">SanaMarket</a>
    </nav>

    <header>
        <nav class="navbar">
            <div class="container">
                <a class="brand" href="/">SanaMarket</a>
                <div class="nav-links">
                    <a href="/modulos/productos/productos.php">Productos</a>
                    <a href="/modulos/carrito/carrito.php">Carrito</a>
                    <a href="/config/logout.php">Salir</a>
                </div>
            </div>
        </nav>
    </header>
