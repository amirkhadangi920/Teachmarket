<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<?php require_once 'inc/blocks/homepage/slider/homev9-slider.php'; ?>

					<section class="section-products-tabs">
						<div class="section-products-tabs-wrap">
							<header class="section-header">
								<h2 class="section-title">Featured Products</h2>
								<ul role="tablist" class="nav justify-content-center">
									<?php 
									$tab_title = array(
										'All Glasses' , 'Sunglasses' , 'Eyeglasses' , 'Special Collections' 
									);
									$id = 'tab-' . uniqid();	
									for ($i=0; $i < 4; $i++) { ?>
									<li class="nav-item"><a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" href="#<?php echo $id . $i; ?>" data-toggle="tab"><?php echo $tab_title[$i]; ?></a></li>
									<?php } ?>
								</ul>
							</header>

							<div class="tab-content">
								<?php for ($i=0; $i < 4; $i++) { ?>

								<div id="<?php echo $id . $i; ?>" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel">
									<div class="products-carousel">
										<div class="container-fluid">
											<div class="woocommerce columns-4">
												<?php require 'inc/components/product-item-5.php'; ?>
											</div>
										</div><!-- .container-fluid -->
									</div><!-- .products-carousel -->
								</div><!-- .tab-pane -->
								
								<?php } ?>
							</div><!-- .tab-content -->
							<a href="index.php?page=shop" class="button"><i class="tm tm-free-return"></i>See More Products</a>
						</div><!-- .section-products-tabs-wrap -->
					</section><!-- .section-products-tabs -->

					<?php require_once 'inc/components/banner/homev9-single-banner.php'; ?>

					<?php require_once 'inc/components/banner/homev9-2-column-banner.php'; ?>

					<?php require_once 'inc/components/banner/homev9-full-width-banner.php'; ?>

					<?php require 'inc/blocks/homepage/brands-carousel.php'; ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->