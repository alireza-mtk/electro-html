<?php 
function display_product_category($productImageURL,$productName){ ?>
		<a href="index.php?page=shop">
			<img src="<?php echo $productImageURL;?>" class="img-responsive" alt="">
			<h3>
			<?php echo $productName;?>
			<mark class="count">(2)</mark>
			</h3>
		</a>
			
<?php } ?>