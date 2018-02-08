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

	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'left-sidebar',
		'before_widget' => '<div class="widget left-flex-child">',
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
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700' );
	
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
  add_image_size( 'featured-image', 2880, 9999 ); //300 pixels wide (and unlimited height)
}

function johnathan_org_post_formats_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'link', 'post' ) );
}
add_action( 'after_setup_theme', 'johnathan_org_post_formats_setup' );

function your_footer_text() {
	$footer_text_1 = '<i class="far fa-copyright"></i> 2014 – ';
	$footer_text_2 = ' Johnathan Lyman. Made with <i class="far fa-heart"></i> and <i class="far fa-coffee"></i> in Seattle. ';
	$footer_text_3 = '<i class="far fa-ellipsis-v"></i> Powered by: 
	<a class="pb-link" href="https://link.johnathan.org/linode"><i class="fab fa-linode"></i></a>
	<a class="pb-link" href="https://link.johnathan.org/wordpress"><i class="fab fa-wordpress"></i></a>
	<a class="pb-link" href="https://link.johnathan.org/letsencrypt"><i class="far fa-lock"></i></a>
	<a class="pb-link" href="https://link.johnathan.org/dnsimple"><img class="pb-small" src="';
	$footer_text_4 = '/assets/svg/dnsimple.com.svg" /></a>
	<a href="https:////fontawesome.com" class="pb-link"><i class="fab fa-font-awesome-flag"></i></a>';
return $footer_text_1 . date("Y") . $footer_text_2 . $footer_text_3 . get_bloginfo("template_directory") . $footer_text_4;
}

?>