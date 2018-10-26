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
            'productImageURL' => 'assets/images/products/1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => 'true'
            
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/2.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/3.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/4.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/5.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/7.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/8.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/9.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/10.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/11.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/12.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/13.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/14.jpg',
            'oldPrice' =>'399.00',
            'newPrice' =>'262.81',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/15.jpg',
            'price' =>'399.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => 'true',
            'onsale'   => '',
            'product_name' => 'لورم ایپسوم متن ساختگی.',
            'productImageURL' => 'assets/images/products/16.jpg',
            'price' =>'262.81',
            'starrating' => 'true'
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