<?php require 'inc/components/product-image.php'; ?>

<div class="woocommerce columns-1">
    <div class="products">
        <?php for ($i=1; $i < 10; $i++) { ?>
        <?php
                if ( empty( $loop ) ) {
                    $loop = 0;
                }
                $loop++;
                $classes = '';
                if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
                    $classes = 'first ';
                }
                if ( 0 === $loop % $column ) {
                    $classes = 'last';
                }
            ?>
        <div class="product list-view-small <?php echo $classes; ?>">
            <div class="media">
                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                <div class="media-body">
	                <div class="product-info">
	  					<div class="yith-wcwl-add-to-wishlist">
			                <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> افزودن به لیست دلخواه</a>
			            </div><!-- .yith-wcwl-add-to-wishlist --> 
			            
						<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
							<h2 class="woocommerce-loop-product__title">60UH6150 60 اینچ 4K فوق العاده HD هوشمند تلویزیون LED</h2>
							<div class="techmarket-product-rating">
								<div title="Rated 5.00 out of 5" class="star-rating">
									<span style="width:100%"><strong class="rating">5.00</strong> از 5</span>
								</div> 
								<span class="review-count">(1)</span>
							</div>
						</a><!-- .woocommerce-LoopProduct-link -->

						<div class="woocommerce-product-details__short-description">
							<ul>
								<li>فایروال هوشمند CUJO امنیت اینترنت در سطح کسب و کار را برای محافظت از تمامی دستگاه های خانگی خود به ارمغان می آورد</li>
								<li>امنیت اینترنت: شبکه و دستگاه های هوشمند خود را در برابر هک ها، بدافزارها و تهدیدات اینترنتی محافظت کنید</li>
								<li>برنامه تلفن همراه: فعالیت شبکه سیمی و بی سیم خود را با یک برنامه آیفون و یا براق براق نظارت کنید</li>
								<li>CUJO با روتر بی سیم خود را با کابل اترنت متصل می کند. CUJO با Luma سازگار نیست و Google Wifi Mesh را پشتیبانی نمی کند. CUJO با حالت Eero در Bridge کار می کند.</li>
							</ul>
						</div><!-- .woocommerce-product-details__short-description -->
					</div><!-- .product-info -->

					<div class="product-actions">
						<span class="price">
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>730.00</span>
						</span><!-- .price -->
						
						<a class="button add_to_cart_button" href="index.php?page=cart">افزودن به سبد خرید</a>

						<a class="add-to-compare-link" href="index.php?page=compare">افزودن با مقایسه</a>
					</div><!-- .product-actions -->
				</div><!-- .media-body -->
			</div><!-- .media -->
        </div><!-- .product -->
    <?php } ?>
    </div><!-- .products -->
</div><!-- .woocommerce -->

