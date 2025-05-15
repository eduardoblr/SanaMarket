<?php
require_once('../../config/config.php');
$query = "SELECT * FROM Producto";
$result = $conexion->query($query);
?>

<?php include('../../includes/header.php'); ?>
<main class="container">
    <h2 class="text-center mb-5">Catálogo de Productos</h2>
    <div class="product-grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <?php if ($row['activo'] == 1 && $row['stock'] > 0): ?>
                <div class="product-card">
                    <h3><?php echo htmlspecialchars($row['nombre']); ?></h3>
                    <p class="text-muted"><?php echo htmlspecialchars($row['descripcion']); ?></p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="h5 mb-0">S/ <?php echo number_format($row['precio'], 2); ?></span>
                        <span class="badge bg-success">Stock: <?php echo $row['stock']; ?></span>
                    </div>
                    <a href="#" class="btn w-100 mt-3">Agregar al carrito</a>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
</main>
<?php include('../../includes/footer.php'); ?>