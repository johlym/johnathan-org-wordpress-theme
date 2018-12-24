<?php

function word_count($input) {
	$word_count = str_word_count( strip_tags( $input ) );
	$appendix = "words";
	if ($word_count = 1) { $appendix = "word"; }
	return "" . $word_count . " " . $appendix;
} 

function create_post_type() {
  register_post_type( 'list_link',
    array(
      'labels' => array(
        'name' => __( 'List Links' ),
        'singular_name' => __( 'List Link' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'custom-fields' )
    )
  );
}
add_action( 'init', 'create_post_type' );

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

  // after-post block
  register_sidebar( array(
    'name'          => 'Intro Block',
    'id'            => 'intro-block',
    'before_widget' => '<div class="widget-ib">',
    'after_widget'  => '</div>',
    'before_title'  => '<strong>',
    'after_title'   => '</strong>',
  ) );

  // after-post block
  register_sidebar( array(
    'name'          => 'After Single Post',
    'id'            => 'apw-block',
    'before_widget' => '<div class="widget-asp">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => 'Ad Block',
    'id'            => 'ad-block',
    'before_widget' => '<div class="ad-block">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'widgets_init' );

// include custom jQuery
function force_custom_jquery_version() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'force_custom_jquery_version');

// Add scripts and stylesheets
function theme_stylesheets() {
	wp_enqueue_style( 'css-base', get_template_directory_uri() . '/style.css', array(), rand(100000,999999) );	
}

add_action( 'wp_enqueue_scripts', 'theme_stylesheets' );

add_theme_support( 'title-tag' );
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 150, 150, true );
  add_image_size( 'in-post',        1360, 9999 );
  add_image_size( 'featured-image', 1760, 9999 );
}

function add_wp_head() {
  echo '<meta name="description" content="A hand-crafted technology product by Johnathan Lyman" />
  <link href="https://micro.blog/johlym" rel="me" />
  <link href="https://github.com/johlym" rel="me" />
  <link href="https://twitter.com/_johlym" rel="me" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Merriweather:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-9ralMzdK1QYsk4yBY680hmsb4/hJ98xK3w0TIaJ3ll4POWpWUYaA2bRjGGujGT8w" crossorigin="anonymous">
  <link rel="dns-prefetch" href="//cdn.fontawesome.com">
  <link rel="dns-prefetch" href="//updown.io">';
}

add_action( 'wp_head', 'add_wp_head', 0 );
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

 // remove dashicons
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
	    return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

// alert shortcode

function alert_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'level' => 'level',
	), $atts );

	return '<div class="alert alert-' . esc_attr($a['level']) . '" role="alert">' . $content . '</div>';
}
add_shortcode( 'alert', 'alert_shortcode' );

function clear_cache() {
  $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, CACHE_PURGE_URL);
    curl_exec ($curl);
    curl_close ($curl);
}

add_filter( 'xmlrpc_publish_post', 'clear_cache');


?>