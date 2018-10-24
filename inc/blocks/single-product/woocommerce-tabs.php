<div class="woocommerce-tabs wc-tabs-wrapper">
	<ul role="tablist" class="nav tabs wc-tabs">
		<li class="nav-item accessories_tab">
			<a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab-accessories" href="#tab-accessories">Accessories</a>
		</li>
		<li class="nav-item description_tab">
			<a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description" href="#tab-description">Description</a>
		</li>
		<li class="nav-item specification_tab">
			<a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-specification" href="#tab-specification">Specification</a>
		</li>
		<li class="nav-item reviews_tab">
			<a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews" href="#tab-reviews">Reviews (1)</a>
		</li>
	</ul><!-- /.ec-tabs -->
	
	
	<div class="tab-content">
		<div class="tab-pane active" id="tab-accessories" role="tabpanel">
			<?php require 'inc/blocks/single-product/woocommerce-tabs/accessories-tab.php'; ?>
		</div>

		<div class="tab-pane panel wc-tab" id="tab-description" role="tabpanel">
			<?php require'inc/blocks/single-product/woocommerce-tabs/description-tab.php'; ?>
		</div>

		<div class="tab-pane" id="tab-specification" role="tabpanel">
			<?php require 'inc/blocks/single-product/woocommerce-tabs/specification-tab.php'; ?>
		</div>

		<div class="tab-pane" id="tab-reviews" role="tabpanel">
			<?php require 'inc/blocks/single-product/woocommerce-tabs/reviews1-tab.php'; ?>
		</div>
	</div>
</div>