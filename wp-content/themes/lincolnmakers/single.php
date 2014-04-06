<?php get_header(); ?>

			<div class="container">
				<div class="row">
					<div id="gift-details" class="col-xs-12 col-sm-9 col-sm-push-3 col-md-8 col-md-push-4 col-lg-8 col-md-push-4">
<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
						<h1><?php the_title(); ?></h1>


						<div class="flexslider">
							<ul class="slides">
<?php if( get_post_meta($post->ID, 'image-carousel-1', true) != null ) { ?>
								<li><?php if($post->post_name == 'blend') { ?><a data-toggle="modal" href="#videoModal"><?php } ?><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID, 'image-carousel-1', true); ?>" alt="<?php the_title(); ?> - Image 1" title="<?php the_title(); ?> - Image 1"><?php if($post->post_name == 'blend') { ?></a><?php } ?></li>
<?php } ?>
<?php if( get_post_meta($post->ID, 'image-carousel-2', true) != null ) { ?>
								<li><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID, 'image-carousel-2', true); ?>" alt="<?php the_title(); ?> - Image 2" title="<?php the_title(); ?> - Image 2"></li>
<?php } ?>
<?php if( get_post_meta($post->ID, 'image-carousel-3', true) != null ) { ?>
								<li><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID, 'image-carousel-3', true); ?>" alt="<?php the_title(); ?> - Image 3" title="<?php the_title(); ?> - Image 3"></li>
<?php } ?>
<?php if( get_post_meta($post->ID, 'image-carousel-4', true) != null ) { ?>
								<li><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID, 'image-carousel-4', true); ?>" alt="<?php the_title(); ?> - Image 4" title="<?php the_title(); ?> - Image 4"></li>
<?php } ?>
<?php if( get_post_meta($post->ID, 'image-carousel-5', true) != null ) { ?>
								<li><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID, 'image-carousel-5', true); ?>" alt="<?php the_title(); ?> - Image 5" title="<?php the_title(); ?> - Image 5"></li>
<?php } ?>
<?php if( get_post_meta($post->ID, 'image-carousel-6', true) != null ) { ?>
								<li><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID, 'image-carousel-6', true); ?>" alt="<?php the_title(); ?> - Image 6" title="<?php the_title(); ?> - Image 6"></li>
<?php } ?>
<?php if( get_post_meta($post->ID, 'image-carousel-7', true) != null ) { ?>
								<li><img src="/wp-content/uploads/<?php echo get_post_meta($post->ID, 'image-carousel-7', true); ?>" alt="<?php the_title(); ?> - Image 7" title="<?php the_title(); ?> - Image 7"></li>
<?php } ?>
							</ul>
						</div>


						<h2><?php echo get_post_meta($post->ID, 'gift-description', true); ?></h2>


						<div class="row">
							<div id="gift-description" class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
<?php the_content(); ?>

							</div>
<!--/#gift-description -->





							<div id="call-to-action" class="col-xs-12 col-sm-5 col-md-4 col-lg-4">								
								<div id="locate-dealer" class="container">
									<p><?php echo get_post_meta($post->ID, 'call-to-action', true); ?></p>
									<a href="#">Locate a Dealer</a>
								</div>


								<div id="learn-more" class="container">
									<p>Get more information on the Lincoln Makers Program and how to pre-order a new Lincoln MKZ.</p>
									<a href="<?php bloginfo('url'); ?>/summary/">Learn More</a>
								</div>
							</div>
<!--/#call-to-action -->
<?php endwhile; else: ?>
								<p>Sorry...we can't seem to find the content you're looking for.</p>
							</div>
<!--/#gift-description -->
<?php endif; ?>
						</div><!--/.row -->
						
					</div>
<!--/#gift-details -->





					<nav id="side-nav" class="hidden-xs col-sm-3 col-sm-pull-9 col-md-4 col-md-pull-8 col-lg-4 col-lg-pull-8">
<?php query_posts('category_name=gift&showposts=6'); ?>
						<ul>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li class="<?php echo $post->post_name;?>"><a href="<?php echo get_permalink(); ?>">
								<h4><?php the_title(); ?></h4>
								<p><?php echo get_the_excerpt(); ?></p>
							</a></li>

<?php endwhile; ?>
						</ul>
<?php endif; ?>
					</nav>
<!--/#side-nav -->
				</div><!--/.row -->
			</div><!--/.container -->

<?php get_footer(); ?>