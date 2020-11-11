
	<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	if($page=='home-v3' || $page=='home-v3-full-color') {
		$column=2;
		$item=4;
	} else if($page=='home-v2') {
		$column=2;
		$item=4;
	} else if($page=='cat-4-col') {
		$column=2;
		$item=4;
	} else if($page=='cat-3-col') {
		$column=2;
		$item=4;
	} else {
		$column=3;
		$item=4;
	}

		$all_products = array(
			array(
				array(
					'product_name' => 'Notebook Purple G752VT-T7008T',
					'product_category' => 'Smartphones',
					'oldPrice' 		=> '$3,788.00',
					'newPrice'		=>'$4,780.00',
					'price'			=> '',
					'productImageURL' => 'assets/images/product-cards/1.jpg'

					),
				array(
					'product_name' => 'Tablet Thin EliteBook  Revolve 810 G6',
					'product_category' => 'Smartphones',
					'oldPrice' 		=> '',
					'newPrice'		=> '',
					'price'			=> '$500',
					'productImageURL' => 'assets/images/product-cards/2.jpg'

					),
				array(
					'product_name' => 'Universal Headphones Case in Black',
					'product_category' => 'Headphone Cases',
					'oldPrice' 		=> '$3,788.00',
					'newPrice'		=>'$4,780.00',
					'price'			=> '',
					'productImageURL' => 'assets/images/product-cards/3.jpg'

					),
				array(
					'product_name' => 'Widescreen 4K SUHD TV',
					'product_category' => 'TVs',
					'oldPrice' 		=> '',
					'newPrice'		=> '',
					'price'			=> '$800',
					'productImageURL' => 'assets/images/product-cards/4.jpg'

					),
				array(
					'product_name' => 'Full Color LaserJet Pro  M452dn',
					'product_category' => 'Printers',
					'oldPrice' 		=> '$3,788.00',
					'newPrice'		=>'$4,780.00',
					'price'			=> '',
					'productImageURL' => 'assets/images/product-cards/5.jpg'


					),
				array(
					'product_name' => 'External SSD USB 3.1  750 GB',
					'product_category' => 'Peripherals',
					'oldPrice' 		=> '',
					'newPrice'		=> '',
					'price'			=> '$600',
					'productImageURL' => 'assets/images/product-cards/6.jpg'

					)
			),
			array(
				array(
					'product_name' => 'Tablet Thin EliteBook  Revolve 810 G6',
					'product_category' => 'Smartphones',
					'oldPrice' 		=> '$3,788.00',
					'newPrice'		=>'$4,780.00',
					'price'			=> '',
					'productImageURL' => 'assets/images/product-cards/1.jpg'

				),
				array(
					'product_name' => 'Universal Headphones Case in Black',
					'product_category' => 'Headphone Cases',
					'oldPrice' 		=> '',
					'newPrice'		=> '',
					'price'			=> '$1500',
					'productImageURL' => 'assets/images/product-cards/2.jpg'

				),
				array(
					'product_name' => 'Notebook Purple G752VT-T7008T',
					'product_category' => 'Smartphones',
					'oldPrice' 		=> '$3,788.00',
					'newPrice'		=>'$4,780.00',
					'price'			=> '',
					'productImageURL' => 'assets/images/product-cards/3.jpg'

				),
				array(
					'product_name' => 'Widescreen 4K SUHD TV',
					'product_category' => 'TVs',
					'oldPrice' 		=> '',
					'newPrice'		=> '',
					'price'			=> '$400',
					'productImageURL' => 'assets/images/product-cards/4.jpg'

				),
				array(
					'product_name' => 'External SSD USB 3.1  750 GB',
					'product_category' => 'Peripherals',
					'oldPrice' 		=> '$3,788.00',
					'newPrice'		=>'$4,780.00',
					'price'			=> '',
					'productImageURL' => 'assets/images/product-cards/6.jpg'

				),
				array(
					'product_name' => 'Full Color LaserJet Pro  M452dn',
					'product_category' => 'Printers',
					'oldPrice' 		=> '',
					'newPrice'		=> '',
					'price'			=> '$500',
					'productImageURL' => 'assets/images/product-cards/5.jpg'


				)
			)
			);

		foreach($all_products as $products):
			shuffle($products);
			if($page=='home-v3' || $page=='home-v3-full-color') {
				$products = array_slice( $products, 0, 4);
			} else if($page=='home-v2') {
				$products = array_slice( $products, 0, 4);
			} else if($page=='cat-4-col') {
				$products = array_slice( $products, 0, 2);
			} else if($page=='cat-3-col') {
				$products = array_slice( $products, 0, 2);
			}

			?>
			<ul class="products columns-<?php echo $column; ?>">
				<?php foreach($products as $product): ?>
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
					<li class="product product-card <?php echo $classes; ?>">
						<?php display_card_product($product['productImageURL'], $product['product_category'], $product['product_name'], $product['oldPrice'], $product['newPrice'], $product['price']) ; ?>
					</li><!-- /.products -->
				<?php endforeach; ?>
			</ul>
		<?php endforeach;?>
