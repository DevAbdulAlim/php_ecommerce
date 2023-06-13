<?php


// Routes array
$routes = [
    '/others/php_ecommerce/' => 'ProductController@getAll',
    '/others/php_ecommerce/detail' => 'ProductController@getSingle',
    '/others/php_ecommerce/product/create' => 'ProductController@create',
];

return $routes;


?>