<?php include 'includes/header.php'; ?>

<main class="container my-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <p class="fs-5 mb-4">Have a question, suggestion, or just want to say hello? Fill out the form below to get
                in
                touch with us.
            </p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>