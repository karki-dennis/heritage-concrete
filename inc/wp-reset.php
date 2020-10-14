<?php

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {


	$filetype = wp_check_filetype( $filename, $mimes );

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

}, 10, 4 );

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


//remove Editor
add_action( 'init', function() {
	//remove_post_type_support( 'post', 'editor' );
	remove_post_type_support( 'page', 'editor' );
}, 99);


//remove post type -> post

// Remove side menu
/*add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
	remove_menu_page( 'edit.php' );
}*/

// Remove +New post in top Admin Menu Bar
/*add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'new-post' );
}*/

// Remove Quick Draft Dashboard Widget
/*add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

function remove_draft_widget(){
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}*/
