<?php
/**
 * Apps Flyer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chess_spb
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

//**==Theme support Settings==**//
function chess_spb_setup() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}

add_action( 'after_setup_theme', 'chess_spb_setup' );
//**==Theme support Settings==**//

//**==Register Nav-menus==**//
add_action( 'after_setup_theme', 'chess_spb_register_nav_menu' );
function chess_spb_register_nav_menu() {
	register_nav_menus( [
		'header-menu' => 'Меню в шапке',
		'footer-menu' => 'Меню в подвале'
	] );
}
//**==Register Nav-menus==**//

//**==Support of svg type download==**//
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	} else {
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
	}
	if( $dosvg ) {

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}
//**==Support of svg type download==**//


//**==Enqueue scripts and styles==**//
function chess_spb_scripts() {

    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/dist/css/style.css', array(), _S_VERSION);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/dist/js/app.bundle.js', array(), _S_VERSION, true);
	
}

add_action( 'wp_enqueue_scripts', 'chess_spb_scripts' );
//**==Enqueue scripts and styles==**//


//**==Footer Sidebars==**//

add_action( 'widgets_init', 'chess_spb_widgets' );

function chess_spb_widgets(){

	register_sidebar( array(
		'name'          => 'Адрес',
		'id'            => 'footer-sidebar-1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="footer-top-item js-footer-item-transfer %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Контакты',
		'id'            => 'footer-sidebar-2',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="footer-top-item js-footer-item-transfer %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Социальные сети',
		'id'            => 'footer-sidebar-3',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<ul id="%1$s" class="footer-top-item-socials socials-list %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

//**==Footer Sidebars==**//

//**==Reading Time==**//

function reading_time($post_id) {
	$content = get_post_field( 'post_content', $post_id );
	$word_count = sizeof(explode(" ", $content));
	$readingtime = ceil($word_count / 200);

	if ($readingtime == 1) {
	  $timer = " минута";
	} elseif ($readingtime == 2 || $readingtime == 3 || $readingtime == 4) {
	  $timer = " минуты";
	} elseif ($readingtime == 0 ){
		return 'меньше минуты';
	} else {
	  $timer = " минут";
	}

	$totalreadingtime = '~' . $readingtime . $timer;
	return $totalreadingtime;

}

//**==Reading Time==**//
