<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rutgersAPD
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="footer-wrapper">
			<div class="foot-title">
				<h4>Alpha Phi Delta Fraternity</h4>
				<h5>Delta Beta Chapter</h5>
				<h6>Rutgers, The state University of New Jersey</h6>
			</div>
			<ul class="quick-links">
				<li>
					<a href="">Home</a>
				</li>
				<li>
					<a href="">Our Brotherhood</a>
				</li>
				<li>
					<a href="">Contact Us</a>
				</li>
			</ul>
			<div class="social">
				<div class="media-icons" >
					<a id="footerCrest" href= "http://www.apd.org/" title="APD.ORG" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/en/b/b5/Alpha_Phi_Delta_crest.png"></a>
					<a href="https://twitter.com/ru_apd" class="fab fa-twitter" title="@ru_apd" target="_blank"></a>
					<a href="https://www.instagram.com/ru.apd/" class="fab fa-instagram" title="@ru.apd" target="_blank"></a>
				</div>
				<span>#ruapd</span>
				<span>Instagram: @ru.apd</span>
				<span>Twitter: @ru_apd</span>
			</div>
				<!-- <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'rutgersapd' ), 'rutgersapd', '<a href="https://pavelaparcana.com/">Pavel Aparcana</a>' );
				?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
