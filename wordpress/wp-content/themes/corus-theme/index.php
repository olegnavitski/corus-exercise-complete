<?php get_header(); ?>



	<?php if ( have_posts() ) : ?>

	<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				the_content();	
			// End the loop.
			endwhile;

		else :
			echo "no content";

		endif;
	?>
	
<?php get_footer(); ?>