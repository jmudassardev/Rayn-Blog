<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raynpress
 */

?>
	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title-section">	
		<div class="first-clm">
		</div>
	<header class="entry-header">
		 <div class="featured-imagesection">

           <h6><?php the_category(", ", "single") ?></h6>
                                   
		</div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		 <h6 class="featured-meta">
			  <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
              <strong class="text_black"><?php raynpress_posted_by() ?></strong> 
			  <span class="ps-3"><?php raynpress_posted_on() ?> </span>
         </h6>
	</header><!-- .entry-header -->
		<div class="third-clm">
		</div>
	</div>
	
	<div class="featured-img">
		<?php raynpress_post_thumbnail(); ?>
	</div>


	
	
	<div class="title-section">	
		<div class="first-clm">
			<h6 class="share-btn">
				<strong>Share</strong>
			</h6>
			<ul class="social-icons share-icons">
						<li><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank"><i class="fa-brands fa-facebook fb-share"></i></a></li>
						<li><a href="https://twitter.com/share?url=<?php echo get_the_permalink() ?>&text=<?php echo get_the_title() ?>" target="_blank"><i class="fa-brands fa-twitter twitter-share"></i></a></li>
						<li><a href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail-size'); ?>&url=<?php echo get_the_permalink() ?>&description=<?php echo get_the_title() ?>" target="_blank"><i class="fa-brands fa-pinterest pin-share"></i></a></li>
		    </ul>
		</div>
	<header class="entry-header">
		 <div class="post-content">
			 <?php the_content(); ?>
		</div>
	</header>
		<div class="third-clm">
		</div>
	</div>
	
	
	
	
	

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'raynpress' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

	
