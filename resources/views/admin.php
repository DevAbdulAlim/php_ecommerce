<?php


class Admin {
    private $conn;
    private $table_name = "users";

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($email, $password) {
        $query = "SELECT * FROM " .$this->table_name . " WHERE email = :email AND password = :password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $_SESSION['admin'] = true;
            return true;
        } else {
            return false;
        }
    }

    public function isLoggedIn() {
        return isset($_SESSION['admin']) && $_SESSION['admin'] === true;
    }

    public function logout() {
        session_destroy();
        header('Location: login.php');
        exit();
    }
}

?>