<?php

	$carousel_single_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> false,
		'asNavFor'          => '#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper'
	);
	
	$carousel_gallery_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 4,
		'slidesToScroll'    => 1,
		'dots'				=> false,
		'arrows'			=> true,
		'vertical'			=> true,
		'verticalSwiping'	=> true,
		'focusOnSelect'		=> true,
		'touchMove'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-up"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-down"></i></a>',
		'asNavFor'          => '#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper',
		'responsive'		=> array(
			
			array(
				'breakpoint'	=> 765,
				'settings'		=> array(
					'vertical'			=> false,
					'horizontal'		=> true,
					'verticalSwiping'	=> false,
					'slidesToShow'		=> 4
				)
			)
			
		)

	);


?>


<div class="product-images-wrapper thumb-count-4"> 
	<span class="onsale">-<span class="woocommerce-Price-amount amount">
		<span class="woocommerce-Price-currencySymbol">$</span>242.99</span>
	</span><!-- .onsale -->

	<div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
		<div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
				<a href="#" class="woocommerce-product-gallery__trigger">🔍</a> 
				<figure class="woocommerce-product-gallery__wrapper ">
				
					<div data-thumb="assets/images/products/sm-card-1.jpg" class="woocommerce-product-gallery__image">
						<a href="assets/images/products/big-card.jpg" tabindex="0">
							<img width="600" height="600" src="assets/images/products/big-card.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="">
						</a>
					</div>

					<div data-thumb="assets/images/products/sm-card-3.jpg" class="woocommerce-product-gallery__image">
						<a href="assets/images/products/big-card-2.jpg" tabindex="-1">
							<img width="600" height="600" src="assets/images/products/big-card-2.jpg" class="attachment-shop_single size-shop_single" alt="">
						</a>
					</div>

					<div data-thumb="assets/images/products/sm-card-2.jpg" class="woocommerce-product-gallery__image">
						<a href="assets/images/products/big-card-1.jpg" tabindex="-1">
							<img width="600" height="600" src="assets/images/products/big-card-1.jpg" class="attachment-shop_single size-shop_single" alt="">
						</a>
					</div>

					<div data-thumb="assets/images/products/deals-sm-5.jpg" class="woocommerce-product-gallery__image">
						<a href="assets/images/products/big-4.jpg" tabindex="-1">
							<img width="600" height="600" src="assets/images/products/big-4.jpg" class="attachment-shop_single size-shop_single" alt=""> 				</a>
					</div>

					<div data-thumb="assets/images/products/sm-card-2.jpg" class="woocommerce-product-gallery__image">
						<a href="assets/images/products/big-card-2.jpg" tabindex="-1">
							<img width="600" height="600" src="assets/images/products/big-card-1.jpg" class="attachment-shop_single size-shop_single" alt="" >
						</a>
					</div>
			
				</figure>
			</div><!-- .woocommerce-product-gallery -->
		</div><!-- .techmarket-single-product-gallery-images -->

		<div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>"> 
			<figure class="techmarket-single-product-gallery-thumbnails__wrapper">
			 
				<figure data-thumb="assets/images/products/sm-card-1.jpg" class="techmarket-wc-product-gallery__image">
					<img width="180" height="180" src="assets/images/products/sm-card-1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
				</figure>

				<figure data-thumb="assets/images/products/sm-card-3.jpg" class="techmarket-wc-product-gallery__image">
					<img width="180" height="180" src="assets/images/products/sm-card-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
				</figure>

				<figure data-thumb="assets/images/products/sm-card-2.jpg" class="techmarket-wc-product-gallery__image">
					<img width="180" height="180" src="assets/images/products/sm-card-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
				</figure>

				<figure data-thumb="assets/images/products/big-4.jpg" class="techmarket-wc-product-gallery__image">
					<img width="180" height="180" src="assets/images/products/big-4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" >
				</figure>

				<figure data-thumb="assets/images/products/sm-card-2.jpg" class="techmarket-wc-product-gallery__image">
					<img width="180" height="180" src="assets/images/products/sm-card-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
				</figure>
			</figure><!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
		</div><!-- .techmarket-single-product-gallery-thumbnails -->
	</div><!-- .techmarket-single-product-gallery -->
</div><!-- .product-images-wrapper -->