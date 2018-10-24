<?php if( $page=='home-v3' || $page=='home-v4' || $page=='home-v7' || $page=='home-v8') : ?> 	
	<div class="top-bar top-bar-v2">
		<?php require 'top-bar-v2.php'; ?>
	</div><!-- .top-bar-v2 -->
<?php  endif; ?>

<header id="masthead" class="site-header header-v2" style="background-image: none; ">
	<div class="col-full desktop-only">
		<div class="row">

			<?php require_once 'inc/header/logo.php'; ?>

			<?php require_once 'inc/menu/department-menu.php'; ?>

			<?php require_once 'inc/header/navbar-search.php'; ?>

			<?php require_once 'inc/header/navbar-right.php'; ?>
			
		</div><!-- /.row -->

		<div class="techmarket-sticky-wrap">
			<div class="row">

				<?php require_once 'inc/menu/navbar-primary.php'; ?>		

			</div><!-- /.row -->
		</div><!-- .techmarket-sticky-wrap -->
		
	</div><!-- .col-full -->
	
	<?php require_once 'inc/header/handheld-header.php'; ?>

</header><!-- .header-v2 -->
<!-- ============================================================= Header End ============================================================= -->