<section class="products-carousel-tabs animate-in-view fadeIn animated" data-animation="fadeIn">
	<h2 class="sr-only">Product Carousel Tabs</h2>
	<ul class="nav nav-inline">
		<li class="nav-item">
			<a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="#tab-products-2" data-toggle="tab">On Sale</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="#tab-products-3" data-toggle="tab">Top Rated</a>
		</li>
	</ul><!-- /.nav -->

	<div class="tab-content">
		<div class="tab-pane active" id="tab-products-1" role="tabpanel">
			<section class="section-products-carousel" >
				<div class="home-v2-owl-carousel-tabs">
					<div class="woocommerce columns-3">
						<?php require 'inc/components/product-carousel-item1.php'; ?>
					</div>
				</div>
			</section>
		</div><!-- /.tab-pane -->

		<div class="tab-pane" id="tab-products-2" role="tabpanel">
			<section class="section-products-carousel">
				<div class="home-v2-owl-carousel-tabs">
					<div class="woocommerce columns-3">
						<?php require 'inc/components/product-carousel-item1.php'; ?>
					</div>
				</div>
			</section>
		</div><!-- /.tab-pane -->

		<div class="tab-pane" id="tab-products-3" role="tabpanel">
			<section class="section-products-carousel">
				<div class="home-v2-owl-carousel-tabs">
					<div class="woocommerce columns-3">
						<?php require 'inc/components/product-carousel-item1.php'; ?>
					</div>
				</div>
			</section>
		</div><!-- /.tab-pane -->
	</div><!-- /.tab-content -->
</section><!-- /.products-carousel-tabs -->
