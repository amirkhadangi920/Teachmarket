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
					<div class="shop-archive-header">
						<div class="jumbotron">
							<div class="jumbotron-img">
								<img width="416" height="283" alt="" src="assets/images/products/jumbo.jpg" class="jumbo-image alignright">
							</div>

							<div class="jumbotron-caption">
								<h3 class="jumbo-title">هدست واقعیت مجازی</h3>
								<p class="jumbo-subtitle">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.  <br>
								<br>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
								<a href="#">ادامه مطالب<i class="tm tm-long-arrow-right"></i></a>
								</p>
							</div><!-- .jumbotron-caption -->
						</div><!-- .jumbotron -->
					</div><!-- .shop-archive-header -->

					<?php require_once 'inc/components/shop-control-bar-2.php'; ?>

					<div class="tab-content">
						<div id="grid" class="tab-pane" role="tabpanel">
							<?php require 'inc/components/product-grid.php'; ?>
						</div><!-- .tab-pane -->

						<div id="grid-extended" class="tab-pane active" role="tabpanel">
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
				</div>
				<?php require_once 'inc/components/sidebar/single-product/products-carousel-widget.php'; ?>
			</div>
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->

<div class="col-full">
	<?php require_once 'inc/blocks/homepage/recently-viewed-products.php'; ?>
	
	<?php require_once 'inc/blocks/homepage/brands-carousel.php'; ?>
</div><!-- .col-full -->