<?php
/**
 * Template Name: Home
 */
get_header(); ?>

			<div class="container">
				<div id="welcome">
					<h1><?php the_title(); ?></h1>

<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
					<p>Sorry...we can't seem to find the content you're looking for.</p>
<?php endif; ?>
				</div>
<!--/#welcome -->





<?php query_posts('category_name=gift&showposts=6'); ?>
				<div id="gifts" class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2"><a href="<?php echo get_permalink(); ?>">
						<img src="http://www-lincolnmakers-com.herokuapp.com/wp-content/uploads/<?php
							if( get_post_meta($post->ID, 'og-image', true) ) {
								echo get_post_meta($post->ID, 'og-image', true);
							}
						?>" alt="<?php the_title(); ?>">
						<h2><?php the_title(); ?></h2>
						<p><?php echo get_the_excerpt(); ?></p>
					</a></div>

<?php endwhile; ?>
				</div>
<!--/#gifts -->
<?php endif; ?>

			</div><!--/.container -->

<?php get_footer(); ?>