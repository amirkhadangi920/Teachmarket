<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">

			<nav class="woocommerce-breadcrumb">
				<a href="index.php">صفحه اصلی</a>
				<span class="delimiter"><i class="fa fa-angle-right"></i></span>
				وبلاگ
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<?php require_once 'inc/blocks/blog-post.php'; ?>
					<?php require_once 'inc/components/blog-pagination.php'; ?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<div id="secondary" class="sidebar-blog widget-area" role="complementary">
				<?php require_once 'inc/components/sidebar/search-widget.php'; ?>
				<?php require_once 'inc/components/sidebar/text-widget.php'; ?>
				<?php require_once 'inc/components/sidebar/category-widget.php'; ?>
				<?php require_once 'inc/components/sidebar/post-carousel-widget.php'; ?>
				<?php require_once 'inc/components/sidebar/tag-widget.php'; ?>
				
			</div><!-- .sidebar-blog -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->