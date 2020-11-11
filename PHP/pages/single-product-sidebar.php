<div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb">
			<a href="index.php">Home</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i></span>
			<a href="index.php?page=product-category">Accessories</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i></span>
			<a href="index.php?page=product-category">Headphones</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i></span>Ultra Wireless S50 Headphones S50 with Bluetooth
		</nav><!-- /.woocommerce-breadcrumb -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main">		

				<div class="product">

					<div class="single-product-wrapper">
						<div class="product-images-wrapper">
							<span class="onsale">Sale!</span>
							 <?php require_once 'inc/blocks/single-product/images-block.php'; ?>
						</div><!-- /.product-images-wrapper -->

						<?php require_once 'inc/blocks/single-product/single-product-summary.php'; ?>

					</div><!-- /.single-product-wrapper -->


					<div class="woocommerce-tabs wc-tabs-wrapper">
						<ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
							<li class="nav-item accessories_tab">
								<a href="#tab-accessories" data-toggle="tab">Accessories</a>
							</li>

							<li class="nav-item description_tab">
								<a href="#tab-description" class="active" data-toggle="tab">Description</a>
							</li>

							<li class="nav-item specification_tab">
								<a href="#tab-specification" data-toggle="tab">Specification</a>
							</li>

							<li class="nav-item reviews_tab">
								<a href="#tab-reviews" data-toggle="tab">Reviews</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane panel entry-content wc-tab" id="tab-accessories">
								<?php require_once 'inc/blocks/single-product/woocommerce-tabs/accessories-tab.php'; ?>
							</div>

							<div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
								<?php require_once 'inc/blocks/single-product/woocommerce-tabs/description-tab.php'; ?>
							</div>

							<div class="tab-pane panel entry-content wc-tab" id="tab-specification">
								<?php require_once 'inc/blocks/single-product/woocommerce-tabs/specification-tab.php'; ?>
							</div><!-- /.panel -->

							<div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
								<?php require_once 'inc/blocks/single-product/woocommerce-tabs/reviews-tab.php'; ?>
							</div><!-- /.panel -->
						</div>
					</div><!-- /.woocommerce-tabs -->
					
					<?php require_once 'inc/blocks/single-product/related-products.php'; ?>
				</div>
			</main><!-- /.site-main -->
		</div><!-- /.content-area -->

		<div id="sidebar" class="sidebar" role="complementary">

			<?php require_once 'inc/blocks/single-product/single-product-sidebar/product-categories-widget.php'; ?>

			<?php require_once 'inc/blocks/single-product/single-product-sidebar/text-widget.php'; ?>

			<?php require_once  'inc/blocks/single-product/single-product-sidebar/woocommerce-product-widget.php'; ?>
		</div><!-- /.sidebar-shop -->

	</div><!-- .col-full -->
</div><!-- #content -->
