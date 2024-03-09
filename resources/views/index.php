<?php require_once 'includes/header.php' ?>
<main>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Welcome to Our Ecommerce Store</h1>
                <p>Discover the latest trends and shop your favorite brands.</p>
                <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <?php
                if ($products->rowCount() > 0) {
                    while ($row = $products->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="https://computerimporter.com/wp-content/uploads/2023/02/HP-Core-i5-11th-Generation-Laptop-Price-in-Bangladesh.webp"
                            alt="">
                        <div class="card-body">
                            <h4>
                                <?php echo $name ?>
                            </h4>
                            <p>
                                <?php echo $description ?>
                            </p>
                            <p>
                                <?php echo $price ?>
                            </p>
                            <a href="product/detail?id=1" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    ?>
                <div class="col-12">
                    <p>No products found.</p>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

</main>
<?php require_once 'includes/footer.php' ?>