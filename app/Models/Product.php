<?php

class Product {
    private $conn;
    private $table_name = "products"; // Replace with the actual table name

    public function __construct($db) {
        $this->conn = $db;
    }

    // Retrieve all products
    public function getAllProducts() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function getSingleProducts($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        return $stmt;
    }

    // Other methods...

}

?>