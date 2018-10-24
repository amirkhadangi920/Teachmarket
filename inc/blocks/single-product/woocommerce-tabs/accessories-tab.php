<?php 
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column=4;
?>

<div class="accessories">

	<div class="accessories-wrapper">

		<?php require 'inc/components/product-image.php'; ?>

		<div class="accessories-product columns-<?php echo $column; ?>">	
			
			<div class="products">
				
				<?php for ($i=1; $i <=4; $i++) {
				 	shuffle($productImage);
				 ?>
				 
				<?php 
					if ( empty( $loop ) ) {
						$loop = 0;
					}
					$loop++;
					$classes = '';
					if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
						$classes = 'first';
					}
					if ( 0 === $loop % $column ) {
						$classes = 'last';
					}
				?>
					<div class="product">
						<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="index.php?page=single-product-fullwidth"> 
							<img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
							<span class="price">
								<del>
									<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">تومان</span>1,239.99</span>
								</del> 

								<ins>
									<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">تومان</span>997.00</span>
								</ins>
							</span>
							<h2 class="woocommerce-loop-product__title">60UH6150 60 اینچ 4K فوق العاده HD هوشمند تلویزیون LED</h2> 
						</a>

						<div class="checkbox accessory-checkbox">
							<label>
								<input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> برداشتن
							</label>
						</div>
					</div>
				<?php } ?>
				
			</div><!-- /.products -->
		</div><!-- .row -->

		<div class="accessories-product-total-price">
			<div class="total-price">
				<span class="total-price-html price">
					<span class="woocommerce-Price-amount amount">
						<span class="woocommerce-Price-currencySymbol">تومان</span>1,666.94
					</span>
				</span><!-- .total-price-html --> 
				<span>بسته بندی قیمت برای موارد انتخاب شده</span>
			</div><!-- .total-price -->

			<div class="accessories-add-all-to-cart">
				<button class="button btn btn-primary add-all-to-cart" type="button">بسته بندی را به سبد خرید اضافه کنید</button>
			</div><!-- .accessories-add-all-to-cart -->
		</div><!-- .accessories-product-total-price -->
	</div><!-- .accessories-wrapper -->
</div><!-- .accessories -->
			
			





















































				