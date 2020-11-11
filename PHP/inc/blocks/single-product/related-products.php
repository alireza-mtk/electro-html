<div class="related products">
	<h2>Related Products</h2>
	<?php
		$productImage = array(
			1 => array('product_image' => 'assets/images/products/1.jpg'),
			2 => array('product_image' => 'assets/images/products/2.jpg'),
			3 => array('product_image' => 'assets/images/products/3.jpg'),
			4 => array('product_image' => 'assets/images/products/4.jpg'),
			);

	?>

	<ul class="products columns-5">

		<?php for ($i=1; $i <5; $i++) { ?>

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
							</span>
						</span>
						<a rel="nofollow" href="index.php?page=single-product" class="button add_to_cart_button">Add to cart</a>
					</div><!-- /.price-add-to-cart -->

					<div class="hover-area">
						<div class="action-buttons">
							<a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
							<a href="#" class="add-to-compare-link">Compare</a>
						</div>
					</div>
				</div><!-- /.product-inner -->
			</div><!-- /.product-outer -->
		</li>
	<?php } ?>
	</ul><!-- /.products -->
</div><!-- /.related -->
