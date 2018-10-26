<?php
	$carousel_single_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> false,
		'asNavFor'          => '.techmarket-3-2-3-gallery .techmarket-wc-product-gallery-thumbnails__wrapper'
	);

	

	$carousel_gallery_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 3,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'vertical'			=> true,
		'verticalSwiping'	=> true,
		'focusOnSelect'		=> true,
		'touchMove'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-up"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-down"></i></a>',
		'asNavFor'          => '.techmarket-3-2-3-gallery .techmarket-wc-product-gallery__wrapper',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 767,
				'settings'		=> array(
					'vertical'			=> false,
					'verticalSwiping'	=> false,
					'slidesToShow'		=> 1
				)
			)
		)

	);
?>

<section class="section-3-2-3-product-cards-tabs-with-featured-product stretch-full-width">
	<div class="col-full">
		<header class="section-header">
			<h2 class="section-title">عجله کن !<span> پیشنهادهای ویژه</span></h2>
				<ul role="tablist" class="nav justify-content-center">
					<li class="nav-item"><a class="nav-link" href="#cameras" data-toggle="tab">دوربین ها</a></li>
					<li class="nav-item"><a class="nav-link" href="#audio" data-toggle="tab">صوتی</a></li>
					<li class="nav-item"><a class="nav-link active" href="#tv-video" data-toggle="tab">Tتلویزیون &amp; فیلم</a></li>
					<li class="nav-item"><a class="nav-link" href="#cell-phones" data-toggle="tab">تلفن همراه</a></li>
					<li class="nav-item"><a class="nav-link" href="#computers" data-toggle="tab">کامپیوتر</a></li>
					<li class="nav-item"><a class="nav-link" href="#accessories" data-toggle="tab">لوازم جانبی</a></li>
				</ul>
		</header><!-- .section-header -->

		<div class="tab-content">
			<div id="cameras" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="index.php?page=cart">اضافه کردن به لیست خرید</a>
													<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

														<span class="price">
										                    <ins><span class="amount"> تومان 939.99</span></ins>
										                    <del><span class="amount"> تومان 627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="index.php?page=cart" >اضافه کردن به لیست خرید</a>
														<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="audio" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h2>
													<div class="ribbon green-label"><span>آ+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="index.php?page=cart">اضافه کردن به لیست خرید</a>
													<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

														<span class="price">
										                    <ins><span class="amount"> تومان 939.99</span></ins>
										                    <del><span class="amount"> تومان 627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="index.php?page=cart" >اضافه کردن به لیست خرید</a>
														<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="gps" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. /h2>
													<div class="ribbon green-label"><span>آ+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="index.php?page=cart">اضافه کردن به لیست خرید</a>
													<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

														<span class="price">
										                    <ins><span class="amount"> تومان 939.99</span></ins>
										                    <del><span class="amount"> تومان 627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="index.php?page=cart" >اضافه کردن به لیست خرید</a>
														<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="tv-video" class="tab-pane active" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h2>
													<div class="ribbon green-label"><span>آ+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="index.php?page=cart">اضافه کردن به لیست خرید</a>
													<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

														<span class="price">
										                    <ins><span class="amount"> تومان 939.99</span></ins>
										                    <del><span class="amount"> تومان 627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="index.php?page=cart" >اضافه کردن به لیست خرید</a>
														<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="cell-phones" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h2>
													<div class="ribbon green-label"><span>آ+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="index.php?page=cart">اضافه کردن به لیست خرید</a>
													<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

														<span class="price">
										                    <ins><span class="amount"> تومان 939.99</span></ins>
										                    <del><span class="amount"> تومان 627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="index.php?page=cart" >اضافه کردن به لیست خرید</a>
														<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="computers" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="index.php?page=cart">اضافه کردن به لیست خرید</a>
													<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

														<span class="price">
										                    <ins><span class="amount"> تومان 939.99</span></ins>
										                    <del><span class="amount"> تومان 627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="index.php?page=cart" >اضافه کردن به لیست خرید</a>
														<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="accessories" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">تومان</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </h2>
													<div class="ribbon green-label"><span>آ+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
														<li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="index.php?page=cart">اضافه به لیست خرید</a>
													<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="index.php?page=single-product-fullwidth">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="index.php?page=single-product-fullwidth">

														<span class="price">
										                    <ins><span class="amount"> تومان 939.99</span></ins>
										                    <del><span class="amount"> تومان 627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> از 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="index.php?page=cart" >اضافه کردن به لیست خرید</a>
														<a class="add-to-compare-link" href="index.php?page=compare">مقایسه کردن</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									<?php require 'inc/components/landscape-product-card-item.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->


		</div><!-- .tab-content -->
	</div><!-- .col-full -->
</section><!-- .section-3-2-3-product-cards-tabs-with-featured-product -->
