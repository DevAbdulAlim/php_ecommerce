<?php require_once 'includes/header.php' ?>

<main>


    <section id="product" class="py-5">
        <div class="container">
            <h3 class="text-center mb-4">Products</h3>
            <p class="text-center text-success"></p>
            <div class="row g-5">
                <div class="col-12 col-sm-3">
                    <form method="post">

                        <h4>Prices</h4>
                        <div class="row">
                            <div class="col-6">
                                <input type="number" class="form-control" name="min_price" value="0" placeholder="0" />
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" name="max_price" value="4545" placeholder="345345" />
                            </div>
                        </div>

                        <br />
                        <h4>Categories</h4>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="laptop" name="category" value="laptop" />
                            <label class="form-check-label" for="laptop">Laptop</label>
                        </div>

                        <br />
                        <h4>Brands</h4>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="hp" name="brand" value="hp" />
                            <label class="form-check-label" for="hp">HP</label>
                        </div>

                        <br />
                        <button type="submit" class="btn btn-secondary">Filter Products</button>
                    </form>
                </div>

                <div class="col-12 col-sm-9">

                    <div class="row g-4">


                        <?php
                        if ($products->rowCount() > 0) {
                            while ($row = $products->fetch(PDO::FETCH_ASSOC)) {
                                extract($row);
                        ?>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card">
                                        <img src="https://computerimporter.com/wp-content/uploads/2023/02/HP-Core-i5-11th-Generation-Laptop-Price-in-Bangladesh.webp" alt="">
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
            </div>
        </div>
    </section>



</main>
<?php require_once 'includes/footer.php' ?>