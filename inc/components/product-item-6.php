<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column = 4;

    $products = array(
        array(
            'productImageURL' => 'assets/images/products/1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی.'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/2.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی.'
        
        ),
        array(
            'productImageURL' => 'assets/images/products/3.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی.'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/4.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی.'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/5.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی.'
        
        ),
        array(
            'productImageURL' => 'assets/images/products/6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی.'
            
            
        ),
        array(
            'productImageURL' => 'assets/images/products/7.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی.'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/8.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/9.jpg',
            'price' =>'456.00',
             'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/10.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/11.jpg',
            'price' =>'456.00',
            'product_name' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از.'
            
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

   
    <?php display_no_hover_product( $product ); ?>
   
    <?php endforeach;?>
</div>