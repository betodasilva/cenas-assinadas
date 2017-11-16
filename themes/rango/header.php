<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Rango
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<?php global $smof_data; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php 
    ftc_theme_favicon();
    wp_head(); 
    ?>
</head>
<?php
$header_classes = array();
if( isset($smof_data['ftc_enable_sticky_header']) && $smof_data['ftc_enable_sticky_header'] ){
    $header_classes[] = 'header-sticky';
}
?>
<body <?php body_class(); ?>>
    <div id="page" class="site">
     <a class="skip-link screen-reader-text" href="#content"><?php esc_attr( 'Skip to content', 'rango' ); ?></a>

     <header id="masthead" class="site-header">

        <div class="header-ftc header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
            <div class="header-nav">
                <div class="container">

                    <div class="nav-left">
                        <?php if( $smof_data['ftc_header_contact_information'] ):?>
                            <div class="info-desc"><?php echo do_shortcode(stripslashes($smof_data['ftc_header_contact_information'])); ?></div>
                        <?php endif; ?>
						
						<div class="custom_content">
							<?php echo do_shortcode(stripslashes($smof_data['ftc_middle_header_content'])); ?>
							
                           </div>
                    </div>
                    
                    <div class="nav-right">
                        
                        <?php if( $smof_data['ftc_enable_tiny_account'] ): ?>
                            <div class="ftc-sb-account"><?php echo ftc_tiny_account(); ?></div>
                        <?php endif; ?>
                        
                        <?php if( class_exists('YITH_WCWL') && $smof_data['ftc_enable_tiny_wishlist'] ): ?>
                            <div class="ftc-my-wishlist"><?php echo ftc_tini_wishlist(); ?></div>
                        <?php endif; ?>
                                     
                    </div>
                </div>
            </div>
            <div class="header-content <?php echo esc_attr(implode(' ', $header_classes)); ?>">
                <div class="container">
                    <div class="logo-wrapper"><?php echo ftc_theme_logo(); ?></div>

                    <div class="navigation-primary">
                        <div class="container">
                            <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
                        </div><!-- .container -->
                    </div><!-- .navigation-top -->
                    
                                                      
                    
                    <?php if( $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                        <div class="ftc-shop-cart"><?php echo ftc_tiny_cart(); ?></div>
                    <?php endif; ?>
					<?php if( $smof_data['ftc_enable_search'] ): ?>
                        <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                    <?php endif; ?>    
                </div>
            </div>
            <?php
            if ( has_nav_menu( 'vertical' ) ) {
                ?>
                <div class="vertical-menu-wrapper">
                    <div class="vertical-menu-heading"><?php echo ftc_get_vertical_menu_heading(); ?></div>
                    <?php get_template_part( 'template-parts/navigation/navigation', 'vertical' ); ?>
                </div>
                <?php
            }
            ?>
            <?php if ( has_nav_menu( 'primary' ) ) : ?>

            <?php endif; ?>
        </div>
    </header><!-- #masthead -->

    <div class="site-content-contain">
      <div id="content" class="site-content">
