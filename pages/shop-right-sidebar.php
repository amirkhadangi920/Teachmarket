<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index.php">صفحه اصلی</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
				<a href="index.php?page=shop">فروشگاه</a><span class="delimiter">
				<i class="tm tm-breadcrumbs-arrow-right"></i></span>صفحه 1
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<?php require_once 'inc/components/shop-control-bar.php'; ?>

					<div class="tab-content">
						<div id="grid" class="tab-pane active" role="tabpanel">
							<?php require 'inc/components/product-grid.php'; ?>
						</div><!-- .tab-pane -->

						<div id="grid-extended" class="tab-pane" role="tabpanel">
							<?php require 'inc/components/product-grid-ext.php'; ?>
						</div><!-- .tab-pane -->

						<div id="list-view-large" class="tab-pane" role="tabpanel">
							<?php require 'inc/components/product-list-view-large.php'; ?>
						</div><!-- .tab-pane -->

						<div id="list-view" class="tab-pane" role="tabpanel">
							<?php require 'inc/components/product-list-view.php'; ?>
						</div><!-- .tab-pane -->

						<div id="list-view-small" class="tab-pane" role="tabpanel">
							<?php require 'inc/components/product-list-view-small.php'; ?>
						</div><!-- .tab-pane -->						
						
					</div><!-- .tab-content -->

					<?php require_once 'inc/components/shop-control-bar-bottom.php'; ?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<div id="secondary" class="widget-area shop-sidebar" role="complementary">
				<?php require_once 'inc/components/sidebar/product-categories-widget.php'; ?>
				<div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
					<span class="gamma widget-title">فیلتر</span>
					<?php require_once 'inc/components/sidebar/price-fliter.php'; ?>
					<?php require_once 'inc/components/sidebar/product-filters-sidebar.php'; ?>
				</div><!-- .widget_techmarket_products_filter -->
				<?php require_once 'inc/components/sidebar/single-product/products-carousel-widget.php'; ?>
			</div><!-- .shop-sidebar -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->

<div class="col-full">
	<?php require_once 'inc/blocks/homepage/recently-viewed-products.php'; ?>
	
	<?php require_once 'inc/blocks/homepage/brands-carousel.php'; ?>
</div><!-- .col-full -->