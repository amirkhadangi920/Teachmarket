<?php
$productImage = array(
	1 => array('product_image' => 'assets/images/blog/sm-1.jpg'),
	2 => array('product_image' => 'assets/images/blog/sm-2.jpg'),
	3 => array('product_image' => 'assets/images/blog/sm-3.jpg'),
	4 => array('product_image' => 'assets/images/blog/5.png'),
	5 => array('product_image' => 'assets/images/blog/sm-4.jpg'),
	6 => array('product_image' => 'assets/images/blog/sm-5.jpg')
	);
?>

<section class="section-recent-posts-with-categories">
	<div class="center-block">
		<h2 class="section-title">به جهان بازی خوش آمدید</h2>
		<div class="description">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </div>
		<ul class="nav nav-inline categories">
			<li class="nav-item"><a href="index.php?page=blog-single" class="nav-link">اکسسوری</a></li>
			<li class="nav-item"><a href="index.php?page=blog-single" class="nav-link">طراحی</a></li>
			<li class="nav-item"><a href="index.php?page=blog-single" class="nav-link">کامپیوتر های رو میزی</a></li>
			<li class="nav-item"><a href="index.php?page=blog-single" class="nav-link">رویداد ها</a></li>
		</ul><!-- .nav -->
	</div><!-- .center-block -->

	<div class="post-items-wrap">
		<div class="post-items">
			<?php for ($i=1; $i < 7; $i++) { ?>
				<div class="post-item">
					<a href="index.php?page=blog-single" class="post-thumbnail">
						<img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel size-techmarket-blog-carousel wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">					
					</a>
					
					<div class="post-info">
						<h3 class="post-title">
						<a href="index.php?page=blog-single">شرایط فنی شما باید قبل از ماجراجویی خود را بدانید</a></h3><p>یک رایانه رومیزی رایانه ای است که طراحی شده برای اقامت در یک مکان واحد. ممکن است یک برج یا کامپیوتر همه چیز در یک باشد.</p>
						<a href="index.php?page=blog-single" class="btn-more">بیشتر</a>
					</div>
				</div><!-- .post-item -->
			<?php } ?>
		</div><!-- .post-items -->
	</div><!-- .post-items-wrap -->
</section><!-- .section-recent-posts-with-categories -->