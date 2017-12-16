<?php
/**
 * Variable product add to cart
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 *

 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'print_attribute_radio' ) ) {
	function print_attribute_radio( $checked_value, $value, $label, $attr_name ) {
		global $product;
		$name = str_replace( ' ', '_', strtolower($attr_name) );
		$input_name = 'attribute_' . esc_attr( $name ) ;
		$esc_value = esc_attr( $value );
		$id = esc_attr( $name . '_v_' . $value . $product->get_id() ); //added product ID at the end of the name to target single products
		$class = esc_attr( $name . '_' . $value );
		$checked = checked( $checked_value, $value, false );
		$filtered_label = apply_filters( 'woocommerce_variation_option_name', $label );
		$filtered_label = str_replace( ' ', '_', strtolower($filtered_label) );
		if (preg_match('/^[a-z]+_[a-z0-9]+$/i', $filtered_label)) {
			// contains an underscore and is two words
			if ( $filtered_label == 'sem_moldura' || $filtered_label == 'sem_passepartout' || $filtered_label == 'sem_cor' ) {
				$pretty_name = str_replace( '_', ' ', $filtered_label );
			} else {
				
				$pretty_name = substr( $filtered_label, strpos( $filtered_label, "_" ) +1 );
			}
		}else {
			$pretty_name = $filtered_label;
		}
		printf( '<div class="checkbox-variation"><input type="radio" name="%1$s" value="%2$s" id="%3$s" class="%6$s" %4$s><label class="%1$s %6$s" for="%3$s"><p>%7$s</p></label></div>', $input_name, $esc_value, $id, $checked, $class, $filtered_label, $pretty_name );
	}
}

global $product;

$attribute_keys = array_keys( $attributes );

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $available_variations ) ) ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0">
			<tbody>
				<?php foreach ( $attributes as $name => $options ) : ?>
					<tr class="attribute-<?php echo sanitize_title($name); ?>">
						<td class="label"><label for="<?php echo sanitize_title( $name ); ?>"><?php echo wc_attribute_label( $name ); ?></label></td>
						<?php
						$sanitized_name = sanitize_title( $name );
						if ( isset( $_REQUEST[ 'attribute_' . $sanitized_name ] ) ) {
							$checked_value = $_REQUEST[ 'attribute_' . $sanitized_name ];
						} elseif ( isset( $selected_attributes[ $sanitized_name ] ) ) {
							$checked_value = $selected_attributes[ $sanitized_name ];
						} else {
							$checked_value = '';
						}
						?>
						<td class="value">
							<?php
							if ( ! empty( $options ) ) {
								if ( taxonomy_exists( $name ) ) {
									// Get terms if this is a taxonomy - ordered. We need the names too.
									$terms = wc_get_product_terms( $product->get_id(), $name, array( 'fields' => 'all' ) );

									foreach ( $terms as $term ) {
										if ( ! in_array( $term->slug, $options ) ) {
											continue;
										}
										print_attribute_radio( $checked_value, $term->slug, $term->name, $sanitized_name );
									}
								} else {
									foreach ( $options as $option ) {
										print_attribute_radio( $checked_value, $option, $option, $sanitized_name );
									}
								}
							}

							echo end( $attribute_keys ) === $name ? '' : '';
							?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<div class="single_variation_wrap">
			<?php
				do_action( 'woocommerce_before_single_variation' );
				do_action( 'woocommerce_single_variation' );
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
