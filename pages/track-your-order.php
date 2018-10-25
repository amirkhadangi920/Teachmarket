<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">

			<nav class="woocommerce-breadcrumb">
				<a href="index.php">صفحه اصلی</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
				پیگیری سفارش
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<div class="type-page hentry">
						<header class="entry-header">
							<div class="page-header-caption">
								<h1 class="entry-title">پیگری سفارش</h1>
							</div>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<div class="woocommerce">
								<form class="track_order" method="post" action="#">

									<p>برای ردیابی سفارش خود لطفا ID سفارش خود را در کادر زیر وارد کنید و دکمه "پیگیری" را فشار دهید. این به شما در رسید شما و در ایمیل تأییدی که باید دریافت کردید، داده شد.</p>

									<p class="form-row form-row-first">
										<label for="orderid">شماره سفارش</label> 
										<input type="text" placeholder="Found in your order confirmation email." id="orderid" name="orderid" class="input-text">
									</p>

									<p class="form-row form-row-last">
										<label for="order_email">ایمیل</label> 
										<input type="text" placeholder="Email you used during checkout." id="order_email" name="order_email" class="input-text">
									</p>

									<div class="clear"></div>

									<p class="form-row">
										<input type="submit" class="button" name="track" value="Track" />
									</p>
								</form><!-- .track_order -->
							</div><!-- .woocommerce -->
						</div><!-- .entry-content -->
					</div><!-- .hentry -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->