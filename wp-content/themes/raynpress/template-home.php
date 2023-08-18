<?php
/**
 * The template for displaying all pages
 *
 * This is the layout for homepage v1
 * 
 * Template Name: Homepage v1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raynpress
 * 
 */

get_header();
?>

	<!-- Top section -->
    <section class="featured-section">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="featured-grid">
                    <?php
					$args = array ('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 5, 'tag' => 'featured');
                    // The Query
                    $featured = new WP_Query( $args );
                    $fi = 1;
                    // The Loop
                    if ( $featured->have_posts() ) {

                        while ( $featured->have_posts() ) {
                            $featured->the_post(); ?>
                            <?php if($fi == 1) { ?>
                            <div class="large-grid">
                                <div class="featured-image-section">
									 <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('home-grid') ?>
                                    </a>
                                    <h6><?php the_category(", ", "single") ?></h6>
                                   
                                </div>
                                <div class="featured-content">
                                    <h6 class="featured-title">
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                    </h6>
                                    <h6 class="featured-meta">
                                        <strong class="text_black"><?php raynpress_posted_by() ?></strong> 
										<span
                                            class="ps-3"><?php raynpress_posted_on() ?>
										</span>
                                    </h6>
                                    <p class="featured-para pt-1"> <?php the_excerpt() ?> </p>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="small-grid">
                                <div class="featured-image-section">
                                    <h6><?php the_category(", ", "single") ?></h6>
                                    <a href="<?php the_permalink() ?>">
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail('home-grid');
                                        } else {
                                            echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder.png" alt="'.get_the_title().'">';
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="featured-content">
                                    <h6 class="featured-title">
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                    </h6>
                                    <h6 class="featured-meta"><strong class="text_black"><?php raynpress_posted_by() ?></strong> <span
                                            class="ps-3"><?php raynpress_posted_on() ?></span></h6>
                                </div>
                            </div>
                            
                            <?php }   ?>
                        <?php  
                        $fi++; }
						
                    } else {
                        // No posts found
                    }
                    /* To resetPost Data */
                    wp_reset_postdata();
                    ?>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- The popular section -->
    <section class="popular-section pt-5 pb-5">
        <div class="container">
            <h3 class="popularheading">
                Politics
            </h3>
            <hr>
            <div class="row">
                <div class="col-md-9 col-lg-9 col-12">
                    <div class="row">
                    <?php
                    // The Query
                    $argss = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 2, 'cat' => 6);
                    $category_loop_1 = new WP_Query( $argss );
                    $fi = 1;
                    // The Loop
                    if ( $category_loop_1->have_posts() ) {

                        while ( $category_loop_1->have_posts() ) {
                            $category_loop_1->the_post(); ?>
                            <div class="col-md-6 col-lg-6">
                                <div class="featured-image-section">
                                    <h6><?php the_category(", ", "single") ?></h6>
                                    <a href="<?php the_permalink() ?>">
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail('home-grid');
                                        } else {
                                            echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder.png" alt="'.get_the_title().'">';
                                        }
                                        
                                        ?>
                                    </a>
                                </div>
                                <div class="featured-content">
                                    <h6 class="featured-title">
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                    </h6>
                                    <h6 class="featured-meta"><strong class="text_black"><?php raynpress_posted_by() ?></strong> <span
                                            class="ps-3"><?php raynpress_posted_on() ?></span></h6>
                                </div>
                            </div>
                        <?php  
											
                        }

                    } else {
                        // no posts found
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                    ?>
                    </div>
                    
                </div>
                <div class="col-md-3 col-lg-3 col-12">
                    <div class="sidebar mt-4 mt-lg-0 mt-md-0">
                    <?php
                    // Query to filter
                    $category_loop_2 = new WP_Query( array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 4, 'cat' => 6, 'offset' => 2) );
                    $fi = 1;
                    // Post Loop
                    if ( $category_loop_2->have_posts() ) {

                        while ( $category_loop_2->have_posts() ) {
                            $category_loop_2->the_post(); ?>
                            <div class="sidebarbox mb-2">
                                <div class="d-flex align-items-center">
                                    <a href="<?php the_permalink() ?>" class="sidebar-thumbnail">
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail('thumbnail');
                                        } else {
                                            echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder.png" '.get_the_title().'">';
                                        }
                                        ?>
                                    </a>
                                    <div class="sidebarcontent">
                                        <h5>
                                           <?php the_category(", ", "single") ?>
                                        </h5>
                                        <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
                                    </div>
                                </div>
                            </div>
                        <?php  
                        }

                    } else {
                        // no posts found
                    }
                    /* Reset Post Data */
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The banner section -->
    <section class="bannersection pt-5 pb-5 d-none d-lg-block d-md-block">
        <div class="container">
            <div class="adbanner text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/bannerad.jpg" alt="">
            </div>
        </div>
    </section>

    <!--The  politics section -->
    <section class="politicssection pt-5 pb-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="politicsheading">
                    Popular
                </h3>
				<hr>
                <p class="politicsviewall m-0">
					<?php
    					//This will get the Id of category
    					$category_id = get_cat_ID( 'economy' );

   						 //This will get the URL of that category
   						 $category_link = get_category_link( $category_id );
					?>
					<a href="<?php echo esc_url( $category_link ); ?>">View All</a>
                </p>
            </div>
            <hr class="m-0">
            <div class="row e-flex-row">
                
					 <?php
                    // Query
                    $category_loop_3 = new WP_Query( array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 6, 'category' => 								'politics') );
					 
					  // Loop
                    if ( $category_loop_3->have_posts() ) {

                        while ( $category_loop_3->have_posts() ) {
                            $category_loop_3->the_post(); ?>
					 <div class="e-flex">
					                 <a href="<?php the_permalink() ?>">
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail('home-grid');
                                        } else {
                                            echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder.png" alt="'.get_the_title().'">';
                                        }
                                        
                                        ?>
                                    </a>
                    <h6 class="politicstitle">
                        <?php the_title() ?>
                    </h6>
                    <h6 class="featured-small-meta">by <strong class="text_black"><?php raynpress_posted_by() ?></strong> </h6>
                   
               </div>
               
                
               <?php
							
					}
					}
					
				?>
				
            </div>
        </div>
    </section>

  
<?php
get_footer();
