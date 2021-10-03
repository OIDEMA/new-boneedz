<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	global $base_items;
	/*
	 * item
	 *	item_id int
	 *	title string
	 *	detail string
	 *	price int
	 *	stock int
	 *  visible int(0|1)
	 *  list_order int
	 *	**img(n) is 1 to 5**
	 *	img(n)_origin string
	 *	img(n)_76 string
	 *	img(n)_146 string
	 *	img(n)_300 string
	 *	img(n)_500 string
	 *	img(n)_640 string
	 *	img(n)_sp_480 string
	 *	img(n)_sp_640 string
	 *	modified timestamp
	 *  variations
	 *   variation_id int
	 *   variation string
	 *   variation_stock int
	 *	shop_id string
	 *  shop_name string
	 *	shop_url string
	 *	categories array (string,string...)
	 */
?>
<?php if ( isset( $base_items ) ) : ?>
	<div class="container　mb-5" id="items" style="padding: 0;">
		<div class="row">
			<?php foreach ( $base_items as $item ) : ?>
				<div class="col-12 col-md-6 col-lg-4 base-item">
					<a href="<?php echo esc_url( $item->shop_url) ?>/items/<?php echo $item->item_id; ?>" target="_blank">
						<img src="<?php echo esc_url( $item->img1_300 ); ?>" alt="<?php echo esc_attr( $item->title ); ?>">
					</a>
					<div class="title-price">
						<p class="product-title"><?php echo esc_attr( $item->title ); ?><p>
						<p class="price"><?php echo number_format( $item->price ); ?>~<p>
					</div>
					<hr>
					<p class="detail"><?php echo wp_trim_words( $item->detail, 56, '...' ); ?></p>
				</div>
			<?php endforeach; ?>
	  </div>
   	</div>
<?php endif; ?>