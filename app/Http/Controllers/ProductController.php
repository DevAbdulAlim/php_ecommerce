<?php
require_once __DIR__ . '/../../Models/Product.php';

class ProductController {
    private $productModel;

    public function __construct($db) {
        // Create an instance of the Productmodel and pass database connection 
        $this->productModel = new Product($db);
    }

    public function getAll() {
        // Retrieve all products using the Product model
        $products = $this->productModel->getAllProducts();

        // Load the index view and pass the products
        require_once __DIR__. '/../../../resources/views/index.php';
    }

    public function getSingle() {
        require_once 'app/views/detail.php';
    }


}


?>