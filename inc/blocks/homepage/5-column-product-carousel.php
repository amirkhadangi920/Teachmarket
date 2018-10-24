<?php
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 5,
		'slidesToScroll'	=> 5,
		'dots'				=> true,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#section-products-carousel-5 .custom-slick-nav',
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

<section class="rating-product section-products-carousel" id="section-products-carousel-5">
	<header class="section-header">
		<h2 class="section-title">Recommended For You</h2>
		<nav class="custom-slick-nav"></nav>
	</header><!-- .section-header -->

	<div class="products-carousel"  data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-5">
				<?php require 'inc/components/product-item-1.php'; ?>
			</div><!-- .woocommerce -->
		</div><!-- .row -->
	</div><!-- .products-carousel -->
</section><!-- .section-products-carousel -->