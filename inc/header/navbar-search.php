<form class="navbar-search" method="get" action="index.php">
	<label class="sr-only screen-reader-text" for="search">Search for:</label>
	<div class="input-group">

		<div class="input-group-btn input-group-append">
			<input type="hidden" id="search-param" name="post_type" value="product"/>
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-search"></i>
				<span class="search-btn">جستجو</span>
			</button>
		</div><!-- .input-group-btn -->
		
		<div class="input-group-addon search-categories popover-header">
			<select name='product_cat' id='product_cat' class='postform resizeselect'>
				<option value='0' selected='selected'>تمامی گروه ها</option>
				<option class="level-0" value="television">تلوزیون ها</option>
				<option class="level-0" value="home-theater-audio">تئاتر خانگی</option>
				<option class="level-0" value="headphones">هدفون ها</option>
				<option class="level-0" value="digital-cameras">دوربین دیجیتال</option>
				<option class="level-0" value="cells-tablets">تلفن همراه و تبلت</option>
				<option class="level-0" value="smartwatches">ساعت هوشمند</option>
				<option class="level-0" value="games-consoles">کنسول بازی</option>
				<option class="level-0" value="printer">پرینتر</option>
				<option class="level-0" value="tv-video">صدا و تصویر</option>
				<option class="level-0" value="home-entertainment">لوازم خانگی</option>
				<option class="level-0" value="speakers">اسپیکر ها</option>
				<option class="level-0" value="computers-laptops">کامپیوتر و لپتاپ</option>
				<option class="level-0" value="ultrabooks">اولترا بوک</option>
				<option class="level-0" value="notebooks">نوت بوک</option>
				<option class="level-0" value="desktop-pcs">سیستم های رو میزی</option>
				<option class="level-0" value="mac-computers">کامپیوتر های مک</option>
				<option class="level-0" value="all-in-one-pc">سیستم های ال این وان</option>
				<option class="level-0" value="audio-music">پخش کننده موزیک</option>
				<option class="level-0" value="pc-components">لوازم جانبی کامپیوتر</option>
			</select>
		</div><!-- .input-group-addon -->

		<input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="نام محصول را جستجو کنید ..."/>

	</div><!-- .input-group -->
</form><!-- .navbar-search -->