<?php
use App\Core\Session;
$config  = require BASE_PATH . '/app/Config/config.php';
require_once BASE_PATH . '/app/Helpers/url.php';
$user = Session::get('user');
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $titulo ?? 'Finanzas' ?></title>

  <!-- favicon y css desde assets compartidos -->
  <link rel="icon" href="<?= asset('img/favicon.png') ?>">
  <link rel="stylesheet" href="<?= asset('css/styles.css') ?>">
</head>
<body>
<header class="main-header">
  <div class="logo">
    <a href="<?= url('/') ?>">
      <img id="logo"
           src="<?= asset('img/logo_1.png') ?>"
           alt="Logo"
           data-logo-light="<?= asset('img/logo_1.png') ?>"
           data-logo-dark="<?= asset('img/logo_2.png') ?>">
    </a>
  </div>

  <!-- tu nav aquí ... -->
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const logo = document.getElementById('logo');
  const mq = window.matchMedia('(prefers-color-scheme: dark)');
  const setLogo = () => { logo.src = mq.matches ? logo.dataset.logoDark : logo.dataset.logoLight; };
  setLogo(); mq.addEventListener('change', setLogo);
});
</script>
