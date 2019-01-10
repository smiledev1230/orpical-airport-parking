<?php get_header(); ?>






				<?php
					the_archive_title('<h2 class="page-title">', '</h2>');
				?>

					<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>

					  <?php the_permalink(); ?>
					  <?php echo get_the_post_thumbnail_url(); ?>

								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


									<?php
										ugwps_posted_on();
										ugwps_posted_by();
									?>
		

									<?php echo get_excerpt(309); ?>
	

								<a href="<?php the_permalink(); ?>">Read More</a>

							
						<?php endwhile;
					wp_pagenavi();
					else :
						get_template_part('template-parts/content', 'none');
					endif; ?>


					<?php get_template_part('template-parts/searchform'); ?>
					
					<?php dynamic_sidebar('blog-index-widget'); ?>






<?php get_footer(); ?>
