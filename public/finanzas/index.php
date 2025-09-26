<?php
// Apunta a la app real
define('APP_PATH', realpath(__DIR__ . '/../../proyectos/finanzas-app'));
define('BASE_PATH', APP_PATH); // compatibilidad

require APP_PATH . '/vendor/autoload.php';

// Cargar variables de entorno de la app real
$dotenv = Dotenv\Dotenv::createImmutable(APP_PATH);
$dotenv->load();

App\Core\Session::start();

// Despachar router de la app
$router = require APP_PATH . '/app/Routes/web.php';
$router->dispatch();
