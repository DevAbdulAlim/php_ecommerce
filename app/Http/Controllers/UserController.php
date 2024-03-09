<?php
define('PAGE_DIR', __DIR__ . '/../../../resources/views/');

// Importing Models
require_once __DIR__ . '/../../Models/User.php';

// Importing Middlewares
require_once __DIR__ . '/../Middlewares/auth.php';

class UserController
{
    private $userModel;

    private $auth;

    public function __construct($db)
    {
        $this->userModel = new User($db);
        $this->auth = new Auth($db);
    }

    public function dashboard()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/dashboard.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }

    public function orders()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/orders.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }

    public function wishlist()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/wishlist.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }


    public function address()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/address.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }

    public function payments()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/payments.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }
    public function returns()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/returns.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }
    public function reviews()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/reviews.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }

    public function profile()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/profile.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }

    public function delete()
    {
        $title = "Home";
        $content = '';
        ob_start();
        require PAGE_DIR . '/user/delete.php';
        $content = ob_get_clean();
        require PAGE_DIR . 'user/layout.php';
    }



    public function getAll()
    {
        $title = "Home";

        // Retrieve 

        require_once PAGE_DIR . 'user/index.php';
    }


}