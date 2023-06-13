<?php

include_once '../config/database.php';

// Include the routes
$routes = require_once '../routes/web.php';

// Get the current URL path
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


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
