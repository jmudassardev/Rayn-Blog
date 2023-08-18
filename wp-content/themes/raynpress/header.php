<?php
/**
 * The header for theme
 *
 * This is the template that displays all of the head section conent and things
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raynpress
 */
?>
<!doctype html>
<html <?php ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'raynpress' ); ?></a>

	<header id="site-header" class="site-header">
		<div class="container desktop-menu">
			<div class="row header-desktop align-items-center">
				<div class="col-12 col-md-3 col-lg-2 logo-col">
					<?php the_custom_logo() ?>
				</div>
				<div class="col-12 col-md-3 col-lg-7 nav-col">
					<nav id="main-navigation" class="main-navigation">
						<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'head-menu',
								'menu_id'        => 'head-menu',
								'walker'          => new MJ_Nav_Menu(),
							)
						);
						?>
					</nav>
				</div>
				<div class="col-12 col-md-3 col-lg-3 icons-col">
					<ul class="social-icons">
					<ul class="social-icons">
						<li><a href="<?php echo get_theme_mod( 'facebok_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="<?php echo get_theme_mod( 'instagram_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="<?php echo get_theme_mod( 'twitter_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="<?php echo get_theme_mod( 'youtube_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
					</ul>
					</ul>
				</div>
			</div><!-- desktop-header -->
			
		</div><!-- .container -->
		
		<div class="container mobile-menuu">
		    <div class="row">
		    <div class="col-6" >
		        <div>
		            <?php the_custom_logo() ?>
		        </div>
		    </div>  
		        <div class="col-6">
		            
		            <a class="have-to-be-right" data-bs-toggle="offcanvas" href="#offcanvas" role="button" aria-controls="offcanvasExample">
                       <i class="fa fa-bars text-right" style="font-size:24px; color: black;"></i>
                    </a>
                  
                    
		        </div>
		        
		        <!-- off canvas Mobile Menu  -->
		        
		        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                    <div class="offcanvas-header">
                     <div class="col-12 col-md-3 col-lg-2 logo-col">
					        <?php the_custom_logo() ?>
				    </div>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body">
                        <nav id="main-navigation" class="main-navigation">
						<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'head-menu',
								'menu_id'        => 'mobile-head-menu',
								 'walker'          => new MJ_Nav_Menu(),
							)
						);
						?>
					    </nav>
					    <br>
					<div class="col-12 col-md-3 col-lg-3 icons-col">
					<ul class="social-icons">
					<li><a href="<?php echo get_theme_mod( 'facebok_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
					<li><a href="<?php echo get_theme_mod( 'instagram_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="<?php echo get_theme_mod( 'twitter_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
					<li><a href="<?php echo get_theme_mod( 'youtube_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li></ul>
			    	</div>
					    
                    </div>
                </div>
		        <!-- Mobile Menu Content Ends above -->
		    </div>
		    </div>
		</div>
        

    </header>
