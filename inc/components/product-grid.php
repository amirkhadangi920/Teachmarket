<?php require 'inc/components/product-image.php'; ?>
<?php require 'inc/components/product-name.php'; ?>

    <?php
    	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

        if($page=='shop' || $page=='shop-right-sidebar') {
            $column = 5;
            $item = 21;
        }

        else if($page=='shop-listing' || $page=='shop-listing-with-product-sidebar') {
            $column = 4;
            $item = 17;
        }

        else if($page=='shop-extended') {
            $column = 4;
            $item = 17;
        }

        else {
    		$column = 7;
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

                    <div class="hover-area">
                        <a class="button" href="index.php?page=cart">افزودن به سبد خرید</a>
                        <a class="add-to-compare-link" href="index.php?page=compare">افزودن به مقایسه</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->

