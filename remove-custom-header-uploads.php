<?php
/*
Plugin Name:  Remove Custom Header Uploads
Plugin URI: http://aaron.jorb.in/?p=1129
Description: While this plugin doesn't symbolize the hope and enthusiasm of an entire generation, it does remove the ability for users to upload a custom header image.
Author: Aaron Jorbin
Version: 0.1
Author URI: http://aaron.jorb.in
*/

/**
    Hook into Init
*/
add_action('init', 'jorbin_remove_custom_header_uploads', 11);


/**
 * Remove theme support for custom header uploads 
 */
function jorbin_remove_custom_header_uploads(){
    remove_theme_support( 'custom-header-uploads' );
}
