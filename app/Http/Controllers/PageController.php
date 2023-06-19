<?php
define('PAGE_DIR', __DIR__ . '/../../../resources/views/');

// Importing Models
require_once __DIR__ . '/../../Models/Product.php';
require_once __DIR__ . '/../../Models/User.php';

// Importing Middlewares
require_once __DIR__ . '/../Middlewares/auth.php';

class PageController
{
    private $productModel;
    private $userModel;

    private $auth;

    public function __construct($db)
    {
        $this->productModel = new Product($db);
        $this->userModel = new User($db);
        $this->auth = new Auth($db);
    }

    public function home()
    {
        $title = "Home";
        // Retrieve all products using the Product model
        $products = $this->productModel->getAllProducts();
        require_once PAGE_DIR . 'index.php';
    }

    public function contact()
    {
        require_once PAGE_DIR . 'contact.php';
    }

    public function adminHome()
    {
        $title = "Dashboard";
        if ($this->auth->authenticate()) {
            require_once PAGE_DIR . 'admin/index.php';
        } else {
            header("Location:" . BASE_DIR . 'admin/login');
        }
    }

    public function adminLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($this->auth->login($email, $password)) {
                header('Location:' . BASE_DIR . 'admin');
            } else {
                header('Location:' . BASE_DIR . 'admin/login');
            }
        }
        require_once PAGE_DIR . 'admin/login.php';
    }

    public function adminLogout()
    {
        $this->auth->logout();
        header('Location:' . BASE_DIR . 'admin/login');
    }
}
