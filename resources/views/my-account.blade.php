
<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    @include('ex.head')
    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            @include('ex.nav')
            <!-- ============================================================= Header End ============================================================= -->
            <div id="content" class="site-content">
                <div class="col-full pkh-direction-rtl">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="home-v1.html">صفحه ی اصلی</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>اکانت من
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="type-page hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="customer-login-form pkh-text-right">
                                                <div id="customer_login" class="u-columns col2-set">
                                                    <div class="u-column1 col-1">
                                                        <h2>ورود</h2>
                                                        <form method="post" class="woocomerce-form woocommerce-form-login login">
                                                            <p class="before-login-text">
                                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. 
                                                            </p>
                                                            <p class="form-row form-row-wide">
                                                                <label for="username">نام کاربری یا ایمیل
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <input type="text" class="input-text" name="username" id="username" value="" />
                                                            </p>
                                                            <p class="form-row form-row-wide">
                                                                <label for="password">رمز عبور
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <input class="input-text" type="password" name="password" id="password" />
                                                            </p>
                                                            <p class="form-row">
                                                                <input class="woocommerce-Button button" type="submit" value="Login" name="login">
                                                                <label for="rememberme" class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> مرا به خاطر بسپار
                                                                </label>
                                                            </p>
                                                            <p class="woocommerce-LostPassword lost_password">
                                                                <a href="#">رمز عبور خود را فراموش کرده اید?</a>
                                                            </p>
                                                        </form>
                                                        <!-- .woocommerce-form-login -->
                                                    </div>
                                                    <!-- .col-1 -->
                                                    <div class="u-column2 col-2">
                                                        <h2>ثبت نام</h2>
                                                        <form class="register" method="post">
                                                            <p class="before-register-text">
                                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. 
                                                            </p>
                                                            <p class="form-row form-row-wide">
                                                                <label for="reg_email">ایمیل
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <input type="email" value="" id="reg_email" name="email" class="woocommerce-Input woocommerce-Input--text input-text">
                                                            </p>
                                                            <p class="form-row form-row-wide">
                                                                <label for="reg_password">نام کاربری
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <input type="password" id="reg_password" name="password" class="woocommerce-Input woocommerce-Input--text input-text">
                                                            </p>
                                                            <p class="form-row">
                                                                <input type="submit" class="woocommerce-Button button" name="register" value="Register" />
                                                            </p>
                                                            <div class="register-benefits">
                                                                <h3>امروز ثبت نام کنید و قادر خواهید بود :</h3>
                                                                <ul>
                                                                    <li>راه خود را از طریق پرداخت سرعت</li>
                                                                    <li>سفارشات خود را به راحتی پیگیری کنید</li>
                                                                    <li>یک سابقه از تمام خرید های خود داشته باشید</li>
                                                                </ul>
                                                            </div>
                                                        </form>
                                                        <!-- .register -->
                                                    </div>
                                                    <!-- .col-2 -->
                                                </div>
                                                <!-- .col2-set -->
                                            </div>
                                            <!-- .customer-login-form -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .entry-content -->
                                </div>
                                <!-- .hentry -->
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