<?php require_once 'includes/header.php' ?>

<main>
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                if ($single_product) {

                    $product = $single_product->fetch(PDO::FETCH_ASSOC);
                    if ($product) { ?>
                        <div class="col-12 col-md-6">
                            <div class="d-flex" style="justify-content: center">
                                <img height="350px" maxWidth="350px" src="product_image_url" alt="" />
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h3><?php echo $product['name'] ?></h3>
                            <p>
                                <strong>Category:</strong> Product Category
                            </p>
                            <p>
                                <strong>Brand:</strong> HP
                            </p>
                            <p>
                                <strong>Description:</strong> <?php echo $product['description'] ?>
                            </p>
                            <h5><strong>Price:</strong><?php echo $product['price'] ?></h5>
                            <form id="add-to-cart-form" method="post">
                                <input type="hidden" name="product_id" value="product_id" />
                                <input class="form-control mt-4" type="number" name="quantity" min="1" value="1" max="product_stock" style="max-width: 100px" />
                                <button type="submit" class="btn btn-primary mt-4">Add to cart</button>
                            </form>
                        </div>
                <?php
                    } else {
                        // Handle case when no product found
                        echo "Product not found.";
                    }
                } else {
                    echo "No product ID specified.";
                }


                ?>
            </div>
            <div class="row pt-5">
                <div class="col-12">
                    <a href="#description" class="btn btn-light active">Description</a>
                    <a href="#additional" class="btn btn-light">Additional Information</a>
                    <a href="#reviews" class="btn btn-light">Reviews</a>
                    <div id="description" class="py-4">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, minima nemo, expedita
                            ipsum
                            numquam aliquid repudiandae iste quaerat distinctio recusandae cum placeat dicta tempore
                            repellat, asperiores ratione inventore dolor. Laborum, veniam pariatur illum officiis
                            aspernatur
                            ratione. Consectetur quae nostrum cum nulla porro fuga ipsa id quas? Illo repellat deserunt
                            nobis quos, molestias vitae fugiat veritatis dignissimos reprehenderit expedita sunt
                            consequatur, facere itaque quas! A quidem ratione temporibus, dolor ea enim sunt, dolorum
                            voluptates soluta architecto mollitia itaque illo vero rem totam nisi hic delectus porro
                            nobis
                            non earum laboriosam at. Hic neque minus necessitatibus soluta, quam in at nam illum.</p>
                    </div>
                    <p id="additional">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus quibusdam
                        architecto quos aspernatur numquam dolor necessitatibus quod aperiam sequi natus modi, quia qui,
                        voluptas reiciendis mollitia magnam ipsum obcaecati. Impedit, odio esse quo, eius aspernatur
                        quis
                        dolores dolore eum nobis iste inventore unde, modi error. Ea labore, optio odio rem dolor est
                        minus
                        dicta in. Incidunt, laudantium? Voluptas placeat, corrupti rem consequatur obcaecati similique
                        eligendi architecto ducimus. Dignissimos, molestias perspiciatis id ex, hic quaerat veniam,
                        velit
                        facere assumenda illo quas quo voluptas provident laborum odio. Nulla, blanditiis? Ipsam,
                        quibusdam
                        neque sapiente expedita veritatis aperiam praesentium sed nemo saepe totam aspernatur!</p>
                    <div id="reviews">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, voluptatum?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, odio.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, qui.</p>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <h3>Related Products</h3>
                <!-- Render related products here -->
            </div>
        </div>
    </section>
    <?php require_once 'includes/cart-sidebar.php' ?>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>

<?php require_once 'includes/footer.php' ?>