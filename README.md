## Project APD-DB ##
### technologies used
- MAMP (Mac OSX, Apache, MySQL, PHP)
- WordPress
- HTML
- CSS

![Home-page](https://github.com/aparcanapavel/mamp-wordpress/blob/master/assets/home_page_theme.png?raw=true)

![Contact-page](https://github.com/aparcanapavel/mamp-wordpress/blob/master/assets/contact_page_theme.png?raw=true)

### Overview
Within the last two days, I have been re-learning how to work with wordpress. While at Rutgers University, we were tasked to make a porfolio website using WordPress. At the time, I did not have any web development experience and neither did my classmates, so we were encouraged to use templates already made by WordPress developers.

Fastforward to today, I have gained knowledge of full stack web development and have aquired many skills and technologies. As I was learning the developer version of WordPress, I have realized that it is much more engaging than I previously thought WordPress to be. Being able to write HTML and CSS code to create my own themes rather than being limitted to premade themes has changed my whole perspective of WordPress. Further, as I was learning PHP for the MAMP stack, I have realized that it is similar to Rails erb tags, where one is able to write inline conditionals and loops to render the desided components. I am looking forward to finishing this project and relaunch my first web design project, with a different stack.

In order to make the upcomming events on the home page dynamic, I had ot use a PHP custom query, with a while loop. The loop helped the code stay DRY instead of hard coding it to the home page.

```php 
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
```

#### MVP
**Day One**
- Read WordPress documentation
- Choose stack to run locally
- Install WordPress Locally

**Day Two**
- Understand WordPress Flow Chart
- Initiate GitHub Repository
- Write Home Page Theme
- Write Contact 


##### TO DO 
- Make upcomming events ***dynamic*** (finished)
- Contact organization for updated contact information.
- Make website ***responsive*** and mobile friendly.


# WordPress default readme #

[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_s
===

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
Note: `.no-sidebar` styles are not automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

If you want to keep it simple, head over to https://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

If you want to set things up manually, download `_s` from GitHub. The first thing you want to do is copy the `_s` directory and change the name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in `style.css`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

1. Search for: `'_s'` and replace with: `'megatherium-is-awesome'`.
2. Search for: `_s_` and replace with: `megatherium_is_awesome_`.
3. Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for: `_s-` and replace with: `megatherium-is-awesome-`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
