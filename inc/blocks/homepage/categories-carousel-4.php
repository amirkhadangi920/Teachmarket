<?php
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 6,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#categories-carousel-3 .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 779,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			),
			array(
				'breakpoint'	=> 780,
				'settings'		=> array(
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 5,
					'slidesToScroll'	=> 5
				)
			)
		)
	);
?>

<section class="categorie_carousel_2 section-categories-carousel" id="categories-carousel-3">
	<header class="section-header">
		<h2 class="section-title">کامپیوترها و لپ تاپ ها دسته بندی ها</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
	</header><!-- .section-header -->

	<div class="product-categories-carousel product-categories-3" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="woocommerce columns-6">
			<div class="products">
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-1.png"> 
						<h2 class="woocommerce-loop-category__title">همه در یک کامپیوتر </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-2.png"> 
						<h2 class="woocommerce-loop-category__title">صوتی و آمپر؛ موسیقی</h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-3.png"> 
						<h2 class="woocommerce-loop-category__title">سلول ها و & ؛ قرص</h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-4.png"> 
						<h2 class="woocommerce-loop-category__title">کامپیوترها & لپ تاپ ها </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-5.png"> 
						<h2 class="woocommerce-loop-category__title">رایانه های رومیزی</h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-6.png"> 
						<h2 class="woocommerce-loop-category__title">دوربین های دیجیتال </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-7.png"> 
						<h2 class="woocommerce-loop-category__title">بازی ها &amp; کنسول ها </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-5.png"> 
						<h2 class="woocommerce-loop-category__title">هدفون </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-1.png"> 
						<h2 class="woocommerce-loop-category__title">تفریحات خانگی </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="index.php?page=product-category">
						<img width="224" height="197" alt="" src="assets/images/category/sm-3.png"> 
						<h2 class="woocommerce-loop-category__title">سینمای خانگی &amp; سمعی </h2>
					</a>
				</div>
			</div><!-- .products-->
		</div><!-- .woocommerce -->
	</div>
</section><!-- .section-top-categories -->