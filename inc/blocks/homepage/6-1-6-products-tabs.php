 <?php require 'inc/components/product-image.php'; ?>

 <?php

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
		if($page=='home-v2') {
		$column = 3;
	}
?>
	<section class="section-6-1-6-products-tabs">
		<header class="section-header">
			<h2 class="section-title">جزییات روزانه ! <span>بهترین قیمت ما را دریافت کنید.</span></h2>
		</header><!-- /.section-header -->

		<div class="6-1-6-products-tabs">
			<ul role="tablist" class="nav justify-content-center">
				<li class="nav-item"><a class="nav-link " href="#tab-30" data-toggle="tab">-30%</a></li>
				<li class="nav-item"><a class="nav-link active" href="#tab-50" data-toggle="tab">-50%</a></li>
				<li class="nav-item"><a class="nav-link " href="#tab-70" data-toggle="tab">-70%</a></li>
			</ul><!-- /.nav -->


			<div class="tab-content">
				<div id="tab-30" class="tab-pane" role="tabpanel">
					<div class="row row-6-1-6-products">
						<div class="product-1">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="sale-product-with-timer product">
										 
										<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
											<div class="sale-product-with-timer-header">
												<div class="price-and-title">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>425.89</span>
														</ins> 
														<del><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>545.89</span>
														</del>
													</span><!-- /.price -->

													<h2 class="woocommerce-loop-product__title">تبلت قرمز</h2>
												</div><!-- /.price-and-title -->

												<div class="sale-label-outer">
													<div class="sale-saved-label">
														<span class="saved-label-text">ذخیره </span>
														<span class="saved-label-amount">
															<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>120.00</span>
														</span>
													</div><!-- /.sale-saved-label -->
												</div><!-- /.sale-label-outer -->
											</div><!-- /.sale-product-with-timer-header -->

											<img width="224" height="197" alt="" class="wp-post-image" src="assets/images/products/6-1-6-center.jpg">

											<div class="deal-progress">
												<div class="deal-stock">
													<div class="stock-sold">قبلا فروخته شده است: <strong>0</strong></div>
													<div class="stock-available">در دسترس:<strong>1000</strong></div>
												</div><!-- /.deal-stock -->

												<div class="progress">
													<span style="width:0%" class="progress-bar">0</span>
												</div><!-- /.progress -->
											</div><!-- /.deal-progress -->

											<div class="deal-countdown-timer">
												<div class="marketing-text">
													<span class="line-1">عجله کن !</span>
													<span class="line-2">پیشنهادات به پایان می رسد در:</span>
												</div><!-- /.marketing-text -->

												<span style="display:none;" class="deal-time-diff">29994</span>
												<div class="deal-countdown countdown"></div>
											</div><!-- /.deal-countdown-timer -->
										</a><!-- /.woocommerce-LoopProduct-link -->
									</div><!-- /.sale-product-with-timer -->
								</div><!-- /.products -->
							</div><!-- /.woocommerce -->
						</div><!-- /.product-1 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column; ?>">
								<div class="products">
							
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> اضافه کردن به سبد خرید</a>
									        </div> 

											<a href="index.php?page=single-product-fullwidth" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> تومان 309.95</span></ins>
										            <del><span class="amount"> تومان 459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">ساعتهای هوشمند 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">اضافه کردن به سبد خرید</a>
										        <a class="add-to-compare-link" href="index.php?page=compare">اضافه کردن به سبد خرید</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column; ?>">
								<div class="products">
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> اضافه کردن به سبد خرید</a>
									        </div>     
											<a href="index.php?page=single-product-fullwidth" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> تومان 309.95</span></ins>
										            <del><span class="amount"> تومان 459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">ساعتهای هوشمند 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">اضافه کردن به سبد خرید</a>
										        <a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->
					</div><!-- /.product-1 -->
				</div><!-- /.tab-pane -->

				<div id="tab-50" class="tab-pane active" role="tabpanel">
					<div class="row row-6-1-6-products">
						<div class="product-1">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="sale-product-with-timer product">
										 
										<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
											<div class="sale-product-with-timer-header">
												<div class="price-and-title">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>425.89</span>
														</ins> 
														<del><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>545.89</span>
														</del>
													</span><!-- /.price -->

													<h2 class="woocommerce-loop-product__title">تبلت قرمز</h2>
												</div><!-- /.price-and-title -->

												<div class="sale-label-outer">
													<div class="sale-saved-label">
														<span class="saved-label-text">ذخیره</span>
														<span class="saved-label-amount">
															<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان </span>120.00</span>
														</span>
													</div><!-- /.sale-saved-label -->
												</div><!-- /.sale-label-outer -->
											</div><!-- /.sale-product-with-timer-header -->

											<img width="224" height="197" alt="" class="wp-post-image" src="assets/images/products/1.jpg">

											<div class="deal-progress">
												<div class="deal-stock">
													<div class="stock-sold">قبلا فروخته شده است: <strong>0</strong></div>
													<div class="stock-available">در دسترس: <strong>1000</strong></div>
												</div><!-- /.deal-stock -->

												<div class="progress">
													<span style="width:0%" class="progress-bar">0</span>
												</div><!-- /.progress -->
											</div><!-- /.deal-progress -->

											<div class="deal-countdown-timer">
												<div class="marketing-text">
													<span class="line-1">عجله کن !</span>
													<span class="line-2">پیشنهادات به پایان می رسد در:</span>
												</div><!-- /.marketing-text -->

												<span style="display:none;" class="deal-time-diff">29994</span>
												<div class="deal-countdown countdown"></div>
											</div><!-- /.deal-countdown-timer -->
										</a><!-- /.woocommerce-LoopProduct-link -->
									</div><!-- /.sale-product-with-timer -->
								</div><!-- /.products -->
							</div><!-- /.woocommerce -->
						</div><!-- /.product-1 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column; ?>">
								<div class="products">
							
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> اضافه کردن به سبد خرید</a>
									        </div>     
											<a href="index.php?page=single-product-fullwidth" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> تومان 309.95</span></ins>
										            <del><span class="amount">تومان 459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">ساعتهای هوشمند 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">اضافه کردن به سبد خرید</a>
										        <a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column; ?>">
								<div class="products">
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> اضافه کردن به سبد خرید</a>
									        </div>     
											<a href="index.php?page=single-product-fullwidth" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> تومان 309.95</span></ins>
										            <del><span class="amount">تومان 459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">ساعتهای هوشمند 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">اضافه کردن به سبد خرید</a>
										        <a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->
					</div><!-- /.product-1 -->
				</div><!-- /.tab-pane -->

				<div id="tab-70" class="tab-pane" role="tabpanel">
					<div class="row row-6-1-6-products">
						<div class="product-1">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="sale-product-with-timer product">
										 
										<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
											<div class="sale-product-with-timer-header">
												<div class="price-and-title">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>425.89</span>
														</ins> 
														<del><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>545.89</span>
														</del>
													</span><!-- /.price -->

													<h2 class="woocommerce-loop-product__title">تبلت قرمز</h2>
												</div><!-- /.price-and-title -->

												<div class="sale-label-outer">
													<div class="sale-saved-label">
														<span class="saved-label-text">ذخیره</span>
														<span class="saved-label-amount">
															<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">تومان</span>120.00</span>
														</span>
													</div><!-- /.sale-saved-label -->
												</div><!-- /.sale-label-outer -->
											</div><!-- /.sale-product-with-timer-header -->

											<img width="224" height="197" alt="" class="wp-post-image" src="assets/images/products/6-1-6-center.jpg">

											<div class="deal-progress">
												<div class="deal-stock">
													<div class="stock-sold">قبلا فروخته شده است:  <strong>0</strong></div>
													<div class="stock-available">در دسترس: <strong>1000</strong></div>
												</div><!-- /.deal-stock -->

												<div class="progress">
													<span style="width:0%" class="progress-bar">0</span>
												</div><!-- /.progress -->
											</div><!-- /.deal-progress -->

											<div class="deal-countdown-timer">
												<div class="marketing-text">
													<span class="line-1">عجله کن !</span>
													<span class="line-2">پیشنهادات به پایان می رسد در:</span>
												</div><!-- /.marketing-text -->

												<span style="display:none;" class="deal-time-diff">29994</span>
												<div class="deal-countdown countdown"></div>
											</div><!-- /.deal-countdown-timer -->
										</a><!-- /.woocommerce-LoopProduct-link -->
									</div><!-- /.sale-product-with-timer -->
								</div><!-- /.products -->
							</div><!-- /.woocommerce -->
						</div><!-- /.product-1 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column; ?>">
								<div class="products">
							
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> اضافه کردن به سبد خرید</a>
									        </div>     
											<a href="index.php?page=single-product-fullwidth" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> تومان 309.95</span></ins>
										            <del><span class="amount">تومان 459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">ساعتهای هوشمند 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">اضافه کردن به سبد خرید</a>
										        <a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column; ?>">
								<div class="products">
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="index.php?page=wishlist" rel="nofollow" class="add_to_wishlist"> اضافه کردن به سبد خرید</a>
									        </div>     
											<a href="index.php?page=single-product-fullwidth" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> تومان 309.95</span></ins>
										            <del><span class="amount">تومان 459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">ساعتهای هوشمند 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">اضافه کردن به سبد خرید</a>
										        <a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->
					</div><!-- /.product-1 -->
				</div><!-- /.tab-pane -->
			</div><!-- /.tab-content -->
		</div><!-- /.6-1-6-products-tabs -->
	</section><!-- /.section-6-1-6-products-tabs -->