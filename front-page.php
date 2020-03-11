<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rutgersAPD
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="banner">
        <img src="<?php echo(get_template_directory_uri()); ?>/assets/phil/fair.jpg" alt="" srcset="">
      </div>

      <section class="mid-section">
        
        <div class="join-the-brotherhood">
          <div class="brotherhood-wrapper">
            <div class="ethan-quote">
              <p>"The reason I chose to join Alpha Phi Delta is simple: Friendship. From the first time I met the brothers, I have seen a community that has a genuine interest in developing strong and eternal bonds with their brothers. This is the reason I joined and this is the goal that we strive for in everything we do. But much more than friendship, Alpha Phi Delta has enhanced my academic ability as well as my ability as a leader. Without this fraternity, I am certain that I would not be able to achieve the things I am today."</p>
              <div class="quote-author">
                <img src="<?php echo(get_template_directory_uri()); ?>/assets/DEthan2.jpg" alt="">
                <figcaption class="caption">Ethan D'Alessandro</figcaption>
                <figcaption class="caption">2019 Chapter President</figcaption>
              </div>
              
            </div>
  
            <div class="colin-quote">
              <div class="quote-author">
                <img src="<?php echo(get_template_directory_uri()); ?>/assets/colin2018.jpg" alt="">
                <figcaption>Colin Nilson</figcaption>
                <figcaption>2018 Chapter President</figcaption>
              </div>
              <p>"I chose to join Alpha Phi Delta due to the fact that all of the brothers are so close with each other and it is one of the reasons why I love this fraternity so much.  All of the brothers have a strong personal bond with each of the other members as well as the fraternity as a whole.  Joining Alpha Phi Delta has strongly enhanced my college career through social and academic opportunities that I would not have been able to receive with out the assistance of the chapter."</p>
            </div>
          </div>
        </div>
        <div class="upcoming-events">
          <!-- use php loop to get events -->
          <div class="event-wrapper">
            <h2>Upcomming Events</h2>
            <!-- <div class="event-cont">
              <div class="date-separator">
                <p>March Nth, 2020</p>
                <div></div>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae rerum non nihil voluptas soluta doloremque odio, eius ipsa deserunt!</p>
            </div>
            <div class="event-cont">
              <div class="date-separator">
                <p>March Nth, 2020</p>
                <div></div>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae rerum non nihil voluptas soluta doloremque odio, eius ipsa deserunt!</p>
            </div> -->
            <?php /* Start the Loop */ ?>
            
            <?php $eventQuery = new WP_Query('category_name=events&posts_per_page=2'); ?>
            <?php while ( $eventQuery->have_posts() ) : $eventQuery->the_post(); ?>
              <div class="event-cont">
                <div class="date-separator">
                  <p><?php echo get_post_meta($post->ID, 'date', true); ?></p>
                  <div></div>
                </div>
                <p><?php echo get_post_meta($post->ID, 'details', true); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
