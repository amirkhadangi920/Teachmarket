<header id="masthead" class="site-header header-v5" style="background-image: none; ">
	<div class="col-full desktop-only">
		<div class="techmarket-sticky-wrap">
			<div class="row">
				
				<?php require_once 'inc/header/logo.php'; ?>

				<?php require_once 'inc/menu/department-menu.php'; ?>

				<?php require_once 'inc/menu/primary-menu.php'; ?>

				<form class="navbar-search" method="get" action="index.php">
					<label class="sr-only screen-reader-text" for="search">Search for:</label>
					<div class="input-group">
						<input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products"/>
						<div class="input-group-btn input-group-append">
							<input type="hidden" id="search-param" name="post_type" value="product"/>
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-search"></i>
								<span class="search-btn">Search</span>
							</button>
						</div><!-- .input-group-btn -->
					</div><!-- .input-group -->
				</form>

			</div><!-- /.row -->
		</div><!-- .techmarket-sticky-wrap -->
	</div><!-- .col-full -->
	
	<?php require_once 'inc/header/handheld-header.php'; ?>

</header><!-- .header-v5 -->
<!-- ============================================================= Header End ============================================================= -->