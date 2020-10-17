<?php
/*add image sizes*/
add_image_size( 'std-image', 400, 330,true );

/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-08-23
 * Time: 20:29
 */
/**
* Prints featured image src
                        */
function the_featured_image_src($post_id = null, $size = "full") {
	echo get_featured_image_src($post_id, $size);
}

/**
 * Returns the featured image source of provided $post_id, or attempts to detect the current post
 */
function get_featured_image_src($post_id = null, $size = "full") {
	if ($post_id === null){
		global $post;
		$post_id = $post->ID;
	}
	$thumb_id = get_post_thumbnail_id( $post_id );
	$src = wp_get_attachment_image_src( $thumb_id, $size );
	return $src[0];
}



//Breadcrumb for pages
function breadcrumb_page( $post ) {
	echo "<div class='breadcrumb'> <ul>";
	$format = '<li><a href="%s" title="%s">%s</a>&nbsp; &gt; &nbsp;</li>';
	$anc    = array_map( 'get_post', array_reverse( (array) get_post_ancestors( $post ) ) );
	$links  = array_map( 'get_permalink', $anc );
	foreach ( $anc as $i => $apost ) {
		$title = apply_filters( 'the_title', $apost->post_title );
		printf( $format, $links[ $i ], esc_attr( $title ), esc_html( $title ) );
	}
	echo "<li>" . apply_filters( 'the_title', $post->post_title ) . "</li>";
	echo "</ul></div>";
}
