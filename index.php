<?php
ini_set('display_errors', false);
error_reporting(E_ALL | E_STRICT);

define('SITE_BASE', __DIR__);
include SITE_BASE . DIRECTORY_SEPARATOR . 'bootstrap.php';

$query = parse_url(filter_var(isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
$path = trim($query['path'], '/');
if (empty($path)) {
  $path = 'index';
}

include SITE_BASE . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'Index.php';

$controller = new Index;
$controller->render($path);
