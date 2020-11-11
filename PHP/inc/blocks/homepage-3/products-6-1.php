<section class="products-6-1 animate-in-view fadeIn animated" data-animation="fadeIn">
	<div class="container">
		<header>
			<h2 class="h1">Bestsellers</h2>
			<ul class="nav nav-inline">
				<li class="nav-item active">
					<span class="nav-link">Top 7</span>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?page=product-category">Smart Phones &amp; Tablets</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?page=product-category">Laptops &amp; Computers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?page=product-category">Video Cameras</a>
				</li>
			</ul>
		</header>

		<div class="columns-6-1">
		<?php
			$productImage = array(
				1 => array('product_image' => 'assets/images/products/1.jpg'),
				2 => array('product_image' => 'assets/images/products/2.jpg'),
				3 => array('product_image' => 'assets/images/products/3.jpg'),
				4 => array('product_image' => 'assets/images/products/4.jpg'),
				5 => array('product_image' => 'assets/images/products/5.jpg'),
				6 => array('product_image' => 'assets/images/products/6.jpg'),
				7 => array('product_image' => 'assets/images/products/2.jpg')
				);
			shuffle($productImage );
			
		?>
		<ul class="products exclude-auto-height products-6">
			<?php for ($i=1; $i < 7; $i++) { ?>
				<li class="product">
					<div class="product-outer">
						<div class="product-inner">
							<span class="loop-product-categories"><a href="index.php?page=product-category" rel="tag">Smartphones</a></span>
							<a href="index.php?page=single-product">
								<h3>Notebook Black Spire V Nitro  VN7-591G</h3>
								<div class="product-thumbnail">
									
									<img data-echo="<?php echo $productImage[$i]['product_image'] ?>" src="assets/images/blank.gif" alt="">
													
													
								</div>
							</a>

							<div class="price-add-to-cart">
								<span class="price">
									<span class="electro-price">
										<ins><span class="amount">&#036;1,999.00</span></ins> 
										<del><span class="amount">&#036;2,299.00</span></del>
									</span>
								</span>
								<a rel="nofollow" href="index.php?page=single-product" class="button add_to_cart_button">Add to cart</a>
							</div><!-- /.price-add-to-cart -->
							
							<div class="hover-area">
								<div class="action-buttons">
									
									<a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
											Wishlist</a>

									<a href="index.php?page=compare" class="add-to-compare-link">Compare</a>
								</div>
							</div>
						</div><!-- /.product-inner -->
					</div><!-- /.product-outer -->
				</li>
			<?php } ?>
		</ul>

			<ul class="products exclude-auto-height product-main-6-1">
				<li class="first product">

					<div class="product-outer">
						<div class="product-inner">
							<span class="loop-product-categories">
								<a href="index.php?page=product-category" rel="tag">Game Consoles</a>
							</span>

							<a href="index.php?page=single-product">
								<h3>Game Console Controller <br/>+ USB 3.0 Cable</h3>
								<div class="product-thumbnail">
									 <img src="assets/images/blank.gif" data-echo="assets/images/products/6-1.jpg" class="wp-post-image" alt="">
								</div>
							</a>

							<div class="thumbnails columns-3">
								<a href="images/products/thumb1.jpg" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
									<img src="assets/images/blank.gif" data-echo="assets/images/products/thumb1.jpg"  alt="">
								</a>
								<a href="images/products/thumb2.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
									<img src="assets/images/blank.gif" data-echo="assets/images/products/thumb2.jpg"  alt="">
								</a>
								<a href="images/products/thumb3.jpg" class="zoom last" title="" data-rel="prettyPhoto[product-gallery]">
									<img src="assets/images/blank.gif" data-echo="assets/images/products/thumb3.jpg"  alt="">
								</a>
							</div>

							<div class="price-add-to-cart">
								<span class="price">
									<span class="electro-price"><ins><span class="amount">&#36;79.00</span></ins> <del><span class="amount">&#36;99.00</span></del></span>
								</span>

								<a rel="nofollow" href="index.php?page=cart" class="button add_to_cart_button">Add to cart</a>
							</div><!-- /.price-add-to-cart -->

							<div class="hover-area">
								<div class="action-buttons">
									
									<a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
											Wishlist</a>

									<a href="index.php?page=compare" class="add-to-compare-link">Compare</a>
								</div>
							</div>
						</div><!-- /.product-inner -->
					</div><!-- /.product-outer -->
				</li><!-- /.product -->
			</ul><!-- /.products-->
		</div><!-- /.columns-6-1 -->
	</div><!-- /.container-->
</section><!-- /.products-6-1 -->