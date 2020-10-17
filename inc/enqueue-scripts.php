<?php
/**
 * Created by PhpStorm.
 * User: dennish
 * Date: 2020-09-04
 * Time: 11:02
 */

/**
 * Enqueue scripts and styles.
 */
function surety_system_scripts() {
	wp_enqueue_style( 'heritage-concrete-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'heritage-concrete-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'heritage-concrete-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'heritage-concrete-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '20151215', true );
	wp_enqueue_script( 'heritage-concrete-custom', get_template_directory_uri() . '/assets/js/custom.min.js', array(), '20151215', true );
	wp_enqueue_script( 'heritage-concrete-mapapi', '//maps.googleapis.com/maps/api/js?key=AIzaSyBbRMDYBp0KissJu9jH8ke05B6424Kequw', array(), '1.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'surety_system_scripts' );
//admin enqueue
function ss_tinymce_style() {
	wp_enqueue_style( 'ss-admin-fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css', false, '1.0' );
	wp_enqueue_script( 'ss-admin-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'ss-admin-scripts', get_template_directory_uri() . '/assets/js/admin.js', array( 'jquery' ), '20190930', true );
	wp_localize_script( 'ss-admin-scripts', 'localized', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'siteurl' => site_url()
	) );

}

//add_action( 'admin_init', 'ss_tinymce_style' );


//Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'google_fonts' );
function google_fonts() {
	$query_args = array(
		/*'family' => 'Work+Sans:wght@400;600;700;800'*/
		'family' => 'Barlow:wght@400;500;600;700&display=swap'
	);
	// A safe way to register a CSS style file for later use
	wp_register_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css2" ), array(), null );

	// A safe way to add/enqueue a CSS style file to a WordPress generated page
	wp_enqueue_style( 'google-fonts' );
}


//enqueue ajax script and localize admin ajax
function my_enqueue() {

	//wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/assets/js/ajax-scripts.js', array( 'jquery' ) );

	wp_localize_script( 'ajax-script', 'ss_ajax_object',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'wp_enqueue_scripts', 'my_enqueue' );

function my_acf_admin_enqueue_scripts() {

	wp_enqueue_script( 'acf-admin-js', get_template_directory_uri() . '/assets/js/acf-admin.js', array(), '1.0.0', true );

}

//add_action( 'acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts' );
