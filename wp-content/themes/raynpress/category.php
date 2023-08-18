<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raynpress
 */

get_header();
?>

		<div class="container">
			<div class="row">
			<hr>
				<?php if ( have_posts() ) : ?>

					<header class="page-header pt-0 pb-5 px-0 m-3">
						<?php
						the_archive_title( '<h1 class="page-title h1 text-center">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header>

						<?php
							$current_category = get_queried_object();
							$cat_args = array(
								'parent' => $current_category->term_id,
								'hide_empty' => false,
							);

							$subcategories = get_categories($cat_args);

							if (!empty($subcategories)) {
								echo '<ul>';
								foreach ($subcategories as $subcategory) {
									echo '<li><a href="' . get_category_link($subcategory->term_id) . '">' . $subcategory->name . '</a></li>';
								}
								echo '</ul>';
							}
						?>


					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post(); ?>
								<div class="col-12 col-md-4 col-lg-4 mb-4">
								<a href="<?php the_permalink() ?>">
									<?php 
									if(has_post_thumbnail()){
										the_post_thumbnail();
									} else {
										echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder.png" alt="'.get_the_title().'">';
									} 
									?>
								</a>
									
									<h4 class="cat-title"><a class="text-decoration-none" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
									
									<p class="featured-para pt-1"> <?php the_excerpt() ?> </p>
									
								</div>
						<?php
						endwhile;

						the_posts_navigation();

						else :

						get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
			</div>
		</div>


<?php
get_footer();
