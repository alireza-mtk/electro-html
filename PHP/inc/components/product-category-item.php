	<?php 
		$products = array(
			array(
				'product_name' => 'Accessories',
				'productImageURL' => 'assets/images/product-category/1.jpg'


				),
			array(
				'product_name' => 'All in One',
				'productImageURL' => 'assets/images/product-category/2.jpg'



				),
			array(
				'product_name' => 'Gaming',
				'productImageURL' => 'assets/images/product-category/3.jpg'


				),
			array(
				'product_name' => 'Laptops',
				'productImageURL' => 'assets/images/product-category/4.jpg'


				),
			array(
				'product_name' => 'Mac Computers',
				'productImageURL' => 'assets/images/product-category/5.jpg'



				),
			array(
				'product_name' => 'Peripherals',
				'productImageURL' => 'assets/images/product-category/6.jpg'


				),
			array(
				'product_name' => 'Servers',
				'productImageURL' => 'assets/images/product-category/4.jpg'


				),
			array(
				'product_name' => 'Ultrabooks',
				'productImageURL' => 'assets/images/product-category/2.jpg'


				)
			);
		shuffle($products);
		foreach($products as $product):
			?>

		<li class="product-category product">
			<?php display_product_category($product['productImageURL'],$product['product_name']) ; ?>
		</li><!-- /.item -->
	<?php endforeach;?>
	