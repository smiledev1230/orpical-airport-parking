<?php get_header(); ?>


	
		<?php while ( have_posts() ) : the_post(); ?>
			 <?php echo get_the_post_thumbnail_url(); ?>

					<h1><?php the_title(); ?></h1>

						<?php
							ugwps_posted_on();
							ugwps_posted_by();
						?>

								<?php the_content(); ?>
		

							<?php 
							// If comments are open or we have at least one comment, load up the comment template.
							// if ( comments_open() || get_comments_number() ) :
								// comments_template();
							// endif; ?>

							<?php get_template_part( 'template-parts/searchform'); ?>


								<div>
									<?php get_5_recent_posts(); ?>
								</div>

						

						<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
