<div class="auth-container">
  <h1>Registro</h1>

  <?php if (!empty($errores)): ?>
    <div class="error-box">
      <?php foreach ($errores as $e): ?>
        <p><?= htmlspecialchars($e) ?></p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="<?= $baseUrl ?>/register">
    <input type="text" name="nombre" placeholder="Nombre completo" value="<?= htmlspecialchars($nombre ?? '') ?>" required>
    <input type="email" name="email" placeholder="Correo electrónico" value="<?= htmlspecialchars($email ?? '') ?>" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <input type="password" name="confirm" placeholder="Confirmar contraseña" required>
    <button type="submit">Registrarme</button>
  </form>

  <p class="switch-auth">
    ¿Ya tienes cuenta? <a href="<?= $baseUrl ?>/login">Inicia sesión</a>
  </p>
</div>
