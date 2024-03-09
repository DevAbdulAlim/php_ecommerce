<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpEcommerece |
        <?php echo $title ?>
    </title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo BASE_DIR; ?>resources/css/style.css">
</head>

<body>
    <header class="sticky-top">
        <nav class="navbar bg-body-tertiary shadow-sm">
            <div class="container flex-nowrap">
                <div class="d-flex">
                    <a class="navbar-brand" href="<?php echo BASE_DIR ?>"><i
                            class="fa-brands fa-shopify"></i>shopify</a>

                    <div class="d-none d-md-block">
                        <button id="myDropdownBtn" onclick="myDropdown()" class="btn btn-light">
                            <i class="fa-solid fa-grip-vertical"></i>
                            Categories
                        </button>
                        <div id="myDropdown" class="myDropdown mt-2">
                            <div class="tab">
                                <button>All Categories</button>
                                <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'first')">
                                    Laptop
                                </button>
                                <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'second')">
                                    Comptuer
                                </button>
                            </div>
                            <div id="first" class="tabcontent w-100">
                                <div class="col-6">
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                </div>
                                <div class="col-6">
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                    <p>laptop-sub</p>
                                </div>

                            </div>
                            <div id="second" class="tabcontent w-100">
                                <div class="col-6">
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                </div>
                                <div class="col-6">
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                    <p>Desktop-sub</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="d-md-none nav-link me-4" href=""><i class="fa-solid fa-cart-shopping p-2"></i>0</a>

                <form class="d-none d-lg-flex w-50" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />

                </form>
                <form class="d-none d-md-flex d-lg-none" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />

                </form>
                <div class="d-none d-md-flex flex-nowrap">
                    <a class="nav-link me-4" href="" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                            class="fa-solid fa-cart-shopping p-2"></i></a>
                    <ul class="d-flex justify-content-end align-items-center">
                        <li class="me-4">
                            <a class="nav-link" href="#">
                                <i class="fas fa-bell"></i>
                            </a>
                        </li>
                        <li class="me-4">
                            <a class="nav-link" href="#">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </li>
                        <li class="me-4">
                            <a class="nav-link" href="<?php echo BASE_DIR ?>user">
                                <i class="fas fa-user"></i>
                            </a>

                        </li>
                    </ul>


                </div>
            </div>
        </nav>
        <nav
            class="d-flex container justify-content-between mobile-nav d-block d-md-none fixed-bottom shadow p-3 rounded">
            <a href="#"><i class="fa-solid fa-house d-block text-center"></i>Home</a>
            <a href="#"><i class="fa-solid fa-magnifying-glass d-block text-center"></i>Search</a>
            <a href="#"><i class="fa-solid fa-list d-block text-center"></i>Categories</a>
            <a href="#"><i class="fa-solid fa-user d-block text-center"></i>Profile</a>
        </nav>
    </header>