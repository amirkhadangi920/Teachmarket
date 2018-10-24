<?php

$carousel_args 	= array(
	'slidesToShow'		=> 6,
	'slidesToScroll'	=> 1,
	'dots'				=> false,
	'arrows'			=> true,
	'responsive'		=> array(
		array(
			'breakpoint'	=> 400,
			'settings'		=> array(
				'slidesToShow'		=> 1,
				'slidesToScroll'	=> 1
			)
		),
		array(
			'breakpoint'	=> 800,
			'settings'		=> array(
				'slidesToShow'		=> 3,
				'slidesToScroll'	=> 3
			)
		),
		array(
			'breakpoint'	=> 992,
			'settings'		=> array(
				'slidesToShow'		=> 3,
				'slidesToScroll'	=> 3
			)
		),
		array(
			'breakpoint'	=> 1200,
			'settings'		=> array(
				'slidesToShow'		=> 4,
				'slidesToScroll'	=> 4
			)
		),
		array(
			'breakpoint'	=> 1400,
			'settings'		=> array(
				'slidesToShow'		=> 5,
				'slidesToScroll'	=> 5
			)
		)
	)
);

?>

<section class="brands-carousel">
	<h2 class="sr-only">مارک های چرخ فلک</h2>
	<div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="brands">
			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>سیب</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="apple" src="assets/images/brands/1.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>بوش</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="assets/images/brands/2.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>توپ</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="assets/images/brands/3.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>اتصال</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="connect" src="assets/images/brands/4.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>گلکسی</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="assets/images/brands/5.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>گوپرو</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="assets/images/brands/6.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>دستشویی</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="assets/images/brands/7.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>کینوا</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="assets/images/brands/8.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>Nespresso</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="assets/images/brands/9.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>سامسونگ</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="assets/images/brands/10.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>سرعت سنج</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="assets/images/brands/11.png">
					</figure>
				</a>
			</div><!-- .item -->

			<div class="item">
				<a href="index.php?page=shop">
					<figure>
						<figcaption class="text-overlay">
							<div class="info">
								<h4>یوکو</h4>
							</div><!-- /.info -->
						</figcaption>
						<img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="assets/images/brands/12.png">
					</figure>
				</a>
			</div><!-- .item -->
		</div>
	</div><!-- .col-full -->
</section><!-- .brands-carousel -->