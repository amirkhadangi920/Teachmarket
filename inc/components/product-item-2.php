<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column = 6;	
?>

<?php

	$products = array(
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Smart Watches 3 SWR50',
			'productImageURL' => 'assets/images/products/xs-1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''

		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'ZenBook 3 Ultrabook 8GB 512SSD W10',
			'productImageURL' => 'assets/images/products/xs-2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'On-ear Wireless NXTG',
			'productImageURL' => 'assets/images/products/xs-3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => '4K Action Cam with  Wi-Fi & GPS',
			'productImageURL' => 'assets/images/products/xs-4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'XONE Wireless Controller',
			'productImageURL' => 'assets/images/products/xs-5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Gear Virtual Reality 3D with Bluetooth Glasses',
			'productImageURL' => 'assets/images/products/xs-6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Bluetooth on-ear PureBass Headphones',
			'productImageURL' => 'assets/images/products/xs-7.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Video & Air Quality Monitor',
			'productImageURL' => 'assets/images/products/xs-8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Watch Stainless with Grey Suture Leather Strap',
			'productImageURL' => 'assets/images/products/xs-9.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Xtreme ultimate splashproof  portable speaker',
			'productImageURL' => 'assets/images/products/xs-4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Xtreme ultimate splashproof  portable speaker',
			'productImageURL' => 'assets/images/products/xs-2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Bbd 23-Inch Screen LED-Lit  Monitorss Buds',
			'productImageURL' => 'assets/images/products/xs-1.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Drone WIFI FPV With 4K',
			'productImageURL' => 'assets/images/products/xs-6.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Band Fitbit Flex',
			'productImageURL' => 'assets/images/products/xs-8.jpg',
            'oldPrice' =>'399.00',
            'newPrice' =>'262.81',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Band Fitbit Flex',
			'productImageURL' => 'assets/images/products/xs-3.jpg',
            'price' =>'399.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Band Fitbit Flex',
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



