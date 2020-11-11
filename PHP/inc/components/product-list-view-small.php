<div role="tabpanel" class="tab-pane" id="list-view-small" aria-expanded="true">
	<?php require 'inc/components/product-image.php'; ?>

	<ul class="products columns-3">
		<?php for ($i=1; $i <=15; $i++) { ?>
			<li class="product list-view list-view-small">
				<div class="media">
					<div class="media-left">
						<a href="index.php?page=single-product">
							<img class="wp-post-image" data-echo="<?php echo $productImage[$i]['product_image'] ?>" src="assets/images/blank.gif" alt="">
						</a>
					</div>
					<div class="media-body media-middle">
						<div class="row">
							<div class="col-xs-12">
								<span class="loop-product-categories"><a rel="tag" href="index.php?page=product-category">Smartphones</a></span><a href="index.php?page=product-category"><h3>Ultrabook UX605CA-FC050T</h3>
									<div class="product-short-description">
										<ul style="padding-left: 18px;">
											<li>4.5 inch HD Screen</li>
											<li>Android 4.4 KitKat OS</li>
											<li>1.4 GHz Quad Core&trade; Processor</li>
											<li>20 MP front Camera</li>
										</ul>
									</div>
									<div class="product-rating">
										<div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
									</div>
								</a>
							</div>
							<div class="col-xs-12">
								<div class="price-add-to-cart">
									<span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
									<a class="button add_to_cart_button" href="index.php?page=cart" rel="nofollow">Add to cart</a>
								</div><!-- /.price-add-to-cart -->
								<div class="hover-area">
						            <div class="action-buttons">

						                <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>

						                <a href="index.php?page=compare" class="add-to-compare-link">Compare</a>
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
