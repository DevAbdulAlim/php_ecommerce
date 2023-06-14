<?php
class Auth {
    private $conn;
    private $table_name = "users";
    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($email, $password) {
        $query = "SELECT id, email, password FROM " . $this->table_name . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $storedPassword = $row['password'];


            // I used bcrypt password hasing algorithm 
            if (password_verify($password, $storedPassword)) {
                $_SESSION['admin'] = true;
                $_SESSION['user_id'] = $row['id'];
                return true;
            }
        }
        return false;
    }

    public function authenticate() {
        if (isset($_SESSION['admin']) && $_SESSION['admin'] === true && isset($_SESSION['user_id'])) {
            $userId = $_SESSION['user_id'];
            // Perform additional varification of the user ID, such as checking against the database
            return true;
        }
        return false;
    }

    public function logout(){
        session_destroy();
        header('Location:' . BASE_DIR . 'admin/login');
        exit();
    }
}

