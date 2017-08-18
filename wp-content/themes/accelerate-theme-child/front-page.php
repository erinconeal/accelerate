<?php
/**
 * The template for displaying the homepage
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

<section class="home-page">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="homepage-hero">
				<div class="site-content">
					<?php the_content(); ?>
					<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
				</div><!-- .site-content -->
			</div>
		<?php endwhile; // end of the loop. ?>
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>
		<ul class="homepage-featured-work">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post();
				$image_1 = get_field("image_1");
				$size = "medium";
				?>
				<li class="individual-featured-work">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					<h3 class="centered"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</div>
</section>

<section class="recent-posts clearfix">
	<div class="site-content blog-twitter-container">
	  <div class="blog-post">
	   	<h4>From the Blog</h4>
	    <?php query_posts('posts_per_page=1'); ?>
		    <?php while ( have_posts() ) : the_post(); ?>
		      <h2><?php the_title(); ?></h2>
		      <?php the_excerpt(); ?>
		    <?php endwhile; ?>
	    <?php wp_reset_query(); ?>
	  </div>


		<div class="blog-post twitter">
			<h4>Recent Tweet</h4>
			<h2>@Accelerate</h2>
			<p>5 Hard Truths From the Person Reading Your Resume
			<a href="#">http://on.mash.to/1zsf79w</a>
			</p>
			<a class="read-more-link" href="#">Follow Us 	&rsaquo;</a>
		</div>

		<!-- The below code works with the Twitter widget -->
			<!-- <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<?php endif; ?> -->


	</div>
</section>

<?php get_footer(); ?>
