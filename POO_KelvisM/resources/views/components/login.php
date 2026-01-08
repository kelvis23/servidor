<!-- Formulario de Login -->
<div class="form-container">
    <h2>Iniciar Sesión</h2>
    <form id="loginForm" action="<?=$_SERVER["PHP_SELF"] ?>" method="POST">

        <div class="form-group" id="email-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="tu@email.com" >
            <!-- <div class="error-message" id="email-error">Por favor, introduce un email válido</div> -->
        </div>

        <div class="form-group" id="username-group" style="display: none;">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Tu nombre de usuario">
            <div class="error-message" id="username-error">Por favor, introduce tu nombre de usuario</div>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña" >
            <div class="error-message" id="password-error">Por favor, introduce tu contraseña</div>
        </div>

        <button type="submit">Iniciar Sesión</button>

        <div class="form-footer">
            ¿No tienes cuenta? <a href="/public/form-signup.php"
                id="go-to-signup">Regístrate</a>
        </div>
    </form>
</div>