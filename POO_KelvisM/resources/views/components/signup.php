<!-- Formulario de Signup -->
<div class="form-container">
    <h2>Crear Cuenta</h2>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" id="signupForm">

        <div class="form-group">
            <label for="fullname">Nombre completo</label>
            <input
                type="text"
                id="fullname"
                name="fullname"
                placeholder="Tu nombre completo"
                value="<?= htmlspecialchars($name ?? '') ?>"
            >

            <?php if (!empty($nameError)): ?>
                <div class="error-message"><?= $nameError ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="signup-email">Email</label>
            <input
                type="email"
                id="signup-email"
                name="signup-email"
                placeholder="tu@email.com"
                value="<?= htmlspecialchars($email ?? '') ?>"
            >

            <?php if (!empty($emailError)): ?>
                <div class="error-message"><?= $emailError ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="signup-password">Contraseña</label>
            <input
                type="password"
                id="signup-password"
                name="signup-password"
            >

            <?php if (!empty($passError)): ?>
                <div class="error-message"><?= $passError ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirmar contraseña</label>
            <input
                type="password"
                id="confirm-password"
                name="confirm-password"
            >
        </div>

        <button type="submit">Crear Cuenta</button>

        <div class="form-footer">
            ¿Ya tienes cuenta?
            <a href="/public/form-login.php">Inicia Sesión</a>
        </div>

    </form>
</div>
