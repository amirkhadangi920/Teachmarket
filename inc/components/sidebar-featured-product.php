<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	
	$carousel_args = array(
		'infinite'          => false,
		'rows'              => 6,
		'slidesPerRow'      => 1,
  		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> false	
	);
		
?>
<section class="section-products-carousel">
	<header class="section-header">
		<h2 class="section-title">Featured Products</h2>
	</header>
	<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-1">
				<?php require 'inc/components/product-item.php'; ?>
			</div>
		</div>
	</div>
</section>