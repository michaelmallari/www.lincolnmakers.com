<?php

function add_body_class($classes) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}


add_filter( 'body_class', 'add_body_class' );

?>