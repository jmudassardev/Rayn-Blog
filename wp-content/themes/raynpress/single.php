<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package raynpress
 */

get_header();
?>
	<div class="container">
			<div class="row">
				<hr>
		<main id="primary" class="site-main">
		
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

		    wpb_posts_nav();

		endwhile; // End of the loop.
		?>
		

	</main><!-- #main -->

<?php
get_footer();
