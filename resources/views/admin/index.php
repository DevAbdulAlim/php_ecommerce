<?php
include '../init.php';
include 'admin.php';

$admin = new Admin($db);

if (!$admin->isLoggedIn()){
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logout'])) {
        $admin->logout();
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome, Admin!</h1>
    <!-- Add your admin page content here -->

    <form method="post" action="">
        <button type="submit" name="logout">Logout</button>
</form>
</body>
</html>


