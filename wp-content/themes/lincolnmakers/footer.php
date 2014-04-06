
		</div>
<!--/#content -->















		<footer id="footer" class="container">
<?php 
	$id = 191; 
	$post = get_page($id); 
	$content = apply_filters('the_content', $post->post_content); 
	echo $content;  
?>
		</footer>
<!--/body > #footer -->














<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
<?php
	if( get_post_meta($post->ID, 'modal', true) != null ) {
		echo get_post_meta($post->ID, 'modal', true);
	}
?>
<?php endwhile; else: ?>
<?php endif; ?>















		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-3.1.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-2.2.0.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					animationLoop: true,
					directionNav: false,
					itemMargin: 0,
					slideshowSpeed: 15000,
					touch: true
				});
			});
		</script>
	</body>
</html>
