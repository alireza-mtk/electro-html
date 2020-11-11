<div class="woocommerce-tabs wc-tabs-wrapper">
	<ul class="tabs wc-tabs">
		<li class="accessories_tab active">
			<a href="#tab-accessories">Accessories</a>
		</li>

		<li class="description_tab">
			<a href="#tab-description">Description</a>
		</li>

		<li class="specification_tab">
			<a href="#tab-specification">Specification</a>
		</li>

		<li class="reviews_tab">
			<a href="#tab-reviews">Reviews</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="panel entry-content wc-tab" id="tab-accessories" style="display:block;">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/accessories-tab.php'; ?>
		</div>

		<div class="panel entry-content wc-tab" id="tab-description" style="display:none;">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/description-tab.php'; ?>
		</div>

		<div class="panel entry-content wc-tab" id="tab-specification" style="display:none;">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/specification-tab.php'; ?>
		</div><!-- /.panel -->

		<div class="panel entry-content wc-tab" id="tab-reviews" style="display:none;">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/reviews-tab.php'; ?>
		</div><!-- /.panel -->
	</div>
</div>



