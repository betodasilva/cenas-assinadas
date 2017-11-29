<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Rango
 * @since 1.0
 * @version 1.0
 */

get_header( $smof_data['ftc_header_layout'] ); ?>

<div class="container">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'rango' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php esc_attr( 'Nothing Found', 'rango' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" >
			<div class="woocommerce columns-3">
				<div class="products owl-carousel grid">
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();
					if(isset($_GET['post_type'])) {
						$type = $_GET['post_type'];
						if($type == 'product') {
							wc_get_template_part('content', 'product');
						}else {
							Sget_template_part( 'template-parts/post/content', 'excerpt' );
						}
					}
					
					
					
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						

					endwhile; // End of the loop.  ?>
				</div>
			</div>
		
		<?php
			the_posts_pagination( array(
				'prev_text' => ftc_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'rango' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'rango' ) . '</span>' . ftc_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'rango' ) . ' </span>',
			) );

		else : ?>

			<p><?php esc_attr( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'rango' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .container -->

<?php get_footer();
