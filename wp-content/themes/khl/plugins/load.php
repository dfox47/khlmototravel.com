<?php
$curradmin = wp_get_current_user();
function bgt_acf_settings_path( $path ) {
 
    // update path
    $path = get_template_directory() . '/plugins/acf/';
    
    // return
    return $path;
    
}
add_filter('acf/settings/path', 'bgt_acf_settings_path');
 
function bgt_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_template_directory_uri() . '/plugins/acf/';
    
    // return
    return $dir;
}
add_filter('acf/settings/dir', 'bgt_acf_settings_dir');

 
function bgt_acf_json_save_point( $path ) {
    
    // update path
    $path = get_template_directory() . '/import/json';
    
    // return
    return $path;
    
}
add_filter('acf/settings/save_json', 'bgt_acf_json_save_point');

function bgt_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    // append path
    $paths[] = get_template_directory() . '/import/json';
    
    
    // return
    return $paths;
}
add_filter('acf/settings/load_json', 'bgt_acf_json_load_point');
 
if($curradmin->user_login != 'De'.'veloper') add_filter('acf/settings/show_admin', '__return_false');

function my_remove_update_nag($value) {
	if(is_object($value)) unset( $value->response[ trim( get_template_directory(), '/' ) .'/plugins/acf/acf.php' ] );
	return $value;
}
add_filter('site_transient_update_plugins', 'my_remove_update_nag');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');


include_once( get_template_directory() . '/plugins/acf/acf.php' );