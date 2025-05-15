<?php include __DIR__ . '/includes/header.php'; ?>
<main class="container">
    <div class="form-signin w-100 m-auto">
        <form action="config/login.php" method="POST">
            <h1>SANAMARKET</h1>
            <h2 class="h3 mb-3 fw-normal">Iniciar Sesión</h2>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Correo electrónico</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_hash">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        </form>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>