<nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
	<ul id="menu-primary-menu" class="nav yamm">
		<li class="sale-clr yamm-fw menu-item animate-dropdown">
			<a title="Super deals" href="index.php?page=product-category">سوپر معاملات</a>
		</li>

		<li class="menu-item menu-item-has-children animate-dropdown dropdown">
			<a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">روز مادر <span class="caret"></span></a>
			<ul role="menu" class=" dropdown-menu">
				<li class="menu-item animate-dropdown">
					<a title="Wishlist" href="index.php?page=wishlist">علاقه مندی ها</a>
				</li>

				<li class="menu-item animate-dropdown">
					<a title="Add to compare" href="index.php?page=compare">افزودن برای مقایسه</a>
				</li>

				<li class="menu-item animate-dropdown">
					<a title="About Us" href="index.php?page=about">درباره ما</a>
				</li>

				<li class="menu-item animate-dropdown">
					<a title="Track Order" href="index.php?page=track-your-order">پیگیری سفارش</a>
				</li>
			</ul><!-- .dropdown-menu -->
		</li>
		
		<li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
			<a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">صفحات <span class="caret"></span></a>
			<?php require_once 'inc/menu/mega-menu.php'; ?>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="Logitech Sale" href="index.php?page=product-category">محصولات لاجی تچ</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="Headphones Sale" href="index.php?page=product-category">گروه هدفون ها</a>
		</li>
		
		<li class="techmarket-flex-more-menu-item dropdown">
			<a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
			<ul class="overflow-items dropdown-menu"></ul><!-- . -->
		</li>
	</ul><!-- .nav -->
</nav><!-- .primary-navigation -->
