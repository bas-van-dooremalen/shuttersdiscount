<?php

// CLEANUP HEAD TAG FUNCTIONS BELOW

/**
* Alter dns-prefetch links in <head>
*/
add_filter('wp_resource_hints', function (array $urls, string $relation): array {
    // If the relation is different than dns-prefetch, leave the URLs intact
    if ($relation !== 'dns-prefetch') {
        return $urls;
    }

    // Remove s.w.org entry
    $urls = array_filter($urls, function (string $url): bool {
        return strpos($url, 's.w.org') === false;
    });

    // List of domains to prefetch:
    $dnsPrefetchUrls = [
        'fonts.googleapis.com', // Google fonts,
    ];
    return array_merge($urls, $dnsPrefetchUrls);
}, 10, 2);

remove_action( 'wp_head', 'wp_resource_hints', 2 );

/**
 * Disable RSS feeds by redirecting their URLs to homepage
 */
foreach (['do_feed_rss2', 'do_feed_rss2_comments'] as $feedAction) {
    add_action($feedAction, function (): void {
        // Redirect permanently to homepage
        wp_redirect(home_url(), 301);
        exit;
    }, 1);
}

/**
 * Remove the feed links from <head>
 */
remove_action('wp_head', 'feed_links', 2);

/**
 * Remove emoji script and styles from <head>
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', function (): bool {
    return false;
});

/**
 * Remove XML-RPC link from <head>
 */
remove_action('wp_head', 'rsd_link');

/**
 * Remove Windows Live Writer manifest from <head>
 */
remove_action('wp_head', 'wlwmanifest_link');

/**
 * Remove info about WordPress version from <head>
 */
remove_action('wp_head', 'wp_generator');

/**
 * Remove Gutenberg default styles
 */
add_action('wp_print_styles', function (): void {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
});

/**
 * Remove unnecessary attributes from style tags
 */
add_filter('style_loader_tag', function (string $tag, string $handle): string {
    // Remove ID attribute
    $tag = str_replace("id='${handle}-css'", '', $tag);

    // Remove type attribute
    $tag = str_replace(" type='text/css'", '', $tag);

    // Change ' to " in attributes:
    $tag = str_replace('\'', '"', $tag);

    // Remove trailing slash
    $tag = str_replace(' />', '>', $tag);

    // Remove double spaces
    return str_replace('  ', '', $tag);
}, 10, 2);

function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

/**
* Function to defer all scripts which are not excluded
*/
function crave_js_defer_attr($tag) {
	if (is_admin()) {
		return $tag;
	}
	// Do not add defer attribute to these scripts
	$scripts_to_exclude = array('jquery.js'); // add a string of js file e.g. script.js

	foreach($scripts_to_exclude as $exclude_script) {
		if (true == strpos($tag, $exclude_script ) )
			return $tag; 
	}
	// Defer all remaining scripts not excluded above
	return str_replace( ' src', ' defer src', $tag );
}
add_filter( 'script_loader_tag', 'crave_js_defer_attr', 10);


function add_rel_preload($html, $handle, $href, $media) {
    if (is_admin())
        return $html;
    
    $html = <<<EOT
    <link rel='preload' as='style' onload="this.onload=null;this.rel='stylesheet'" 
    id='$handle' href='$href' />
    EOT;
    
    return $html;
    }
    
    add_filter( 'style_loader_tag', 'add_rel_preload', 10, 4 );