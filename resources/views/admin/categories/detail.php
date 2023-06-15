<?php require_once 'includes/header.php'; ?>

<main class="move-right">
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item "><a href="/categories/index.html">Categories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-6 d-flex justify-content-end"><a class="btn btn-success">Add Another +</a></div>
            </div>
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <h1>Add Product</h1>
            <form>
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Product Price</label>
                    <input type="number" class="form-control" id="productPrice" placeholder="Enter product price">
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </section>


</main>

<?php require_once 'includes/footer.php'; ?>