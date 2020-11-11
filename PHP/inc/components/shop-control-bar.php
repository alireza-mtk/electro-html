<form class="woocommerce-ordering" method="get">
    <select name="orderby" class="orderby">
        <option value="menu_order"  selected='selected'>Default sorting</option>
        <option value="popularity" >Sort by popularity</option>
        <option value="rating" >Sort by average rating</option>
        <option value="date" >Sort by newness</option>
        <option value="price" >Sort by price: low to high</option>
        <option value="price-desc" >Sort by price: high to low</option>
    </select>
</form>
<form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Show 15</option><option value="-1" >Show All</option></select></form>
<nav class="electro-advanced-pagination">
    <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> of 2<a class="next page-numbers" href="#">&rarr;</a>			<script>
    jQuery(document).ready(function($){
        $( '.form-adv-pagination' ).on( 'submit', function() {
            var link 		= '#',
            goto_page 	= $( '#goto-page' ).val(),
            new_link 	= link.replace( '%#%', goto_page );

            window.location.href = new_link;
            return false;
        });
    });
    </script>
</nav>
