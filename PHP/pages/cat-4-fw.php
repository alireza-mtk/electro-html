<div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb" ><a href="index.php">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Laptops &amp; Computers</nav>

		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php require_once 'inc/blocks/product-categories-col-4.php'; ?>

				<section class="section-product-cards-carousel" >
                    <header>
                		<h2 class="h1">People buying in this category</h2>
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
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->
</div><!-- #content -->
