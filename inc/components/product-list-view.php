<?php require 'inc/components/product-image.php'; ?>

<div class="woocommerce columns-1">
    <div class="products">
        <?php for ($i=1; $i < 7; $i++) { ?>
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
        <div class="product list-view <?php echo $classes; ?>">
            <div class="media">
                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                <div class="media-body">
	                <div class="product-info">
	  					<div class="yith-wcwl-add-to-wishlist">
			                <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
			            </div><!-- .yith-wcwl-add-to-wishlist --> 
			            
						<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
							<h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
							<div class="techmarket-product-rating">
								<div title="Rated 5.00 out of 5" class="star-rating">
									<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
								</div> 
								<span class="review-count">(1)</span>
							</div>
						</a><!-- .woocommerce-LoopProduct-link -->

						<div class="brand">
							<a href="#">
							<img alt="galaxy" src="assets/images/brands/5.png"></a>
						</div><!-- .brand -->

						<div class="woocommerce-product-details__short-description">
							<ul>
								<li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
								<li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
								<li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
								<li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
							</ul>
						</div><!-- .woocommerce-product-details__short-description -->
					</div><!-- .product-info -->
					
					<div class="product-actions">
						<div class="availability">
							Availability: 
							<p class="stock in-stock">1000 in stock</p>
						</div>

						<span class="price">
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
						</span><!-- .price -->

						<a class="button add_to_cart_button" href="index.php?page=cart">Add to Cart</a>
						
						<a class="add-to-compare-link" href="index.php?page=compare">Add to compare</a>
					</div><!-- .product-actions -->
				</div><!-- .media-body -->
			</div><!-- .media -->
        </div><!-- .product -->
    <?php } ?>
    </div><!-- .products -->
</div><!-- .woocommerce -->

