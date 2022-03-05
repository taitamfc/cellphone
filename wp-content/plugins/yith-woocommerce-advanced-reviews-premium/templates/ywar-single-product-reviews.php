<?php
/**
 * Display single product reviews for YITH WooCommerce Advanced Reviews
 *
 * @package       YITH\yit-woocommerce-advanced-reviews\Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

$product_id = yit_get_prop( $product, 'id' );
?>

<div id="ywar_reviews">
	<div id="reviews_summary">
		<h3><?php echo wp_kses( apply_filters( 'ywar_reviews_summary_title', esc_html__( 'Customer reviews', 'yith-woocommerce-advanced-reviews' ), $product ), 'post' ); ?></h3>

		<?php do_action( 'ywar_summary_prepend', $product, $review_stats ); ?>

		<?php do_action( 'ywar_summary', $product, $review_stats ); ?>

		<?php do_action( 'ywar_summary_append', $product, $review_stats ); ?>

		<?php if ( has_action( 'ywar_reviews_header' ) ) : ?>
			<div id="reviews_header">
				<?php do_action( 'ywar_reviews_header', $review_stats ); ?>
			</div>
		<?php endif; ?>
	</div>

	<?php do_action( 'ywar_after_summary', $product_id, $review_stats ); ?>

	<div id="reviews_dialog"></div>
</div>
