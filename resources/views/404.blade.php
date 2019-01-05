
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    @include('ex.head')
    <body class="page-template-default error-page">
        <div id="page" class="hfeed site">
            @include('ex.nav')
             <div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="home-v1.html">صفحه ی اصلی</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>مشکل 404
                        </nav>
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="error404">
                                    <div class="info-404">
                                        <h2 class="title">404!</h2>
                                        <p class="lead error-text">وای! این صفحه را نمیتوان یافت.</p>
                                        <p class="lead">هیچ چیز در این مکان یافت نشد سعی کنید جستجو کنید یا از لینک زیر دیدن کنید.</p>
                                        <div class="sub-form-row">
                                            <div class="widget woocommerce widget_product_search">
                                                <form class="search-form">
                                                    <input type="text" placeholder="Search products...">
                                                    <button class="button" type="button">جستجو</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .sub-form-row -->
                                </div>
                                <!-- .error404 -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->
            @include('ex.footer')
        </div>
        
        @include('ex.js')
        
    </body>
</html>