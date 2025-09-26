<?php
// dónde vive la app real
define('APP_PATH', realpath(__DIR__ . '/../../proyectos/finanzas-app'));
define('BASE_PATH', APP_PATH); // compatibilidad con tu código existente

require APP_PATH . '/vendor/autoload.php';

// .env de la app real
$dotenv = Dotenv\Dotenv::createImmutable(APP_PATH);
$dotenv->load();

App\Core\Session::start();

// Router de la app
$router = require APP_PATH . '/app/Routes/web.php';
$router->dispatch();
