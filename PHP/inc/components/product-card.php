<?php
function display_card_product($productImageURL,$productCategories,$productName,$newPrice,$oldPrice,$price ) { ?>

    <div class="product-outer">
		<div class="media product-inner">

			<a class="media-left" href="index.php?page=single-product" title="Pendrive USB 3.0 Flash 64 GB">
				<img class="media-object wp-post-image img-responsive" src="assets/images/blank.gif" data-echo="<?php echo $productImageURL;?>" alt="">

			</a>

			<div class="media-body">
				<span class="loop-product-categories">
					<a href="index.php?page=product-category" rel="tag"><?php echo $productCategories;?></a>
				</span>

				<a href="index.php?page=single-product">
					<h3><?php echo $productName;?></h3>
				</a>

				<div class="price-add-to-cart">
					<span class="price">
	                    <span class="electro-price">
	                        <ins><span class="amount"> <?php echo $newPrice;?></span></ins>
	                        <?php if($oldPrice):?>
	                            <del><span class="amount"><?php echo $oldPrice;?></span></del>
	                        <?php endif;?>
                            <span class="amount"> <?php echo $price;?></span>
	                    </span>
	                </span>

					<a href="index.php?page=cart" class="button add_to_cart_button">Add to cart</a>
				</div><!-- /.price-add-to-cart -->

				<div class="hover-area">
	                <div class="action-buttons">

	                    <a href="#" class="add_to_wishlist">
	                            Wishlist</a>

	                    <a href="#" class="add-to-compare-link">Compare</a>
	                </div>
	            </div>

			</div>
		</div><!-- /.product-inner -->
	</div><!-- /.product-outer -->

<?php } ?>
