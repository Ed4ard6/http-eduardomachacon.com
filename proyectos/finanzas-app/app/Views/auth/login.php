<div class="auth-container">
  <h1>Iniciar Sesión</h1>

  <?php if (!empty($errores)): ?>
    <div class="error-box">
      <?php foreach ($errores as $e): ?>
        <p><?= htmlspecialchars($e) ?></p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="<?= $baseUrl ?>/login">
    <input type="email" name="email" placeholder="Correo electrónico" value="<?= htmlspecialchars($email ?? '') ?>" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Entrar</button>
  </form>

  <p class="switch-auth">
    ¿No tienes cuenta? <a href="<?= $baseUrl ?>/register">Regístrate</a>
  </p>
</div>
