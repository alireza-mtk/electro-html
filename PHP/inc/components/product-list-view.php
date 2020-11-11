<div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="true">
	<?php require 'inc/components/product-image.php'; ?>

	<ul class="products columns-3">
		<?php for ($i=1; $i <=15; $i++) { ?>
			<li class="product list-view">
				<div class="media">
					<div class="media-left">
						<a href="index.php?page=single-product">
							<img class="wp-post-image" data-echo="<?php echo $productImage[$i]['product_image'] ?>" src="assets/images/blank.gif" alt="">
						</a>
					</div>
					<div class="media-body media-middle">
						<div class="row">
							<div class="col-xs-12">
								<span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="index.php?page=single-product"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
									<div class="product-rating">
										<div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
									</div>
									<div class="product-short-description">
										<ul style="padding-left: 18px;">
											<li>4.5 inch HD Screen</li>
											<li>Android 4.4 KitKat OS</li>
											<li>1.4 GHz Quad Core&trade; Processor</li>
											<li>20 MP front Camera</li>
										</ul>
									</div>
								</a>
							</div>
							<div class="col-xs-12">

								<div class="availability in-stock">
									Availablity: <span>In stock</span>
								</div>


								<span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
								<a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="index.php?page=single-product" rel="nofollow">Add to cart</a>
								<div class="hover-area">
									<div class="action-buttons">
										<div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
											<a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

											<div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
												<span class="feedback">Product added!</span>
												<a rel="nofollow" href="#">Wishlist</a>
											</div>

											<div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
												<span class="feedback">The product is already in the wishlist!</span>
												<a rel="nofollow" href="#">Wishlist</a>
											</div>

											<div style="clear:both"></div>
											<div class="yith-wcwl-wishlistaddresponse"></div>

										</div>
										<div class="clear"></div>
										<a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php } ?>
	</ul>
</div>
