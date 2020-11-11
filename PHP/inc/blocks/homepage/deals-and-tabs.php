<div class="home-v1-deals-and-tabs deals-and-tabs row animate-in-view fadeIn animated" data-animation="fadeIn">
	<div class="deals-block col-lg-4">
		<section class="section-onsale-product">
			<header>
				<h2 class="h1">Special Offer</h2>
				<div class="savings">
					<span class="savings-text">Save <span class="amount">$20.00</span></span>
				</div>
			</header><!-- /header -->

			<div class="onsale-products">
				<div class="onsale-product">
					<a href="index.php?page=shop">
						<div class="product-thumbnail">
							<img class="wp-post-image" data-echo="assets/images/onsale-product.jpg" src="assets/images/blank.gif" alt=""></div>

							<h3>Game Console Controller <br>+ USB 3.0 Cable</h3>
					</a>

					<span class="price">
						<span class="electro-price">
							<ins><span class="amount">$79.00</span></ins>
							<del><span class="amount">$99.00</span></del>
						</span>
					</span><!-- /.price -->

					<div class="deal-progress">
						<div class="deal-stock">
							<span class="stock-sold">Already Sold: <strong>2</strong></span>
							<span class="stock-available">Available: <strong>26</strong></span>
						</div>

						<div class="progress">
							<span class="progress-bar" style="width:8%">8</span>
						</div>
					</div><!-- /.deal-progress -->

					<div class="deal-countdown-timer">
						<div class="marketing-text text-xs-center">Hurry Up! Offer ends in:	</div>


						<div id="deal-countdown" class="countdown">
							<span data-value="0" class="days"><span class="value">0</span><b>Days</b></span>
							<span class="hours"><span class="value">7</span><b>Hours</b></span>
							<span class="minutes"><span class="value">29</span><b>Mins</b></span>
							<span class="seconds"><span class="value">13</span><b>Secs</b></span>
						</div>
						<span class="deal-end-date" style="display:none;">2016-12-31</span>
						<script>
						// set the date we're counting down to
						var deal_end_date = document.querySelector(".deal-end-date").textContent;
						var target_date = new Date( deal_end_date ).getTime();

						// variables for time units
						var days, hours, minutes, seconds;

						// get tag element
						var countdown = document.getElementById( 'deal-countdown' );

						// update the tag with id "countdown" every 1 second
						setInterval( function () {

						// find the amount of "seconds" between now and target
						var current_date = new Date().getTime();
						var seconds_left = (target_date - current_date) / 1000;

						// do some time calculations
						days = parseInt(seconds_left / 86400);
						seconds_left = seconds_left % 86400;

						hours = parseInt(seconds_left / 3600);
						seconds_left = seconds_left % 3600;

						minutes = parseInt(seconds_left / 60);
						seconds = parseInt(seconds_left % 60);

						// format countdown string + set tag value
						countdown.innerHTML = '<span data-value="' + days + '" class="days"><span class="value">' + days +  '</span><b>Days</b></span><span class="hours"><span class="value">' + hours + '</span><b>Hours</b></span><span class="minutes"><span class="value">'
						+ minutes + '</span><b>Mins</b></span><span class="seconds"><span class="value">' + seconds + '</span><b>Secs</b></span>';

						}, 1000 );
						</script>
					</div><!-- /.deal-countdown-timer -->
				</div><!-- /.onsale-product -->
			</div><!-- /.onsale-products -->
		</section><!-- /.section-onsale-product -->
	</div><!-- /.col -->


	<div class="tabs-block col-lg-8">
		<div class="products-carousel-tabs">
			<ul class="nav nav-inline">
				<li class="nav-item"><a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab-products-2" data-toggle="tab">On Sale</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab-products-3" data-toggle="tab">Top Rated</a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="tab-products-1" role="tabpanel">
					<div class="woocommerce columns-3">
						<?php require 'inc/components/product-item.php'; ?>
					</div>
				</div>

				<div class="tab-pane" id="tab-products-2" role="tabpanel">
					<div class="woocommerce columns-3">
						<?php
							$productImage = array(
								1 => array('product_image' => 'assets/images/products/6.jpg'),
								2 => array('product_image' => 'assets/images/products/5.jpg'),
								3 => array('product_image' => 'assets/images/products/4.jpg'),
								4 => array('product_image' => 'assets/images/products/3.jpg'),
								5 => array('product_image' => 'assets/images/products/2.jpg'),
								6 => array('product_image' => 'assets/images/products/1.jpg'),
								7 => array('product_image' => 'assets/images/products/3.jpg')
								);
							shuffle($productImage );

						?>
						<ul class="products columns-<?php echo $column; ?>">
							<?php for ($i=1; $i <=6; $i++) { ?>
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
						</ul>
					</div>
				</div>

				<div class="tab-pane" id="tab-products-3" role="tabpanel">
					<div class="woocommerce columns-3">
						<?php require 'inc/components/product-item.php'; ?>

					</div>
				</div>
			</div>
		</div>
	</div><!-- /.tabs-block -->
</div><!-- /.deals-and-tabs -->
