<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage OrganicFood
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" aria-label="<?php _e( 'Primary Menu', 'rango' ); ?>">
    <?php
    if( !ftc_has_megamainmenu() ){
        ?>
    <div class="menu-ftc" data-controls="primary-menu"><a><?php _e( 'Menu', 'rango' ); ?></a></div>
    <?php
    }
    ?>
    <?php wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
	) ); ?>
</nav><!-- #site-navigation -->
