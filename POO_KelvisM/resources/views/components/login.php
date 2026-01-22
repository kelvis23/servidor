<!-- Formulario de Login -->
<div class="form-container">
    <h2>Iniciar Sesión</h2>

    <form id="loginForm" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">

        <div class="form-group" id="email-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="tu@email.com"
                value="<?= htmlspecialchars($mail ?? '') ?>"
            >

            <?php if (!empty($mailError)): ?>
                <div class="error-message"><?= $mailError ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group" id="username-group" style="display: none;">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Tu nombre de usuario">
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Tu contraseña"
            >

            <?php if (!empty($passError)): ?>
                <div class="error-message"><?= $passError ?></div>
            <?php endif; ?>
        </div>
  
        <div class="checkbox-group">
            <input type="checkbox" id="stay-connected" name="stay-connected" required>
            <label for="stay-connected">Quiero seguir conectado</label>
        </div>


        <button type="submit">Iniciar Sesión</button>

        <div class="form-footer">
            ¿No tienes cuenta?
            <a href="/public/form-signup.php">Regístrate</a>
        </div>


    </form>
</div>
