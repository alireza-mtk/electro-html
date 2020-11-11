<?php
function display_product($productCategories,$productName,$productImageURL,$oldPrice,$newPrice,$price) { ?>
<div class="product-outer">
    <div class="product-inner">
        <span class="loop-product-categories"><a href="index.php?page=product-category" rel="tag"><?php echo $productCategories;?></a></span>
        <a href="index.php?page=single-product">
            <h3><?php echo $productName;?></h3>
            <div class="product-thumbnail">
                <img src="assets/images/blank.gif" data-echo="<?php echo $productImageURL;?>" class="img-responsive" alt="">
            </div>
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
            <a rel="nofollow" href="index.php?page=single-product" class="button add_to_cart_button">Add to cart</a>
        </div><!-- /.price-add-to-cart -->

        <div class="hover-area">
            <div class="action-buttons">

                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                <a href="index.php?page=compare" class="add-to-compare-link"> Compare</a>
            </div>
        </div>
    </div><!-- /.product-inner -->
</div><!-- /.product-outer -->
<?php } ?>
