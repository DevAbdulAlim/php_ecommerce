<?php require_once __DIR__ . '/../includes/header.php' ?>


<main class="py-5">
    <div class="container">
        <div class="row g-5">

            <section class="col-2" id="sidebar">
                <?php include __DIR__ . '/includes/sidenav.php'; ?>
            </section>

            <section class="col-10">
                <?php echo $content ?>
            </section>
        </div>

    </div>
</main>
<?php require_once __DIR__ . '/../includes/header.php' ?>