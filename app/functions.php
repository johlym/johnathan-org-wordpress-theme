<?php

function word_count($input) {
	$word_count = str_word_count( strip_tags( $input ) );
	$appendix = "words";
	if ($word_count = 1) { $appendix = "word"; }
	return "" . $word_count . " " . $appendix;
} 

// Let's unhook the original Jetpakc Related Posts filter
function jetpackme_remove_rp() {
	if (class_exists('Jetpack_RelatedPosts')) {
		$jprp = Jetpack_RelatedPosts::init();
		$callback = array( $jprp, 'filter_add_target_to_dom' );
		remove_filter( 'the_content', $callback, 40 );
	}
}
add_filter( 'wp', 'jetpackme_remove_rp', 20 );

function register_primary_menu() {
  register_nav_menu('primary-menu',__( 'Primary' ));
}
add_action( 'init', 'register_primary_menu' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function widgets_init() {

  // left sidebar
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'left-sidebar',
		'before_widget' => '<div class="widget left-flex-child">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
  ) );
  
  // ad block
  register_sidebar( array(
    'name'          => 'Ad Block',
    'id'            => 'ad-block',
    'before_widget' => '<div class="widget left-flex-child ad">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );

  // after-post block
  register_sidebar( array(
    'name'          => 'After Single Post',
    'id'            => 'apw-block',
    'before_widget' => '<div class="apw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'widgets_init' );

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'css-base', get_template_directory_uri() . '/style.css', array(), rand(100000,999999) );
	wp_enqueue_style( 'css-screen', get_template_directory_uri() . '/assets/css/screen.css', array(), rand(100000,999999) );
	// wp_enqueue_style( 'css-fontawesome-base', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '5.0.1' );
	// wp_enqueue_style( 'css-fontawesome-brands', get_template_directory_uri() . '/assets/css/fa-brands.min.css', array(), '5.0.1' );
	// wp_enqueue_style( 'css-fontawesome-regular', get_template_directory_uri() . '/assets/css/fa-regular.min.css', array(), '5.0.1' );
	
}

// include custom jQuery
function force_custom_jquery_version() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'force_custom_jquery_version');

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

add_theme_support( 'title-tag' );
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

  // additional image sizes
  // delete the next line if you do not need additional image sizes
  add_image_size( 'featured-image', 1200, 9999 ); //300 pixels wide (and unlimited height)
}

function johnathan_org_post_formats_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'post' ) );
}
add_action( 'after_setup_theme', 'johnathan_org_post_formats_setup' );

/**
 * Disable the emoji's
 */
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
 }
 add_action( 'init', 'disable_emojis' );
 
 /**
  * Filter function used to remove the tinymce emoji plugin.
  * 
  * @param array $plugins 
  * @return array Difference betwen the two arrays
  */
 function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
  return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
  return array();
  }
 }
 
 /**
  * Remove emoji CDN hostname from DNS prefetching hints.
  *
  * @param array $urls URLs to print for resource hints.
  * @param string $relation_type The relation type the URLs are printed for.
  * @return array Difference betwen the two arrays.
  */
 function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
  if ( 'dns-prefetch' == $relation_type ) {
  /** This filter is documented in wp-includes/formatting.php */
  $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
 
 $urls = array_diff( $urls, array( $emoji_svg_url ) );
  }
 
 return $urls;
 }

?>