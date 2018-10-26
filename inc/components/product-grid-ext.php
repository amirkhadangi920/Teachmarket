<?php require 'inc/components/product-image.php'; ?>
<?php require 'inc/components/product-name.php'; ?>
<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    if($page=='shop' || $page=='shop-right-sidebar') {
        $column=5;
        $item = 21;
    }else if($page=='shop-listing' || $page=='shop-listing-with-product-sidebar') {
        $column = 4;
        $item = 17;
    }else if($page=='shop-extended') {
        $column = 4;
        $item = 17;
    }else {
        $column= 7;
        $item = 22;
    }
    
?>

<div class="woocommerce columns-<?php echo $column; ?>">
    <div class="products">
        <?php for ($i=1; $i < $item; $i++) { ?>
            <?php
                if ( empty( $loop ) ) {
                    $loop = 0;
                }
                $loop++;
                $classes = '';
                if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
                    $classes = 'first';
                }
                if ( 0 === $loop % $column ) {
                    $classes = 'last';
                }
            ?>

            <div class="product <?php echo $classes; ?>">
                <div class="yith-wcwl-add-to-wishlist">
                     <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> افزودن به لیست دلخواه</a>
                </div><!-- .yith-wcwl-add-to-wishlist -->

                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
                    <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                    
                    <span class="price">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>800.00</span>
                    </span>

                    <h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>
                </a><!-- .woocommerce-LoopProduct-link -->

                <div class="techmarket-product-rating">
                    <div title="Rated 5.00 out of 5" class="star-rating">
                        <span style="width:100%"><strong class="rating">5.00</strong> از 5</span>
                    </div>

                    <span class="review-count">(1)</span>
                </div><!-- .techmarket-product-rating -->

                <span class="sku_wrapper">SKU: <span class="sku">5487FB8/13</span></span>

                <div class="woocommerce-product-details__short-description">
                    <ul>
                        <li>بلندگوهای چند رسانه ای</li>
                        <li>حداکثر 120 وات</li>
                        <li>ساب ووفر جلو</li>
                        <li>نرخ بازخوانی: 120Hz (موثر)</li>
                        <li>نور پس زمینه: چراغ</li>
                        <li>عملکرد هوشمند: بله، webOS 3.0</li>
                        <li>ابعاد (W x H x D): تلویزیون بدون پایه: 43.5 "x 25.4" x 3.0 "، تلویزیون با پایه: 43.5" x 27.6 "x 8.5"</li>
                        <li>ورودی: 3 HMDI، 2 USB، 1 RF، 1 کامپوننت، 1 کامپوزیت، 1 نوری، 1 RS232C، 1 اترنت</li>
                    </ul>
                </div><!-- .woocommerce-product-details__short-description -->
                
                <a class="button product_type_simple add_to_cart_button" href="index.php?page=cart" >افزودن به سبد خرید</a>
                <a class="add-to-compare-link" href="index.php?page=compare">افزودن به مقایسه</a>
            </div><!-- .product -->
        <?php } ?>
    </div><!-- .products -->
</div><!-- .woocommerce -->
