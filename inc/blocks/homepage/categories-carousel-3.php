<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	if($page=='home-v2') {
		$column = 7;
		$carousel_args 	= array(
			'infinite'          => false,
			'slidesToShow'		=> 7,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#categories-carousel-3 .custom-slick-nav',
			'responsive'		=> array(
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
						'slidesToShow'		=> 5,
						'slidesToScroll'	=> 5
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 6,
						'slidesToScroll'	=> 6
					)
				)
			)
			
		);
	} else {
		$column = 6;
		$carousel_args 	= array(
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
					'breakpoint'	=> 750,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
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
	}
?>

<section class="section-top-categories section-categories-carousel" id="categories-carousel-3">
	<header class="section-header">
		<h2 class="section-title">لیست <br>بهترین های <br>این هفته</h2>

		<?php if( $page=='home-v6' || $page=='home-v14' ) : ?>
			<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
		<?php  endif; ?>

		<?php if( $page=='home-v2' ) : ?>
			<a class="readmore-link" href="#">کاتالوگ کامل</a>
		<?php  endif; ?>

	</header><!-- .section-header -->

	<div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">

		<div class="woocommerce columns-<?php echo $column; ?>">
			<div class="products">
				<?php if( $page=='home-v6' || $page=='home-v2' ) : ?>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Fashion" src="assets/images/category/sm-1.png"> <h2 class="woocommerce-loop-category__title"> All in One PC  </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Footwear" src="assets/images/category/sm-2.png"> <h2 class="woocommerce-loop-category__title"> صوتی و موسیقی  </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Furnitures" src="assets/images/category/sm-3.png"> <h2 class="woocommerce-loop-category__title"> سلول ها و قرص ها  </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Perfumes" src="assets/images/category/sm-4.png"> <h2 class="woocommerce-loop-category__title"> کامپیوترها و لپ تاپ ها  </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Power Tools" src="assets/images/category/sm-5.png"> <h2 class="woocommerce-loop-category__title"> رایانه های رومیزی  </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Smart Appliances" src="assets/images/category/sm-6.png"> <h2 class="woocommerce-loop-category__title"> دوربین های دیجیتال </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Perfumes" src="assets/images/category/sm-4.png"> <h2 class="woocommerce-loop-category__title"> کامپیوترها و لپ تاپ ها  </h2></a></div>
				<?php  endif; ?>

				<?php if( $page=='home-v14' ) : ?>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Fashion" src="assets/images/garden/cat-1.png"> <h2 class="woocommerce-loop-category__title">  باغ و خارج از منزل   </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Footwear" src="assets/images/garden/cat-2.png"> <h2 class="woocommerce-loop-category__title">  چکش  </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Furnitures" src="assets/images/garden/cat-3.png"> <h2 class="woocommerce-loop-category__title">  خانه و باغ   </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Perfumes" src="assets/images/garden/cat-4.png"> <h2 class="woocommerce-loop-category__title">  خانه و آشپزخانه   </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Power Tools" src="assets/images/garden/cat-5.png"> <h2 class="woocommerce-loop-category__title">  مورس و ابزار قدرت در فضای باز </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Smart Appliances" src="assets/images/garden/cat-6.png"> <h2 class="woocommerce-loop-category__title">  کارخانه و گلدان   </h2></a></div>
					<div class="product-category product"><a href="index.php?page=product-category"><img width="224" height="197" alt="Perfumes" src="assets/images/garden/cat-7.png"> <h2 class="woocommerce-loop-category__title">  ابزار قدرتی  </h2></a></div>
				<?php  endif; ?>
			</div><!-- .products-->
		</div><!-- .woocommerce-->
	</div><!-- .product-categories -->
</section><!-- .section-top-categories -->