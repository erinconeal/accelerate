<?php
/**
 * The template for displaying the About page.
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


<!-- Banner -->
<section>
  <?php while ( have_posts() ) : the_post();
  $company_name = get_field('company_name');
  $mission_statement = get_field('mission_statement');
  ?>
    <div class="about-page">
      <p class="center-text">
        <span class="green-text"><?php echo $company_name ?></span>
        <span class="white-text"><?php echo $mission_statement ?></span>
      </p>
    </div>
    <?php the_content(); ?>
  <?php endwhile; ?>
</section>

<div class="services">
  <!-- List of services -->
  <section>
    <?php query_posts('posts_per_page=5&post_type=our_services&orderby=date&order=ASC'); ?>
  		<?php while ( have_posts() ) : the_post();
      $image = get_field("image");
      $size = "full";
      ?>
        <div class="about-us">
          <div class="title-and-content">
            <h2 class="title"><?php the_title(); ?></h2>
    				<p><?php the_content(); ?></p>
          </div>
          <div class="about-us-img">
            <?php if($image) {
              echo wp_get_attachment_image( $image, $size );
            } ?>
          </div>
        </div>
  		<?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </section>

  <section class="interested">
      <h1>Interested in working with us?</h1>
     <a class="contact-us-button" type="button" name="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
  </section>
</div>

<?php get_footer(); ?>
