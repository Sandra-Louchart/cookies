<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <?php if(isset($_SESSION['cart'])): ?>
            <div class="row">
                <?php foreach($_SESSION['cart'] as $product): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?= $product; ?>.jpg" alt="<?= $catalog[$product]['name']; ?>" class="img-responsive">
                            <figcaption class="caption">
                                <h3><?= $catalog[$product]['name']; ?></h3>
                                <p><?= $catalog[$product]['description']; ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div>Tu n'as rien dans ton panier !</div>
        <?php endif; ?>
    </section>
<?php require 'inc/foot.php'; ?>