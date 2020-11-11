<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	$column=3;
?>

<div class="electro-tabs electro-tabs-wrapper wc-tabs-wrapper">
	<div class="electro-tab" id="tab-accessories">
		<div class="container">
			<div class="tab-content">
				<ul class="ec-tabs">
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
				</ul><!-- /.ec-tabs -->

				<?php require_once 'inc/blocks/single-product/woocommerce-tabs/accessories-tab.php'; ?>
			</div>
		</div>
	</div><!-- /.electro-tab -->

	<div class="electro-tab" id="tab-description">
		<div class="container">
			<div class="tab-content">
				<ul class="ec-tabs">
					<li class="accessories_tab">
						<a href="#tab-accessories">Accessories</a>
					</li>
					<li class="description_tab active">
						<a href="#tab-description">Description</a>
					</li>
					<li class="specification_tab">
						<a href="#tab-specification">Specification</a>
					</li>
					<li class="reviews_tab">
						<a href="#tab-reviews">Reviews</a>
					</li>
				</ul>

				<?php require_once 'inc/blocks/single-product/woocommerce-tabs/description-tab.php'; ?>
			</div>
		</div>
	</div><!-- /.electro-tab -->


	<div class="electro-tab" id="tab-specification">
		<div class="container">
			<div class="tab-content">
				<ul class="ec-tabs">
					<li class="accessories_tab">
						<a href="#tab-accessories">Accessories</a>
					</li>
					<li class="description_tab">
						<a href="#tab-description">Description</a>
					</li>
					<li class="specification_tab active">
						<a href="#tab-specification">Specification</a>
					</li>
					<li class="reviews_tab">
						<a href="#tab-reviews">Reviews</a>
					</li>
				</ul>

				<?php require_once 'inc/blocks/single-product/woocommerce-tabs/specification-tab.php'; ?>				
			</div>
		</div>
	</div><!-- /.electro-tab -->

	<div class="electro-tab" id="tab-reviews">
		<div class="container">
			<div class="tab-content">
				<ul class="ec-tabs">
					<li class="accessories_tab">
						<a href="#tab-accessories">Accessories</a>
					</li>
					<li class="description_tab">
						<a href="#tab-description">Description</a>
					</li>
					<li class="specification_tab">
						<a href="#tab-specification">Specification</a>
					</li>
					<li class="reviews_tab active">
						<a href="#tab-reviews">Reviews</a>
					</li>
				</ul>

				<?php require_once 'inc/blocks/single-product/woocommerce-tabs/reviews-tab.php'; ?>				
			</div>
		</div>
	</div><!-- /.electro-tab -->
</div><!-- /.electro-tabs -->
		




