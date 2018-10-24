<?php
	$carousel_args = array(
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#sidebar-posts-carousel .custom-slick-nav'
		
	);
?>

<div class="widget techmarket_posts_carousel_widget">
	<section class="section-posts-carousel" id="sidebar-posts-carousel">
		<header class="section-header">
		<?php
			if($page=='home-v6') {
				?>
					<h2 class="section-title">From the Blog</h2>
					<?php
			}

		    else {
		    	?>
				<h2 class="section-title">Recent Posts</h2>
				<?php
			}?>
			
			<div class="custom-slick-nav"></div><!-- .custom-slick-nav -->
		</header><!-- .post-items -->
		
		<div class="post-item-carousel" data-ride="tm-slick-carousel" data-wrap=".posts" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="posts">
				<div class="post-item">
					<a href="index.php?page=blog-single" class="post-thumbnail">
						<div class="post-thumbnail">
							<img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="assets/images/blog/sm-4.jpg">
						</div>						
					</a><!-- .post-thumbnail -->

					<div class="post-content">
						<a href="index.php?page=blog-single" class="post-name" tabindex="-1">Why you should choose dedicated Desktop PC Computer</a>
						<span class="comments-link">
							<a href="index.php?page=blog-single">Leave a comment</a>
						</span>
					</div><!-- .post-content -->
				</div><!-- .post-items -->

				<div class="post-item">
					<a href="index.php?page=blog-single" class="post-thumbnail">
						<div class="post-thumbnail">
							<img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="assets/images/blog/sm-1.jpg">
						</div>						
					</a><!-- .post-thumbnail -->

					<div class="post-content">
						<a href="index.php?page=blog-single" class="post-name" tabindex="-1">Tech Terms you should know before your adventure</a>
						<span class="comments-link">
							<a href="index.php?page=blog-single">Leave a comment</a>
						</span>
					</div><!-- .post-content -->
				</div><!-- .post-items -->

				<div class="post-item">
					<a href="index.php?page=blog-single" class="post-thumbnail">
						<div class="post-thumbnail">
							<img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="assets/images/blog/sm-2.jpg">
						</div>						
					</a><!-- .post-thumbnail -->

					<div class="post-content">
						<a href="index.php?page=blog-single" class="post-name" tabindex="-1">How to build your first 4k ready Desktop PC</a>
						<span class="comments-link">
							<a href="index.php?page=blog-single">Leave a comment</a>
						</span>
					</div><!-- .post-content -->
				</div><!-- .post-items -->

				<div class="post-item">
					<a href="index.php?page=blog-single" class="post-thumbnail">
						<div class="post-thumbnail">
							<img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel wp-post-image" src="assets/images/blog/sm-3.jpg">
						</div>						
					</a><!-- .post-thumbnail -->

					<div class="post-content">
						<a href="index.php?page=blog-single" class="post-name" tabindex="-1">Top 10 Best Graphical Games for testing your Hardware</a>
						<span class="comments-link">
							<a href="index.php?page=blog-single">Leave a comment</a>
						</span>
					</div><!-- .post-content -->
				</div><!-- .post-items -->

			</div><!-- .posts-->
		</div><!-- .post-item-carousel -->
				
	</section><!-- .section-posts-carousel -->
</div><!-- .techmarket_posts_carousel_widget -->															