<?php 
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	$column=3;
?>

<div class="accessories">

	<div class="electro-wc-message"></div>
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-left">
			<?php
				$productImage = array(
					1 => array('product_image' => 'assets/images/products/1.jpg'),
					2 => array('product_image' => 'assets/images/products/2.jpg'),
					3 => array('product_image' => 'assets/images/products/3.jpg'),
					4 => array('product_image' => 'assets/images/products/4.jpg'),
					5 => array('product_image' => 'assets/images/products/5.jpg'),
					6 => array('product_image' => 'assets/images/products/6.jpg')
					);
				shuffle($productImage );
				
			?>
			<ul class="products columns-<?php echo $column; ?>">
				
				<?php for ($i=1; $i <=3; $i++) { ?>
					<?php 
						if ( empty( $loop ) ) {
							$loop = 0;
						}
						$loop++;
						$classes = '';
						if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
							$classes = 'first';
						}
						if ( 0 === $loop % $column ) {
							$classes = 'last';
						}
					?>
					<li class="product <?php echo $classes; ?>">
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
				
			</ul><!-- /.products -->
			
			<div class="check-products">
				<div class="checkbox accessory-checkbox">
					<label>
						<input checked disabled type="checkbox" class="product-check"> 
						<span class="product-title">
							<strong>This product: </strong>Ultra Wireless S50 Headphones S50 with Bluetooth
						</span> 
						- 
						<span class="accessory-price">
							<span class="amount">&#36;1,215.00</span>
						</span>
					</label>
				</div>

				<div class="checkbox accessory-checkbox">
					<label>
						<input checked type="checkbox" class="product-check">
						 <span class="product-title">Universal Headphones Case in Black</span> 
						 - 
						 <span class="accessory-price">
						 	<span class="amount">&#36;159.00</span>
						 </span>
					 </label>
				 </div>

				 <div class="checkbox accessory-checkbox">
					 <label>
						 <input checked type="checkbox" class="product-check"> 
						 <span class="product-title">Headphones USB Wires</span> 
						 - 
						 <span class="accessory-price">
						 	<span class="amount">&#36;50.00</span>
						 </span>
					 </label>
				 </div>				
			</div><!-- /.check-products -->

		</div><!-- /.col -->

		<div class="col-xs-12 col-sm-3 col-right">
			<div class="total-price">
				<span class="total-price-html">
					<span class="amount">&#036;1,424.00</span>
				</span> 
				for <span class="total-products">3</span> 
				items				
			</div><!-- /.total-price -->

			<div class="accessories-add-all-to-cart">
				<button type="button" class="button btn btn-primary add-all-to-cart">Add all to cart</button>
			</div><!-- /.accessories-add-all-to-cart -->
		</div><!-- /.col -->
	</div><!-- /.row -->

</div><!-- /.accessories -->
