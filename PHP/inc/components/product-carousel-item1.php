<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	$column=4;
	if($page=='home-v2') {
		$column=3;
	}
	if($page=='home-v3') {
		$carousel_name='home-v3-carousel-tabs';
	} else if($page=='home-v2') {
		$carousel_name='home-v2-carousel-tabs';
	}
	else {
		$carousel_name='home-carousel-tabs';
	}

?>

<?php
	$products = array(
		array(
			'product_name' => 'Wireless Audio System Multiroom 360',
			'product_category' => 'Audio Speakers',
			'productImageURL' => 'assets/images/products/3.jpg',
			'oldPrice'		=>'$2,299.00',
			'newPrice'		=>'$1,999.00',
			'price'			=>''


			),
		array(
			'product_name' => 'Tablet Thin EliteBook  Revolve 810 G6',
			'product_category' => 'Laptops',
			'productImageURL' => 'assets/images/products/1.jpg',
			'oldPrice'		=>'',
			'newPrice'		=>'',
			'price'			=>'$1,999.00'



			),
		array(
			'product_name' => 'Purple Solo 2 Wireless',
			'product_category' => 'Headphones',
			'productImageURL' => 'assets/images/products/5.jpg',
			'oldPrice'		=>'$2,299.00',
			'newPrice'		=>'$1,999.00',
			'price'			=>''


			),
		array(
			'product_name' => 'Tablet Red EliteBook  Revolve 810 G2',
			'product_category' => 'Laptops',
			'productImageURL' => 'assets/images/products/2.jpg',
			'oldPrice'		=>'',
			'newPrice'		=>'',
			'price'			=>'$1,999.00'


			),
		array(
			'product_name' => 'White Solo 2 Wireless',
			'product_category' => 'Headphones',
			'productImageURL' => 'assets/images/products/6.jpg',
			'oldPrice'		=>'$2,299.00',
			'newPrice'		=>'$1,999.00',
			'price'			=>''



			),
		array(
			'product_name' => 'Smartphone 6S 32GB LTE',
			'product_category' => 'Smartphones',
			'productImageURL' => 'assets/images/products/4.jpg',
			'oldPrice'		=>'',
			'newPrice'		=>'',
			'price'			=>'$1,999.00'


			)
		);

		?>

		<div class="products owl-carousel <?php echo $carousel_name; ?> products-carousel columns-<?php echo $column; ?>">
			<?php foreach($products as $product):
				shuffle($products);
			?>

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

			<div class="product <?php echo $classes; ?>">
				<?php display_product($product['product_category'], $product['product_name'], $product['productImageURL'],$product['oldPrice'], $product['newPrice'], $product['price']); ?>
			</div><!-- /.product -->
			<?php endforeach;?>
		</div><!-- /.products -->
