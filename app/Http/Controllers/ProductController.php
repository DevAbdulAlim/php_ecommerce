<?php
define('PAGE_DIR', __DIR__. '/../../../resources/views/');
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
        require_once PAGE_DIR . 'products.php';
    }

    public function getSingle() {
        $single_product = null;
        // Getting the product id to find it
        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            // Retrieve a single product using the Product model
            $single_product = $this->productModel->getSingleProducts($id);
        }
        require_once PAGE_DIR . 'detail.php';
    }


}


?>