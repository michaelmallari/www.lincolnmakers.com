<?php
/**
 * Template Name: Summary
 */
get_header(); ?>

			<div class="container">

<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

<?php endwhile; else: ?>
				<p>Sorry...we can't seem to find the content you're looking for.</p>
<?php endif; ?>

			</div><!--/.container -->

<?php get_footer(); ?>