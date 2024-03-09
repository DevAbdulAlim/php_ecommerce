<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <?php
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4><?php echo $category['name']; ?></h4>
                                <p><?php echo $category['description']; ?></p>
                                <a href="#" class="btn btn-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="col-12">
                    <p>No categories found.</p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>