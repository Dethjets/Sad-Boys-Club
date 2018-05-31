<?php
/*
Plugin Name: Square 205 WP Enqueue Scripts &amp; Styles
Plugin URI: http://www.square205.com/
Description: This custom plugin is used for enqueuing scripts and styles in wordpress, including bundle.js which is compiled from project source.
Version: 1.0
Author: Square 205 Dev
Author URI: http://www.square205.com/
License:
*/

// wordpress wp_enqueue_scripts hook enqueues to front end of site
function enqueue_for_frontend() {

  /* ----- SCRIPTS ----- */
  wp_deregister_script('jquery');
  wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', '', '2.2.4', '');
  wp_enqueue_script('jquery');

  wp_register_script( 'jquery-waypoints.min.js', '/wp-content/plugins/jquery.waypoints.min.js', '', null, '');
  wp_enqueue_script( 'jquery-waypoints.min.js' );

  wp_register_script( 'inview-min-js', '/wp-content/plugins/inview.min.js', '', null, '');
  wp_enqueue_script( 'inview-min-js' );

  wp_register_script( 'bootstrap-min-js',  'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), null, true );
  wp_enqueue_script( 'bootstrap-min-js' );

  wp_register_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', '', '', '');
  wp_enqueue_style( 'slick-css' );

  wp_register_script( 'slick-min-js',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', '', '', '' );
  wp_enqueue_script( 'slick-min-js' );


  wp_register_script( 'bundle-js', get_template_directory_uri() . '/assets/bundle.js', array('jquery'), null, '');
  wp_enqueue_script( 'bundle-js' );

  wp_register_script( 'typekit', '//use.typekit.net/nyt7tho.js', '', null, '');
  wp_enqueue_script( 'typekit' );



  /* ----- STYLES ----- */
  wp_register_style( 'bootstrap-min-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '', '', '');
  wp_enqueue_style( 'bootstrap-min-css' );

  wp_register_style( 'font-awesome-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', '', '', '');
  wp_enqueue_style( 'font-awesome-min-css' );


}

add_action( 'wp_enqueue_scripts', 'enqueue_for_frontend' );


// sets word count for news feed
function custom_excerpt_length( $length ) {
    return 12; // You can change the number here as per your need.
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<span class="read-more">%2$s</span>',
        get_permalink( get_the_ID() ),
        __( '...', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




// wordpress admin_enqueue_scripts hook enqueues to admin area of site
function enqueue_for_admin() {
}

add_action( 'admin_enqueue_scripts', 'enqueue_for_admin' );


// wordpress login_enqueue_scripts hook enqueues to site login screen
function enqueue_for_login() {
}

add_action( 'login_enqueue_scripts', 'enqueue_for_login' );


// hook to head (avoid if possible)
function hook_to_head() {

  if( wp_script_is( 'typekit', 'done' ) ) {
    echo '<script>try{Typekit.load();}catch(e){}</script>';
  }

}

add_action( 'wp_head', 'hook_to_head' );

// no closing php tag, for good reason!
