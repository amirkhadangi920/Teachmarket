<?php
require 'inc/components/product-image.php';
$column = 5;
?>

<section class="section-products-with-image">
	<header class="section-header">
		<div class="col-full">
			<div class="row">
				<div class="product-info">
					<h2 class="section-title">کامپیوتر های رومیزی</h2>
					<div class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </div>
				</div>
				<div class="product-image">
					<img alt="" src="assets/images/products/landing-1.png">
				</div>
			</div>
		</div>
	</header><!-- .section-header -->

	<div class="woocommerce columns-5">
		<div class="products">
            <?php for ($i=1; $i < 6; $i++) { ?>
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
                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                        <span class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">هزار تومان</span>570</span>
                        </span><!-- .price -->

                        <h2 class="woocommerce-loop-product__title">بی سیم NXTG بی سیم</h2>
                    </a><!-- .woocommerce-LoopProduct-link -->
                    <div class="techmarket-product-rating"><div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> از 5</span></div> <span class="review-count">(0)</span></div>

                    <div class="hover-area">
                        <a class="button" href="index.php?page=cart">افزودن به سبد خرید</a>
                        <a class="add-to-compare-link" href="index.php?page=compare">افزودن برای مقایسه</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->

	<a href="index.php?page=shop" class="load-more-button">فروشگاه تمام رایانه های رومیزی</a>
</section><!-- .section-products-with-image -->

<section class="section-products-with-image">
	<header class="section-header">
		<div class="col-full">
			<div class="row">
				<div class="product-info">
					<h2 class="section-title">لپ تاپ های بازی</h2>
					<div class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </div>
				</div>
				<div class="product-image">
					<img alt="" src="assets/images/products/landing-1.1.png">
				</div>
			</div>
		</div>
	</header><!-- .section-header -->

	<div class="woocommerce columns-5">
		<div class="products">
            <?php for ($i=1; $i < 11; $i++) { ?>
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
                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                        
                        <span class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">هزار تومان</span>570</span>
                        </span><!-- .price -->

                        <h2 class="woocommerce-loop-product__title">بی سیم NXTG بی سیم</h2>
                    </a><!-- .woocommerce-LoopProduct-link -->
                    <div class="techmarket-product-rating"><div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span></div>

                    <div class="hover-area">
                        <a class="button" href="index.php?page=cart">افزودن به سبد خرید</a>
                        <a class="add-to-compare-link" href="index.php?page=compare">افزودن برای مقایسه</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->
	

	<a href="index.php?page=shop" class="load-more-button">فروشگاه تمام رایانه های رومیزی</a>
</section><!-- .section-products-with-image -->

<section class="section-products-with-image">
	<header class="section-header">
		<div class="col-full">
			<div class="row">
				<div class="product-info">
					<h2 class="section-title">اکسسوری</h2>
					<div class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </div>
				</div>
				<div class="product-image">
					<img alt="" src="assets/images/products/landing-1.2.png">
				</div>
			</div>
		</div>
	</header><!-- .section-header -->

	<div class="woocommerce columns-7">
		<div class="products">
            <?php for ($i=1; $i < 8; $i++) { ?>
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
                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                        
                        <span class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>57.99</span>
                        </span><!-- .price -->
                        
                        <h2 class="woocommerce-loop-product__title">بی سیم NXTG بی سیم</h2>
                    </a><!-- .woocommerce-LoopProduct-link -->
                    <div class="techmarket-product-rating"><div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span></div>

                    <div class="hover-area">
                        <a class="button" href="index.php?page=cart">افزودن به سبد خرید</a>
                        <a class="add-to-compare-link" href="index.php?page=compare">افزودن برای مقایسه</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->

	<a href="index.php?page=shop" class="load-more-button">فروشگاه تمام رایانه های رومیزی</a>
</section><!-- .section-products-with-image -->