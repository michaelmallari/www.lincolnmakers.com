<?php
/**
 * Template Name: Placeholder
 */
get_header(); ?>

<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
				<p>Sorry...we can't seem to find the content you're looking for.</p>
<?php endif; ?>

<?php get_footer(); ?>