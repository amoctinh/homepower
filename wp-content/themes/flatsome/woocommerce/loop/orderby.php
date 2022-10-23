<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<form id="woocommerce-ordering-1" method="get" style="visibility: hidden; height: 0">
	<select name="orderby-1" id="orderby-1" aria-label="<?php esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		<?php endforeach; ?>
	</select>
</form>

<div class="shop-sort" id="shopSort" data-id="<?php echo $orderSelected; ?>">
<ul>
    <li class="menu-item"><p>Sắp xếp:</p></li>
    <li class="menu-item"><a href="#1" class="sort-item" id="date" onclick="sortby('date')">Mới nhất</a></li>
    <li class="menu-item"><a href="#1" class="sort-item" id="popularity" onclick="sortby('popularity')">Bán chạy</a></li>
    <li class="menu-item"><a href="#1" class="sort-item" id="rating" onclick="sortby('rating')">Đánh giá cao</a></li>
    <li class="menu-item"><a href="#1" class="sort-item" id="price" onclick="sortby('price')">Giá thấp đến cao</a></li>
</ul>
</div>
<form class="woocommerce-ordering" method="get" id="woocommerce-ordering" style="position: absolute;">
    <input hidden name="orderby" class="orderby" id="orderBy">
	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form>
<script type="text/javascript">
    function sortby(order){
        document.getElementById("orderBy").value = order;
        document.getElementById("woocommerce-ordering").submit();
        console.log(order);
    }
    document.addEventListener("DOMContentLoaded", function(event) {
      document.getElementById(document.getElementById("orderby-1").value).className += " active";
  });
</script>
