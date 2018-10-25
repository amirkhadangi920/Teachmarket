<?php require 'inc/components/product-image.php'; ?>
<?php require 'inc/components/product-name.php';
	$column = 5;
?>


<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index.php">صفحه اصلی</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>کامپیوتر و لپتاپ
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<section class="section-product-categories">
						<header class="section-header">
							<h1 class="woocommerce-products-header__title page-title">انوع کامپیوتر و لپتاپ</h1>
						</header>

						<div class="woocommerce columns-<?php echo $column; ?>">
							<div class="product-loop-categories">
								<div class="product-category product first"> 
									<a href="index.php?page=product-category">
										<img src="assets/images/category/21.png" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> دوربین دیجیتالی <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product"> 
									<a href="index.php?page=product-category">
										<img src="assets/images/category/17.png" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> صوتی و موسیقی <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product last"> 
									<a href="index.php?page=product-category">
										<img src="assets/images/category/23.png" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> هدفون <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product"> 
									<a href="index.php?page=product-category">
										<img src="assets/images/category/25.png" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> سینمای خانگی و صوتی <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product last"> 
									<a href="index.php?page=product-category">
										<img src="assets/images/category/18.png" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> سلول ها و قرص ها <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								
							</div><!-- .product-loop-categories -->
						</div><!-- .woocommerce -->


					</section><!-- .section-product-categories -->

					<?php require_once 'inc/blocks/homepage/products-carousel.php'; ?>

					<?php require_once 'inc/blocks/homepage/7-column-product-carousel.php'; ?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<div id="secondary" class="widget-area shop-sidebar" role="complementary">
				<?php require 'inc/components/sidebar/single-product/product-categories-widget.php'; ?>
				<?php require 'inc/components/sidebar/single-product/products-carousel-widget.php'; ?>
			</div>
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->

<div class="col-full">
	<?php require_once 'inc/blocks/homepage/recently-viewed-products.php'; ?>
	
	<?php require_once 'inc/blocks/homepage/brands-carousel.php'; ?>
</div><!-- .col-full -->