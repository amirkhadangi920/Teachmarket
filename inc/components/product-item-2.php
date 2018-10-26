<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column = 6;	
?>

<?php

	$products = array(
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''

		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-7.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-9.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-1.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-6.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-8.jpg',
            'oldPrice' =>'399.00',
            'newPrice' =>'262.81',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-3.jpg',
            'price' =>'399.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/products/xs-7.jpg',
            'price' =>'262.81',
            'starrating' => ''
		)
	
	);

?>

<div class="products">
    <?php 
   		 shuffle($products);
    	foreach($products as $product):
        
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

   
    <?php display_product( $product ); ?>
   
    <?php endforeach;?>
</div>



