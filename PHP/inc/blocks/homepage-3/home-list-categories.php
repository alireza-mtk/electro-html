<section class="home-list-categories animate-in-view fadeIn animated" data-animation="fadeIn">
	<header>
		<h2 class="h1">Top Categories this Month</h2>
	</header>
	<?php
		$productListImage = array(
			1 => array('product_image' => 'assets/images/products/1.jpg'),
			2 => array('product_image' => 'assets/images/products/2.jpg'),
			3 => array('product_image' => 'assets/images/products/3.jpg'),
			4 => array('product_image' => 'assets/images/products/4.jpg'),
			5 => array('product_image' => 'assets/images/products/5.jpg'),
			6 => array('product_image' => 'assets/images/products/6.jpg')
			);

		$productName = array(
			1 => array('product_name' => 'Smart Phones & Tablets'),
			2 => array('product_name' => 'Video Games & Consoles'),
			3 => array('product_name' => 'Gadgets'),
			4 => array('product_name' => 'Home Entertainment'),
			5 => array('product_name' => 'Laptops & Computers'),
			6 => array('product_name' => 'Accessories')
			);
		
	?>
	<ul class="categories">
		<?php 
			for( $i = 1; $i<=6; $i++ ) {
		?>
		<li class="category">
			<div class="media">
				<a class="media-left" href="index.php?page=product-category">
					<img data-echo="<?php echo $productListImage[$i]['product_image'] ?>" src="assets/images/blank.gif" alt="">				
				</a><!-- /.media-left -->

				<div class="media-body">
					<h4 class="media-heading"><a href="index.php?page=product-category"><?php echo $productName[$i]['product_name'] ?></a></h4>
					<ul class="sub-categories list-unstyled">	
						<li class="cat-item">
							<a href="index.php?page=product-category" >Accessories</a>
						</li>
						<li class="cat-item">
							<a href="index.php?page=product-category" >Chargers</a>
						</li>
						<li class="cat-item">
							<a href="index.php?page=product-category" >Powerbanks</a>
						</li>
						<li class="cat-item">
							<a href="index.php?page=product-category" >Smartphones</a>
						</li>
					</ul>				
				</div><!-- /.media-body -->
			</div><!-- /.media -->
			<a class="see-all" href="#">See all</a>
		</li>
		<?php } ?>
	</ul>
</section>