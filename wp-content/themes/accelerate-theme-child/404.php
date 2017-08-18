<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div class="services flex-box">
  <div class="map-img"></div>
  <div class="whoops">
    <h1>Whoops, took a wrong turn...</h1>
    <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
    <br>
    <p>Feel free to take a look at our <a class="green-text" href="<?php echo home_url(); ?>/blog">blog</a> or some of our featured <a class="green-text" href="<?php echo home_url(); ?>/case-studies">work.</a> </p>
  </div>

</div>


<?php get_footer(); ?>
