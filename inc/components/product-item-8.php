<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column = 5;    
?>

<?php

    $shoe_products = array(
        array(
            'wishlist' => '',
            'onsale'   => '',  
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
            'productImageURL' => 'assets/images/shoes/1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => 'true'

        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
            'productImageURL' => 'assets/images/shoes/2.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
            'productImageURL' => 'assets/images/shoes/3.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
            'productImageURL' => 'assets/images/shoes/4.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
            'productImageURL' => 'assets/images/shoes/5.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
            'productImageURL' => 'assets/images/shoes/6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.',
            'productImageURL' => 'assets/images/shoes/7.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        
    );

?>

<div class="products">
    <?php 
        shuffle($shoe_products);
        foreach($shoe_products as $product):
        

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



