<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Каталог</h2>
                        <div class="panel-group category-products">
                            <?php foreach ($categories as $categoryItems): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                    href="/category/<?php echo $categoryItems['id']; ?>"
                                                    class="<?php if ($categoryId == $categoryItems['id']) echo 'active'; ?>"><?php echo $categoryItems['name']; ?></a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="shipping text-center">
                            <img src="/template/images/home/shipping.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Товары</h2>
                        <?php foreach ($categoryProducts as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                            <h2><?php echo $product['price']; ?>$</h2>
                                            <p>
                                                <?php echo $product['name']; ?>
                                            </p>
                                            <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>" ><i
                                                        class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <a href="/product/<?php echo $product['id']; ?>">
                                                    <h2><?php echo $product['price']; ?>$</h2>
                                                    <p>
                                                        <?php echo $product['name']; ?>
                                                    </p>
                                                </a>
                                                <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>" ><i
                                                            class="fa fa-shopping-cart"></i>В корзину</a>
                                            </div>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt=""/>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Постраничная навигация -->
                        <?php echo $pagination->get(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>