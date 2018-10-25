<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index.php">صفحه اصلی</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
				سبد خرید
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<div class="type-page hentry">
						<div class="entry-content">
							<div class="woocommerce">
								<div class="cart-wrapper">
									<?php require_once 'inc/components/cart-table.php'; ?>
									<?php require_once 'inc/components/cart-collaterals.php'; ?>
								</div><!-- .cart-wrapper -->
							</div><!-- .woocommerce -->
						</div><!-- .entry-content -->
					</div><!-- .hentry -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->

<div class="col-full">
	<?php require_once 'inc/blocks/homepage/brands-carousel.php'; ?>
</div><!-- .col-full -->
