<?php require_once 'includes/header.php'; ?>

<main class="move-right">
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-6 d-flex justify-content-end"><a href="/categories/detail.html" class="btn btn-success">New +</a></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Product 2</td>
                        <td>Description 2</td>
                        <td>$19.99</td>
                        <td>
                            <a href="/categories/detail.html" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>Description 2</td>
                        <td>$19.99</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>Description 2</td>
                        <td>$19.99</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>Product 2</td>
                        <td>Description 2</td>
                        <td>$19.99</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>Description 2</td>
                        <td>$19.99</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>Description 2</td>
                        <td>$19.99</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Product 2</td>
                        <td>Description 2</td>
                        <td>$19.99</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more rows for other products as needed -->
                </tbody>
            </table>
        </div>
    </section>
    <br>
    <!--Pagination-->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</main>

<?php require_once 'includes/footer.php'; ?>