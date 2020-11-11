<!-- ============================================================= 2-1-2 Product Grid ============================================================= -->
<section class="products-2-1-2 animate-in-view fadeIn animated" data-animation="fadeIn">
<h2 class="sr-only">Products Grid</h2>
<div class="container">


	<ul class="nav nav-inline nav-justified">

		<li class="nav-item"><a href="index.php?page=shop" class="active nav-link">Best Deals</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">TV &amp; Audio</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">Cameras</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">Audio</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">Smartphones</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">GPS &amp; Navi</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">Computers</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">Portable Audio</a></li>
		<li class="nav-item"><a class="nav-link" href="index.php?page=shop">Accessories</a></li>

	</ul>



	<div class="columns-2-1-2">
		<?php
			$productImage = array(
				1 => array('product_image' => 'assets/images/product-2-1-2/1.jpg'),
				2 => array('product_image' => 'assets/images/product-2-1-2/2.jpg'),
				3 => array('product_image' => 'assets/images/product-2-1-2/3.jpg'),
				4 => array('product_image' => 'assets/images/product-2-1-2/4.jpg'),
				);
			shuffle($productImage );
			
		?>
		<ul class="products exclude-auto-height">
			<?php for ($i=1; $i < 3; $i++) { ?>
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
									
									<a href="#" rel="nofollow" class="add_to_wishlist">
											Wishlist</a>

									<a href="#" class="add-to-compare-link">Compare</a>
								</div>
							</div>
						</div><!-- /.product-inner -->
					</div><!-- /.product-outer -->
				</li>
			<?php } ?>
		</ul>

		<ul class="products exclude-auto-height product-main-2-1-2">
			<li class="last product">
				<div class="product-outer">
					<div class="product-inner">
						<span class="loop-product-categories"><a href="index.php?page=product-category" rel="tag">Smartphones</a></span>
						<a href="index.php?page=single-product">
							<h3>Notebook Black Spire V Nitro  VN7-591G</h3>
							<div class="product-thumbnail">
								<img class="wp-post-image" data-echo="assets/images/product-2-1-2/main.jpg" src="assets/images/blank.gif" alt="">
															
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
								
								<a href="#" rel="nofollow" class="add_to_wishlist">
										Wishlist</a>

								<a href="#" class="add-to-compare-link">Compare</a>
							</div>
						</div>
					</div><!-- /.product-inner -->
				</div><!-- /.product-outer -->
			</li>
			
		</ul>

		<ul class="products exclude-auto-height">
			<?php for ($i=1; $i < 3; $i++) { ?>
				<li class="product">
					<div class="product-outer">
						<div class="product-inner">
							<span class="loop-product-categories"><a href="index.php?page=product-category" rel="tag">Smartphones</a></span>
							<a href="index.php?page=single-product">
								<h3>Notebook Black Spire V Nitro  VN7-591G</h3>
								<div class="product-thumbnail">
									
									<img class="wp-post-image" data-echo="<?php echo $productImage[$i]['product_image'] ?>" src="assets/images/blank.gif" alt="">
																						
													
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
									
									<a href="#" rel="nofollow" class="add_to_wishlist">
											Wishlist</a>

									<a href="#" class="add-to-compare-link">Compare</a>
								</div>
							</div>
						</div><!-- /.product-inner -->
					</div><!-- /.product-outer -->
				</li>
			<?php } ?>
		</ul>
									
		</div>
	</div>
</section>

<!-- ============================================================= 2-1-2 Product Grid : End============================================================= -->