<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php
if (isset($_GET['id'])) {
    $_SESSION['cart'][] = $_GET['id'];
}
?>
<section class="cookies container-fluid">
    <?php if(isset($_SESSION['loginname'])): ?>
        <div class="row">
            <?php foreach ($catalog as $id => $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            <a href="index.php?id=<?= $id; ?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    <?php else: ?>
        <a href="login.php">Log in</a>
    <?php endif; ?>
</section>
<?php require 'inc/foot.php'; ?>
