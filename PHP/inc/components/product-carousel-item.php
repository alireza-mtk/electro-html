
	<?php
		$products = array(
			array(
				'product_name' => 'Notebook Black Spire V Nitro  VN7-591G',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/1.jpg',
				'oldPrice'		=>'',
				'newPrice'		=>'',
				'price'			=>'$1,999.00'

				),
			array(
				'product_name' => 'Tablet Thin EliteBook  Revolve 810 G6',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/2.jpg',
				'oldPrice'		=>'$2,299.00',
				'newPrice'		=>'$1,999.00',
				'price'			=>''


				),
			array(
				'product_name' => 'Notebook Widescreen Z51-70  40K6013UPB',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/3.jpg',
				'oldPrice'		=>'$2,299.00',
				'newPrice'		=>'$1,999.00',
				'price'			=>''


				),
			array(
				'product_name' => 'Notebook Purple G952VX-T7008T',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/4.jpg',
				'oldPrice'		=>'',
				'newPrice'		=>'',
				'price'			=>'$1,999.00'

				),
			array(
				'product_name' => 'Laptop Yoga 21 80JH0035GE  W8.1 (Copy)',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/5.jpg',
				'oldPrice'		=>'',
				'newPrice'		=>'',
				'price'			=>'$1,999.00'

				),
			array(
				'product_name' => 'Smartphone 6S 128GB LTE',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/6.jpg',
				'oldPrice'		=>'',
				'newPrice'		=>'',
				'price'			=>'$200.00'


				),
			array(
				'product_name' => 'Notebook Purple G952VX-T7008T',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/3.jpg',
				'oldPrice'		=>'',
				'newPrice'		=>'',
				'price'			=>'$1,999.00'

				),
			array(
				'product_name' => 'Tablet Thin EliteBook  Revolve 810 G6',
				'product_category' => 'Smartphones',
				'productImageURL' => 'assets/images/product-category/2.jpg',
				'oldPrice'		=>'',
				'newPrice'		=>'',
				'price'			=>'$1,999.00'

				)
			);
		shuffle($products);
		foreach($products as $product):
			?>

			<div class="product">
				<?php display_product($product['product_category'], $product['product_name'], $product['productImageURL'],$product['oldPrice'], $product['newPrice'], $product['price']); ?>
			</div><!-- /.products -->


	<?php endforeach;?>
