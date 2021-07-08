// Enable backorders on all products
add_filter( 'woocommerce_product_get_backorders', 'filter_get_backorders_callback', 10, 2 );
add_filter( 'woocommerce_product_variation_get_backorders', 'filter_get_backorders_callback', 10, 2 );
function filter_get_backorders_callback( $backorders_status, $product ){

	$StockQ=$product->get_stock_quantity();
	if($StockQ >=1){
		$backorders_status = 'yes';
	}
	else{
		$backorders_status = 'notify';
	}
	return $backorders_status;
}
