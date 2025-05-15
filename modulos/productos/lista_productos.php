<?php
require_once('../../config/config.php');
$query = "SELECT * FROM Producto";
$result = $conexion->query($query);
?>

<?php include('../../includes/header.php'); ?>
<main class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Lista de Productos</h2>
        <a href="form_insert_productos.php" class="btn">Añadir Producto</a>
    </div>
    <div class="product-grid">
        <?php while($p = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= $p['imagen'] ?>" alt="<?= $p['nombre'] ?>">
                <h3><?= $p['nombre'] ?></h3>
                <p>S/<?= number_format($p['precio'],2) ?></p>
                <a class="btn" href="/modulos/productos/editar.php?id=<?= $p['id'] ?>">Editar</a>
                <a class="btn btn-danger" href="/config/delete_productos.php?id=<?= $p['id'] ?>">Borrar</a>
            </div>
        <?php endwhile; ?>
    </div>
</main>
<?php include('../../includes/footer.php'); ?>