<?php
define('BASE_DIR', '/others/php_ecommerce/');

include_once '../config/database.php';

// Get the requested URI
$requestUri = $_SERVER['REQUEST_URI'];

// Define the base path for static files
$staticBasePath = __DIR__ . '/../resources';

// Check if the requested URI points to a static file
$staticFilePath = $staticBasePath . $requestUri;
if (file_exists($staticFilePath) && is_file($staticFilePath)) {
    // Determine the MIME type of the file
    $mimeTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
    ];
    $extension = pathinfo($staticFilePath, PATHINFO_EXTENSION);
    $mimeType = isset($mimeTypes[$extension]) ? $mimeTypes[$extension] : 'application/octet-stream';

    // Set the appropriate headers and serve the file
    header('Content-Type: ' . $mimeType);
    readfile($staticFilePath);
    exit;
}

// Include the routes
$routes = require_once '../routes/web.php';

// Get the current URL path
$requestPath = parse_url($requestUri, PHP_URL_PATH);

// Find the matching route
$route = $routes[$requestPath] ?? null;

// Dispatch the route
if ($route) {
    [$controllerName, $methodName] = explode('@', $route);
    $controllerClass = ucfirst(str_replace('Controller', '', $controllerName)) . 'Controller';
    $controllerFilePath = __DIR__ . '/../app/Http/Controllers/' . $controllerClass . '.php';

    // Check if the controller file exists
    if (file_exists($controllerFilePath)) {
        require_once $controllerFilePath;

        // Check if the controller class exists
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass($db);
            $controller->$methodName();
        } else {
            // Handle controller class not found
            echo '404 - Controller class not found';
        }
    } else {
        // Handle controller file not found
        echo '404 - Controller file not found';
    }
} else {
    // Handle 404 - Route not found
    echo '404 - Page not found';
}
?>
