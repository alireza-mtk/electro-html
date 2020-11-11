<div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb" ><a href="http://demo2.transvelo.in/electro">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Smart Phones &amp; Tablets</nav>

		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<section class="section-product-cards-carousel" >
					<header>
						<h2 class="h1">Recommended Products</h2>
						<div class="owl-nav">
							<a href="#products-carousel-prev" data-target="#recommended-product" class="slider-prev"><i class="fa fa-angle-left"></i></a>
							<a href="#products-carousel-next" data-target="#recommended-product" class="slider-next"><i class="fa fa-angle-right"></i></a>
						</div>
					</header>

					<div id="recommended-product">
						<div class="woocommerce columns-4">
							<div class="products owl-carousel products-carousel columns-4 owl-loaded owl-drag">
								<?php require 'inc/components/product-carousel-item.php'; ?>
							</div>
						</div>
					</div>
				</section>

				<header class="page-header">
					<h1 class="page-title">Smart Phones &amp; Tablets</h1>
					<p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
				</header>

				<div class="shop-control-bar">
					<ul class="shop-view-switcher nav nav-tabs" role="tablist">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
						<li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li>
						<li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
						<li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li>
					</ul>
					<?php require_once 'inc/components/shop-control-bar.php'; ?>
				</div>

				<div class="tab-content">
					<?php require_once 'inc/components/product-grid.php'; ?>
					<?php require_once 'inc/components/product-grid-ext.php'; ?>
					<?php require_once 'inc/components/product-list-view.php'; ?>
					<?php require_once 'inc/components/product-list-view-small.php'; ?>
				</div>
				<?php require_once 'inc/components/shop-control-bar-bottom.php'; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<div id="sidebar" class="sidebar" role="complementary">
			<?php require_once 'inc/components/sidebar/product-categories-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/product-filters-sidebar.php'; ?>
			<?php require_once 'inc/components/sidebar/home-v2/home-v2-ad-block.php'; ?>
			<?php require_once 'inc/components/sidebar/home-v2/latest-products.php'; ?>
		</div>

	</div><!-- .container -->
</div><!-- #content -->
