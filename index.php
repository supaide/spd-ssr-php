<?php
ini_set('display_errors', false);
error_reporting(E_ALL | E_STRICT);

define('SITE_BASE', __DIR__);
define('LAYOUT_DIR', SITE_BASE . DIRECTORY_SEPARATOR . 'views');
include SITE_BASE . DIRECTORY_SEPARATOR . 'bootstrap.php';

$query = parse_url(filter_var(isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : $_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
$path = trim($query['path'], '/');

include SITE_BASE . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'Index.php';

$controller = new Index;
$controller->render($path);
