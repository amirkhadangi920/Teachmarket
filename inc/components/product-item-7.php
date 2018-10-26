<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column = 5;
?>

<?php

	$products = array(
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''
            
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/7.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/9.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/10.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/11.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
			'productImageURL' => 'assets/images/sports/12.jpg',
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



