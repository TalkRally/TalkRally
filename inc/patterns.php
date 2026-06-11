<?php
/**
 * TalkRally Pattern Categories
 *
 * WordPress automatically loads patterns from the /patterns/ folder.
 * This file only registers custom categories.
 *
 * @package TalkRally
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Pattern Categories
 */
function talkrally_register_pattern_categories() {
    if ( ! function_exists( 'register_block_category' ) ) {
        return;
    }

    $categories = array(
        'talkrally'            => __( 'TalkRally', 'talkrally' ),
        'talkrally-pages'      => __( 'TalkRally Pages', 'talkrally' ),
        'talkrally-sections'   => __( 'TalkRally Sections', 'talkrally' ),
        'talkrally-components' => __( 'TalkRally Components', 'talkrally' ),
    );

    foreach ( $categories as $slug => $label ) {
        register_block_category( $slug, array( 'label' => $label ) );
    }
}
add_action( 'init', 'talkrally_register_pattern_categories', 5 );
