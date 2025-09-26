<?php
// Carga la config una sola vez por request
function _cfg(): array {
    static $cfg;
    if (!$cfg) {
        $cfg = require BASE_PATH . '/app/Config/config.php';
        // Normalizaciones
        $cfg['base_url']    = rtrim($cfg['base_url'] ?? '', '/');
        $cfg['app_base']    = '/' . ltrim(rtrim($cfg['app_base'] ?? '', '/'), '/');
        $cfg['assets_base'] = rtrim($cfg['assets_base'] ?? ($cfg['base_url'] . '/assets'), '/');
    }
    return $cfg;
}

/**
 * URL pública dentro del proyecto (respeta subcarpeta /finanzas)
 *  url('/')      -> http://hosting.test/finanzas/
 *  url('/login') -> http://hosting.test/finanzas/login
 */
function url(string $path = ''): string {
    $c = _cfg();
    return $c['base_url'] . $c['app_base'] . '/' . ltrim($path, '/');
}

/**
 * URL para assets compartidos (favicon, logos, css/js)
 *  asset('img/logo_1.png') -> http://hosting.test/assets/img/logo_1.png
 */
function asset(string $path): string {
    $c = _cfg();
    return $c['assets_base'] . '/' . ltrim($path, '/');
}
