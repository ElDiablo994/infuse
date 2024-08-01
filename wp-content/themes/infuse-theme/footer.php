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
				<?php
				// Get the current year dynamically
				$current_year = date('Y');

				// Display the dynamic year
				echo sprintf('© %1$s OurCompany | All Rights Reserved', $current_year);
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
