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
                            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                            <div class="card-body">
                                <h4><?php echo $name; ?></h4>
                                <p><?php echo $description; ?></p>
                                <p><?php echo $price; ?></p>
                                <a href="product/detail?id=<?php echo $id; ?>" class="btn btn-primary">View Details</a>
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