<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

function header_csp_generate(){
    header("Content-Security-Policy: script-src 'self' 'unsafe-inline' 'unsafe-eval' www.googletagmanager.com connect.facebook.net www.googleadservices.com www.google-analytics.com googleads.g.doubleclick.net onesignal.com tpc.googlesyndication.com");
}
add_filter('wp_head', 'header_csp_generate');
/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
