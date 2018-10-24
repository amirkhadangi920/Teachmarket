<?php
    require 'inc/components/product-name.php'; 
	$productImage = array(
		1 => array('product_image' => 'assets/images/organic/sm-1.jpg'),
		2 => array('product_image' => 'assets/images/organic/sm-2.jpg'),
		3 => array('product_image' => 'assets/images/organic/sm-3.jpg'),
		4 => array('product_image' => 'assets/images/organic/sm-4.jpg'),
		5 => array('product_image' => 'assets/images/organic/sm-5.jpg'),
		6 => array('product_image' => 'assets/images/organic/sm-6.jpg'),
		7 => array('product_image' => 'assets/images/organic/sm-7.jpg'),
		8 => array('product_image' => 'assets/images/organic/sm-8.jpg'),
		9 => array('product_image' => 'assets/images/organic/sm-4.jpg')
		
	
	);
	shuffle($productImage);

	$productLabel = array(
		1 => array('product_label' => 'A+'),
		2 => array('product_label' => 'A++'),
		3 => array('product_label' => 'A+'),
		4 => array('product_label' => 'A++'),
		5 => array('product_label' => 'A'),
		6 => array('product_label' => 'A++'),
		7 => array('product_label' => 'A++'),
		8 => array('product_label' => 'A+'),
		9 => array('product_label' => 'A++')
		
	);
	shuffle($productLabel);

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
?>

<?php for ($i=1; $i <=8; $i++) { ?>	
	<div class="landscape-product-card product">
		<div class="media">
			<div class="yith-wcwl-add-to-wishlist">
				<a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
			</div>

			<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
				<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
			</a>

			<div class="media-body">
				<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

					<span class="price">
	                    <ins><span class="amount"> $939.99</span></ins>
	                    <del><span class="amount">$627.99</span></del>
	            	</span><!-- .price -->

					<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

					<div class="ribbon green-label">
						<span><?php echo $productLabel[$i]['product_label'] ?></span>
					</div>

					<div class="techmarket-product-rating">
						<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
						</div> 
						<span class="review-count">(0)</span>
					</div><!-- .techmarket-product-rating -->
				</a>

				<div class="hover-area">
					<a class="button add_to_cart_button" href="index.php?page=cart" >Add to cart</a>
					<a href="index.php?page=compare" class="add-to-compare-link">Compare</a>
				</div><!-- .hover-area -->
			</div><!-- .media-body -->
		</div><!-- .media -->
	</div><!-- .woocommerce-LoopProduct-link -->
<?php } ?>