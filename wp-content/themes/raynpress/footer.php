<?php
/**
 * The template for displaying the footer section
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raynpress
 */

?>
<footer class="footer-section pt-4 pb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h3 class="newsletterheading">
                        Signup for a Newsletter
                    </h3>
                    <p class="newsletterpara">We will never share your email address with a third-party</p>
                </div>
                <div class="col-md-5">
                    <div class="">
                       <?php dynamic_sidebar('newsletter') ?>

                    </div>
                </div>
                <div class="col-md-2 d-none d-lg-block d-md-block">
                    
                    <ul class="social-icons">
						<li><a href="<?php echo get_theme_mod( 'facebok_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a href="<?php echo get_theme_mod( 'instagram_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a href="<?php echo get_theme_mod( 'twitter_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a href="<?php echo get_theme_mod( 'youtube_url', '#' ); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
					</ul>
                    
                </div>
            </div>
            <hr>
            <div class="row pt-4 pb-4 mainfooter">
                <div class="widget-col col-md-5 mb-4 mt-lg-0 mt-md-0">
                   <?php dynamic_sidebar('footer-1') ?>
                </div>
                <div class="widget-col col-md-2 mb-4 mt-lg-0 mt-md-0">
                    <?php dynamic_sidebar('footer-2') ?>
                </div>
                <div class="widget-col col-md-2 mb-4 mt-lg-0 mt-md-0">
                    <?php dynamic_sidebar('footer-3') ?>
                </div>
                <div class="widget-col col-md-3">
                    <?php dynamic_sidebar('footer-4') ?>  
                </div>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
