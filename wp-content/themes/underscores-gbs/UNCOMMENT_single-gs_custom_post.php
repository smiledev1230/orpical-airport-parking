<?php // used on all custom post type pages by default, if template is not activated ?>

<?php get_header(); ?>



		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php the_post_navigation(); ?>

			<?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop. ?>



<?php
get_sidebar();
get_footer();
