<?php
/*
 * Plugin Name: Nofollow Paged Blog Archives
 * Plugin URI: http://andrewrminion.com/2016/10/nofollow-paged-blog-archives/
 * Description: Adds “rel='nofollow'” to next and previous links to prevent blog pages from being indexed
 * Version: 1.0.0
 * Author: AndrewRMinion Design
 * Author URI: https://andrewrminion.com
 */

if (!defined('ABSPATH')) {
    exit;
}

add_filter( 'next_posts_link_attributes', 'nfpba_add_attribute' );
add_filter( 'previous_posts_link_attributes', 'nfpba_add_attribute' );
function nfpba_add_attribute() {
    return ' rel="nofollow"';
}
