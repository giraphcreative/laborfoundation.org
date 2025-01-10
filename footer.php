<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
	</section>
	
	<footer class="footer">
		<div class="footer-columns">
			<div class="narrow logo">
				<a href="/"><img src="<?php bloginfo( 'template_url' ) ?>/img/logo-white.svg" class="logo-footer" /></a>
				<div class="footer-address">
					<?php print apply_filters( 'the_content', get_field( 'footer-address', 'option' ) ); ?>
				</div>
			</div>
			<div class="wide footer-menus">
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-one" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-one', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-two" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-two', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
				<div class="footer-menu">
					<h4><?php print wp_get_nav_menu_name("footer-menu-three" ); ?></h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-three', 'menu_class' => 'nav-menu' ) ); ?>
				</div>
			</div>
		</div>
		<div class="footer-columns">
			<div class="wide two">
				<div class="social-icons">
					<?php  
					theme_social_icon( 'twitter' );
					theme_social_icon( 'facebook' );
					theme_social_icon( 'instagram' );
					theme_social_icon( 'linkedin' );
					theme_social_icon( 'youtube' );
					?>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>

<?php 
if ( is_page( 10952 ) ) {
	print the_field( 'footer_code', 'option' );
}
?>

</body>
</html>