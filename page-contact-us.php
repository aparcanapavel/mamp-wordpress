<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rutgersAPD
 */

get_header();
?>

	<div id="primary" class="contact-container">
		<div class="banner">
        <img src="<?php echo(get_template_directory_uri()); ?>/assets/phil/JDRF.jpg" alt="" srcset="">
      </div>
		<main id="main" class="contact-wrapper">
			<div class="go-to-contact">
				<div class="contact-src">
					<img src="" alt="">
					<figcaption>Chapter President</figcaption>
					<figcaption>First Last</figcaption>
					<figcaption>college.email@rutgers.edu</figcaption>
				</div>

				<div class="contact-src">
					<img src="" alt="">
					<figcaption>Recruitment Chair</figcaption>
					<figcaption>First Last</figcaption>
					<figcaption>college.email@rutgers.edu</figcaption>
				</div>
			</div>

			<h3>Location</h3>
			<div class="location">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.844447722906!2d-74.44958778436032!3d40.50082265844425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c65518be06bf%3A0x51b42066917aaf48!2sRutgers%E2%80%93New+Brunswick!5e0!3m2!1sen!2sus!4v1525546430865" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
