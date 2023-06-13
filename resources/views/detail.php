<?php
/*
include_once 'init.php';
include_once 'Product.php';
if (isset($_GET['id'])) {
    $productID = $_GET['id'];


    $product = new Product($db);
    $stmt = $product->getOne($productID);


    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($product) {
        // Display the product details
        echo "Product ID: " . $product['id'] . "<br>";
        echo "Product Name: " . $product['name'] . "<br>";
        echo "Price: " . $product['price'] . "<br>";
        echo "Description: " . $product['description'] . "<br>";
    } else {
        // Handle case when no product found
        echo "Product not found.";
    }
} else {
    echo "No product ID specified.";
}
*/

?>
<h1>hi</h1>