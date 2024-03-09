<?php require_once __DIR__ . '/../includes/header.php' ?>


<main>
    <div class="container h-100">
        <div class="row g-5 h-100">

            <section class="col-2 h-100 py-4" id="sidebar">
                <?php include __DIR__ . '/includes/sidenav.php'; ?>
            </section>

            <section class="col-10 py-4">
                <?php echo $content ?>
            </section>
        </div>

    </div>
</main>
<?php require_once __DIR__ . '/../includes/header.php' ?>