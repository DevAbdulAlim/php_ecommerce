<?php


// Routes array
$productRoutes = [
    BASE_DIR . 'products' => 'ProductController@getAll',
    BASE_DIR . 'product/detail' => 'ProductController@getSingle',
    BASE_DIR . 'admin/products' => 'ProductController@adminGetAll',
    BASE_DIR . 'admin/product/create/' => 'ProductController@adminCreateSingle',
    BASE_DIR . 'admin/product/update/' => 'ProductController@adminUpdateSingle',
    BASE_DIR . 'admin/product/delete' => 'ProductController@adminDeleteSingle',
];

$userRoutes = [
    BASE_DIR . 'admin/users' => 'UserController@getAll',
    BASE_DIR . 'admin/user/create/' => 'UserController@createSingle',
    BASE_DIR . 'admin/user/update/' => 'UserController@updateSingle',
    BASE_DIR . 'admin/user/delete' => 'UserController@deleteSingle',
];

$orderRoutes = [
    BASE_DIR . 'orders' => 'OrderController@getAll',
    BASE_DIR . 'order/create' => 'OrderController@createSingle',
    BASE_DIR . 'admin/orders' => 'OrderController@adminGetAll',
    BASE_DIR . 'admin/order/create/' => 'OrderController@adminCreateSingle',
    BASE_DIR . 'admin/order/update/' => 'OrderController@adminUpdateSingle',
    BASE_DIR . 'admin/order/delete' => 'OrderController@adminDeleteSingle',
];

$pageRoutes = [
    BASE_DIR . '' => 'PageController@home',
    BASE_DIR . 'contact' => 'PageController@contact',
    BASE_DIR . 'login' => 'PageController@login',
    BASE_DIR . 'register' => 'PageController@register',
    BASE_DIR . 'admin' => 'PageController@adminHome',
    BASE_DIR . 'admin/login' => 'PageController@adminLogin',
    BASE_DIR . 'admin/logout' => 'PageController@adminLogout',
];


$routes = $productRoutes + $userRoutes + $orderRoutes + $pageRoutes;

return $routes;