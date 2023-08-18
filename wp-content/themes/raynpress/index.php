<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raynpress
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-9 content-col">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				echo paginate_links();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div><!-- .content-col -->
			<div class="col-12 col-md-4 col-lg-3 sidebar-col">
				<?php get_sidebar(); ?>
			</div><!-- .sidebar-col -->
		</div>
		

	</main><!-- #main -->

<?php
get_footer();
