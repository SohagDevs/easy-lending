<?php
// public/index.php
use core\Router;

require_once __DIR__ . '/../core/Router.php'; // Load the Router

// Define routes
require_once __DIR__ . '/../routes/web.php';

// Get the current URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
Router::dispatch($uri);
