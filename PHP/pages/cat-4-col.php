<div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb" ><a href="index.php">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Laptops &amp; Computers</nav>

		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php require_once 'inc/blocks/product-categories-col-4.php'; ?>

				<section class="section-product-cards-carousel" >
					<header><h2 class="h1">Best Sellers</h2></header>
					<div id="home-v-product-cards-careousel">
						<div class="woocommerce columns-2 home-v1-product-cards-carousel product-cards-carousel owl-carousel">
							<?php require 'inc/components/product-card-item.php'; ?>
						</div>
					</div><!-- #home-v1-product-cards-careousel -->
				</section>

				<section class="section-product-cards-carousel" >
					<header><h2 class="h1">Top rated in this category</h2></header>
					<div id="home-v1-product-cards-careousel">
						<div class="woocommerce columns-2 home-v1-product-cards-carousel product-cards-carousel owl-carousel">
							<?php require 'inc/components/product-card-item.php'; ?>
						</div>
					</div><!-- #home-v1-product-cards-careousel -->
				</section>

			</main><!-- #main -->
		</div><!-- #primary -->

		<div id="sidebar" class="sidebar" role="complementary">
			<?php require_once 'inc/components/sidebar/product-categories-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/home-v2/home-v2-ad-block.php'; ?>
			<?php require_once 'inc/components/sidebar/home-v2/latest-products.php'; ?>
		</div>

	</div><!-- .container -->
</div><!-- #content -->
