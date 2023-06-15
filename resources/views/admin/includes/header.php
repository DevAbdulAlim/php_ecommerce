<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PhpEcommerece |
        <?php echo $title ?>
    </title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fontawsome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Main CSS Link -->
    <link rel="stylesheet" href="<?php echo BASE_DIR; ?>resources/css/admin-style.css">

</head>

<body>
    <header>
        <!-- Main Nav -->
        <nav class="move-right big-navbar py-3 ">
            <div class="container d-flex justify-content-between">
                <button type="button" class=" d-lg-none btn btn-primary" onclick="toggleNav()">&#9776</button>
                <form class="d-flex search-bar" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; top: 50%;"></i>
                </form>


                <div class="dropdown-center d-flex justify-content-end">
                    <span class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" height="35px" width="35px" alt="">
                    </span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="admin/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Side Nav -->
        <nav id="mySlidenav" class=" slidenav">

            <div class="logo">
                <img src="https://png.pngtree.com/template/20190316/ourmid/pngtree-water-logo-image_79169.jpg" alt="logo" height="45px" width="45px">
                <span class="logo-title">Creative</span>
            </div>

            <hr style="color: white;">

            <ul>
                <li><a href="/"><span class="mx-2"><i class="bi bi-grid-fill"></i></i></span>Dashboard</a></li>
                <li><a href="users/index.html"><span class="mx-2"><i class="bi bi-person-fill"></i></span>Users</a></li>
                <li><a href="orders/index.html"><span class="mx-2"><i class="bi bi-cart-fill"></i></span>Orders</a></li>
                <li><a href="categories/index.html"><span class="mx-2"><i class="bi bi-briefcase-fill"></i></span>Categories</a></li>
                <li><a href="products/index.html"><span class="mx-2"><i class="bi bi-bag-fill"></i></span>Products</a>
                </li>
                <li class="mydropdown">
                    <a href="#">Others &rarr;</a>
                    <div class="mydropdown-content">
                        <a href="#" class="back-btn">&larr; Back</a>
                        <ul>
                            <li><a href="#">Option 1</a></li>
                            <li><a href="#">Option 2</a></li>
                            <li><a href="#">Option 3</a></li>
                            <li><a href="#">Option 4</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </nav>

    </header>