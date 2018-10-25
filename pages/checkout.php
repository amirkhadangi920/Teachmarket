<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index.php">صفحه اصلی</a>
				<span class="delimiter">
					<i class="tm tm-breadcrumbs-arrow-right"></i>
				</span>
				بررسی
			</nav><!-- .woocommerce-breadcrumb -->

			<div class="content-area" id="primary">
				<main class="site-main" id="main">
			
					<div class="type-page hentry">
						
						<div class="entry-content">
							<div class="woocommerce">
								<div class="woocommerce-info" >مشتری مداری <a data-toggle="collapse" href="#login-form" aria-expanded="false" aria-controls="login-form" class="showlogin">Click here to login</a>
								</div>
								<div class="collapse" id="login-form">
									<form method="post" class="woocomerce-form woocommerce-form-login login">

										<p class="before-login-text">
											لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. .		
										</p>

										<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>

										<p class="form-row form-row-first">
											<label for="username">نام کاربری یا پسورد<span class="required">*</span></label>
											<input type="text" id="username" name="username" class="input-text">
										</p>

										<p class="form-row form-row-last">
											<label for="password">پسورد <span class="required">*</span></label>
											<input type="password" id="password" name="password" class="input-text">
										</p>

										<div class="clear"></div>


										<p class="form-row">

											<input type="submit" value="Login" name="login" class="button">
											
											<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
												<input type="checkbox" value="forever" id="rememberme" name="rememberme" class="woocommerce-form__input woocommerce-form__input-checkbox"> <span>مرا به خاطر بسپار/span>
											</label>
										</p>

										<p class="lost_password">
											<a href="#">پسوردم را فراموش کردم</a>
										</p>

										<div class="clear"></div>


									</form>
								</div><!-- .collapse -->

								<div class="woocommerce-info">کد تخفیف دارید ؟ <a data-toggle="collapse" href="#checkoutCouponForm" aria-expanded="false" aria-controls="checkoutCouponForm" class="showlogin">اینجا را کلیک کنید</a>
								</div>
								<div class="collapse" id="checkoutCouponForm">
									<form method="post" class="checkout_coupon">

											<p class="form-row form-row-first">
												<input type="text" value="" id="coupon_code" placeholder="کد تخفیف" class="input-text" name="coupon_code">
											</p>

											<p class="form-row form-row-last">
												<input type="ارسال" value="Apply coupon" name="apply_coupon" class="button">
											</p>

											<div class="clear"></div>
									</form>
								</div><!-- .collapse -->

								<?php require_once 'inc/components/checkout-table.php'; ?>

							</div><!-- .woocommerce -->
						</div><!-- .entry-content -->
					</div><!-- #post-## -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->