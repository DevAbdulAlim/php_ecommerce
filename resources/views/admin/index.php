<?php require_once 'includes/header.php'; ?>

<main class="move-right">
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card total-card">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-user"></i>
                            <h5>500</h5>
                            <h4>Customers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card total-card">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <h5>1000</h5>
                            <h4>Orders</h4>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card total-card">
                        <div class="card-body text-center">

                            <i class="fa-solid fa-bag-shopping"></i>
                            <h5>5000</h5>
                            <h4>Products</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card total-card">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <h5>50</h5>
                            <h4>Categories</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sales Chart -->
    <section>
        <div class="container">
            <div id="chart_div" style="height: 450px;"></div>
        </div>
    </section>

    <!--Recent Orders-->
    <section class="py-5">
        <div class="container">
            <h4>Recent Orders</h4>

            <table class="table">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td>John Doe</td>
                        <td>Widget A</td>
                        <td>$10.00</td>
                        <td>June 10, 2023</td>
                        <td>Processing</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Initiate Shipment</a></li>
                                    <li><a class="dropdown-item" href="#">Completed</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Cancel</a></li>


                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>12346</td>
                        <td>Jane Smith</td>
                        <td>Widget B</td>
                        <td>$15.00</td>
                        <td>June 9, 2023</td>
                        <td>Shipped</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Initiate Shipment</a></li>
                                    <li><a class="dropdown-item" href="#">Completed</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Cancel</a></li>


                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>12346</td>
                        <td>Jane Smith</td>
                        <td>Widget B</td>
                        <td>$15.00</td>
                        <td>June 9, 2023</td>
                        <td>Canceled</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Initiate Shipment</a></li>
                                    <li><a class="dropdown-item" href="#">Completed</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Cancel</a></li>


                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>12346</td>
                        <td>Jane Smith</td>
                        <td>Widget B</td>
                        <td>$15.00</td>
                        <td>June 9, 2023</td>
                        <td>Shipped</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Initiate Shipment</a></li>
                                    <li><a class="dropdown-item" href="#">Completed</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Cancel</a></li>


                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>12346</td>
                        <td>Jane Smith</td>
                        <td>Widget B</td>
                        <td>$15.00</td>
                        <td>June 9, 2023</td>
                        <td>Shipped</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Initiate Shipment</a></li>
                                    <li><a class="dropdown-item" href="#">Completed</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Cancel</a></li>


                                </ul>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>

</main>

<?php require_once 'includes/footer.php'; ?>