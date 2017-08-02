<?php
/**
 * The template for displaying case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $size = 'full';
        $services = get_field('services');
        $client = get_field('client');
        $link = get_field('site_link');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
      ?>

        <article class="case-study">
          <aside class="case-study-sidebar">
            <p class="title"><?php the_title(); ?></p>
            <p class="lighter gray"><?php echo $services; ?></p>
            <p class="lighter">Client: <?php echo $client; ?></p>

            <?php the_content(); ?>

            <p class="bold"><a href="<?php echo $link; ?>">Visit Live Site</a></p>
          </aside>

          <div class="case-study-images">
            <?php if($image_1) { ?>
              <img src="<?php echo wp_get_attachment_image( $image_1, $size );
 ?>" >
            <?php } ?>
            <?php if($image_2) { ?>
              <img src="<?php echo wp_get_attachment_image( $image_2, $size );
 ?>" >
            <?php } ?>
            <?php if($image_3) { ?>
              <img src="<?php echo wp_get_attachment_image( $image_3, $size );
 ?>" >
            <?php } ?>
          </div>

        </article>
			<?php endwhile; ?>
		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
