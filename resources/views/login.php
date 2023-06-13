<?php
include '../init.php';
include 'admin.php';
$admin = new Admin($db);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($admin->login($email, $password)) {
        header('Location: index.php');
        exit();
    } else {
        echo "Invalid username or password";
    }
}


?>




<form method="POST" action="">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>