
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

	</body>
</html>
