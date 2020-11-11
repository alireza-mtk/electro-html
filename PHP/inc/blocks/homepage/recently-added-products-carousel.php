
<section class="home-v1-recently-viewed-products-carousel section-products-carousel animate-in-view fadeIn animated" data-animation="fadeIn">

	<header>
		<h2 class="h1">Recently Added</h2>
		<div class="owl-nav">
			<a href="#products-carousel-prev" data-target="#recently-added-products-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a>
			<a href="#products-carousel-next" data-target="#recently-added-products-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
		</div>
	</header>

	<div id="recently-added-products-carousel">
		<div class="woocommerce columns-6">
			<div class="products owl-carousel recently-added-products products-carousel columns-6">
				<?php require 'inc/components/product-carousel-item.php'; ?>
			</div>
		</div>
	</div>
</section>
