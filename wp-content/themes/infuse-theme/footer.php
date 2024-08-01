<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Infuse_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
<<<<<<< Updated upstream
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'infuse-theme' ) ); ?>">
=======
			<hr>
			<div class="footer_custom-menu">
				<div class="footer_menu-item">
					<a href="#">TERMS & CONDITIONS</a>
				</div>
				<div class="footer_menu-item">
					<a href="#">COOKIE POLICY (US)</a>
				</div>
				<div class="footer_menu-item">
					<a href="#">PRIVACY POLICY</a>
				</div>
			</div>
			<div class="footer_copyright-text">
>>>>>>> Stashed changes
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'infuse-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'infuse-theme' ), 'infuse-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
