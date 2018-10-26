<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column = 5;
?>

<?php

	$products = array(
		array(
			'wishlist' => 'true',
			'onsale'   => '',  
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/1.jpg',
            'price' =>'456.00',
           	'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/2.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/6.jpg',
			'price' =>'456.00',
			'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/7.jpg',
			'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/9.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/10.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/11.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/12.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/13.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/14.jpg',
            'oldPrice' =>'399.00',
            'newPrice' =>'262.81',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/15.jpg',
            'price' =>'399.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/10.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/11.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/12.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/7.jpg',
			'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی.',
			'productImageURL' => 'assets/images/organic/8.jpg',
            'price' =>'456.00',
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

   
    <?php display_product_1( $product ); ?>
   
    <?php endforeach;?>
</div>
