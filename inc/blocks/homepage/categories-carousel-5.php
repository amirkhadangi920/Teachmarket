<?php
	
	$carousel_args 	= array(
		'infinite'          => false,
		'slidesToShow'		=> 5,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#categories-carousel-1 .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 480,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			)
		)

				
	);
	

?>

<section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
	<header class="section-header">
		<h4 class="pre-title">ویژه</h4>
		<h2 class="section-title">دسته های برتر <br>این هفته</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
		<a class="readmore-link" href="#">کاتالوگ کامل</a>
	</header><!-- .section-header -->

	<div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="woocommerce columns-5">
			<div class="products">

				<div class="product-category product first">
					<a href="index.php?page=product-category">
					<img width="224" height="197" alt="All in One PC" src="assets/images/organic/cat-1.png">
						<h2 class="woocommerce-loop-category__title">
							 زیبایی و مراقبت شخصی 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="index.php?page=product-category">
					<img width="224" height="197" alt="Audio &amp; Music" src="assets/images/organic/cat-2.png">
						<h2 class="woocommerce-loop-category__title">
							غذا و نوشیدنی 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="index.php?page=product-category">
					<img width="224" height="197" alt="Cells &amp; Tablets" src="assets/images/organic/cat-3.jpg">
						<h2 class="woocommerce-loop-category__title">
							گیاهان و گیاهان دارویی 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="index.php?page=product-category">
					<img width="224" height="197" alt="Computers &amp; Laptops" src="assets/images/organic/cat-4.png">
						<h2 class="woocommerce-loop-category__title">
							 ورزش و تناسب اندام 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product last">
					<a href="index.php?page=product-category">
					<img width="224" height="197" alt="Desktop PCs" src="assets/images/organic/cat-5.png">
						<h2 class="woocommerce-loop-category__title">
							 مکمل 
						</h2>
					</a>
				</div><!-- .product-category -->

				
			</div><!-- .products -->
		</div><!-- .woocommerce -->
	</div><!-- .product-categories-carousel -->
</section><!-- .section-categories-carousel -->
