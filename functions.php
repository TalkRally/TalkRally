<?php
/**
 * TalkRally Theme Functions
 *
 * Core theme bootstrap only.
 *
 * @package TalkRally
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * =================================================
 * LOAD CORE THEME FILES
 * =================================================
 */

require_once get_theme_file_path( '/inc/patterns.php' );

/**
 * =================================================
 * THEME SETUP
 * =================================================
 */

function talkrally_theme_setup() {

	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'block-patterns' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'align-wide' );

	add_theme_support(
		'html5',
		array(
			'caption',
			'gallery',
			'search-form',
			'script',
			'style',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'talkrally' ),
			'footer'  => __( 'Footer Navigation', 'talkrally' ),
		)
	);

	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'talkrally_theme_setup' );

/**
 * Disable remote pattern directory.
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * =================================================
 * REGISTER COMPONENT BLOCKS
 * =================================================
 *
 * Automatically registers every block.json
 * found in /components/{component}/
 */

function talkrally_register_component_blocks() {

	$components_dir = get_theme_file_path( '/components' );

	if ( ! is_dir( $components_dir ) ) {
		return;
	}

	$block_files = glob(
		$components_dir . '/*/block.json'
	);

	if ( empty( $block_files ) ) {
		return;
	}

	foreach ( $block_files as $block_file ) {
		register_block_type( dirname( $block_file ) );
	}
}
add_action( 'init', 'talkrally_register_component_blocks' );

/**
 * =================================================
 * TALKRALLY BLOCK CATEGORY
 * =================================================
 */

function talkrally_register_block_categories( $categories ) {

	array_unshift(
		$categories,
		array(
			'slug'  => 'talkrally-components',
			'title' => __( 'TalkRally Components', 'talkrally' ),
		)
	);

	return $categories;
}
add_filter(
	'block_categories_all',
	'talkrally_register_block_categories',
	5,
	2
);

/**
 * =================================================
 * THEME STYLES
 * =================================================
 */

function talkrally_enqueue_theme_styles() {

	wp_enqueue_style(
		'talkrally-theme',
		get_theme_file_uri( '/assets/css/theme.css' ),
		array(),
		talkrally_asset_version( '/assets/css/theme.css' )
	);
}
add_action(
	'wp_enqueue_scripts',
	'talkrally_enqueue_theme_styles'
);

/**
 * =================================================
 * ASSET VERSIONING
 * =================================================
 */

function talkrally_asset_version( $relative_path ) {

	$file = get_theme_file_path( $relative_path );

	if ( file_exists( $file ) ) {
		return (string) filemtime( $file );
	}

	return wp_get_theme()->get( 'Version' );
}
