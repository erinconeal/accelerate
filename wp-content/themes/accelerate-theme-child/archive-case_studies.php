<?php
/**
 * The template for displaying archive case studies
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
      $services = get_field('services');
      $image_1 = get_field("image_1");
      $size = "medium";
      ?>

      <article class="case-study">
        <aside class="case-study-sidebar">
          <p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          <p class="lighter gray"><?php echo $services; ?></p>

          <?php the_excerpt(); ?>

          <p class="bold"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
        </aside>

        <div class="case-study-images">
          <a href="<?php the_permalink(); ?>">
          <?php if($image_1) { ?>
            <img src="<?php echo wp_get_attachment_image( $image_1, $size );
      ?>" >
          <?php } ?>
          </a>
        </div>
      </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
