<form class="variations_form cart" method="post">

	<table class="variations">
		<tbody>
			<tr>
				<td class="label"><label>Color</label></td>
				<td class="value">
					<select class="" name="attribute_pa_color">
						<option value="">Choose an option</option>
						<option value="black-with-red" >Black with Red</option>
						<option value="white-with-gold"  selected='selected'>White with Gold</option>
					</select>
					<a class="reset_variations" href="#">Clear</a>
				</td>
			</tr>
		</tbody>
	</table>


	<div class="single_variation_wrap">
		<div class="woocommerce-variation single_variation"></div>
		<div class="woocommerce-variation-add-to-cart variations_button">
			<div class="quantity">
				<label>Quantity:</label>
				<input type="number" name="quantity" value="1" title="Qty" class="input-text qty text"/>
			</div>
			<button type="submit" class="single_add_to_cart_button button">Add to cart</button>
			<input type="hidden" name="add-to-cart" value="2452" />
			<input type="hidden" name="product_id" value="2452" />
			<input type="hidden" name="variation_id" class="variation_id" value="0" />
		</div>
	</div>
</form>
