<?php
// includes js and css files
function load_theme_scripts() {
	// js files
	if ( ! is_admin() ){
	wp_dequeue_script("jquery");
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_bloginfo('template_url').'/vendor/jquery/jquery.min.js', array(), '1.0.0', true); 
	wp_enqueue_script('jquery.appear', get_bloginfo('template_url').'/vendor/jquery.appear/jquery.appear.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-easing', get_bloginfo('template_url').'/vendor/jquery.easing/jquery.easing.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-cookie', get_bloginfo('template_url').'/vendor/jquery.cookie/jquery.cookie.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-popper', get_bloginfo('template_url').'/vendor/popper/umd/popper.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-bootstrap', get_bloginfo('template_url').'/vendor/bootstrap/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-common', get_bloginfo('template_url').'/vendor/common/common.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-validate', get_bloginfo('template_url').'/vendor/jquery.validation/jquery.validate.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-easypiechart', get_bloginfo('template_url').'/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-gmap', get_bloginfo('template_url').'/vendor/jquery.gmap/jquery.gmap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-lazyload', get_bloginfo('template_url').'/vendor/jquery.lazyload/jquery.lazyload.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-isotope', get_bloginfo('template_url').'/vendor/isotope/jquery.isotope.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-owl', get_bloginfo('template_url').'/vendor/owl.carousel/owl.carousel.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-magnific-popup', get_bloginfo('template_url').'/vendor/magnific-popup/jquery.magnific-popup.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-vide', get_bloginfo('template_url').'/vendor/vide/jquery.vide.min.js', array(), '1.0.0', true);
	wp_enqueue_script('vendor-vivus', get_bloginfo('template_url').'/vendor/vivus/vivus.min.js', array(), '1.0.0', true);
	wp_enqueue_script('themejs', get_bloginfo('template_url').'/js/theme.js', array(), '1.0.0', true);
	wp_enqueue_script('themepunch.tools', get_bloginfo('template_url').'/vendor/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '1.0.0', true);
	wp_enqueue_script('themepunch.revolution', get_bloginfo('template_url').'/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true);
	wp_enqueue_script('view.home', get_bloginfo('template_url').'/js/views/view.home.js', array(), '1.0.0', true);
	wp_enqueue_script('theme-custom', get_bloginfo('template_url').'/js/custom.js', array(), '1.0.0', true);
	wp_enqueue_script('theme.init', get_bloginfo('template_url').'/js/theme.init.js', array(), '1.0.0', true);
	}
	// css files
	wp_enqueue_style("bootstrap", get_bloginfo('template_url').'/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style("fontawesome", get_bloginfo('template_url').'/vendor/fontawesome-free/css/all.min.css');
	wp_enqueue_style("animate", get_bloginfo('template_url').'/vendor/animate/animate.min.css');
	wp_enqueue_style("simple-line-icons", get_bloginfo('template_url').'/vendor/simple-line-icons/css/simple-line-icons.min.css');
	wp_enqueue_style("owl.carousel", get_bloginfo('template_url').'/vendor/owl.carousel/assets/owl.carousel.min.css');
	wp_enqueue_style("owl.theme", get_bloginfo('template_url').'/vendor/owl.carousel/assets/owl.theme.default.min.css');
	wp_enqueue_style("magnific-popup", get_bloginfo('template_url').'/vendor/magnific-popup/magnific-popup.min.css');
	wp_enqueue_style("theme", get_bloginfo('template_url').'/css/theme.css');
	wp_enqueue_style("theme-elements", get_bloginfo('template_url').'/css/theme-elements.css');
	wp_enqueue_style("theme-blog", get_bloginfo('template_url').'/css/theme-blog.css');
	wp_enqueue_style("theme-shop", get_bloginfo('template_url').'/css/theme-shop.css');
	wp_enqueue_style("rs-settings", get_bloginfo('template_url').'/vendor/rs-plugin/css/settings.css');
	wp_enqueue_style("rs-layers", get_bloginfo('template_url').'/vendor/rs-plugin/css/layers.css');
	wp_enqueue_style("rs-navigation", get_bloginfo('template_url').'/vendor/rs-plugin/css/navigation.css');
	wp_enqueue_style("skins-default", get_bloginfo('template_url').'/css/skins/default.css');
	wp_enqueue_style("custom", get_bloginfo('template_url').'/css/custom.css');
    
	wp_enqueue_script('modernizr', get_bloginfo('template_url').'/vendor/modernizr/modernizr.min.js', array(), '1.0.0', false);

}
add_action('wp_enqueue_scripts', 'load_theme_scripts');


// Disable responsive images in WP 4.4x
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
function remove_image_size_attributes( $html ) {
return preg_replace( '/(width|height)="\d*"/', '', $html );
}
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );	// Remove image size attributes from post thumbnails
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );	// Remove image size attributes from images added to a WordPress post


function remove_post_categories() {
  //remove_meta_box('categorydiv', 'post', 'side');
  remove_meta_box('tagsdiv-post_tag', 'post', 'side');
  remove_meta_box('commentsdiv', 'post', 'normal');
  remove_meta_box('commentstatusdiv', 'post', 'normal');
  remove_meta_box('trackbacksdiv', 'post', 'normal');
  remove_meta_box('slugdiv', 'post', 'normal');
  remove_meta_box('postcustom', 'post', 'normal');
}
add_action( 'admin_menu' , 'remove_post_categories' );


//allowing SVG's
function svg_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['ico'] = 'image/x-icon';
  $mimes['webp'] = 'image/webp';
  $mimes['webp'] = 'image/jfif';
  return $mimes;}
add_filter( 'upload_mimes', 'svg_mime_types' );
//styling the SVG's
function svg_size() {
  echo '<style>
    svg, img[src*=".svg"] {
      max-width: 150px !important;
      max-height: 150px !important;
    }
  </style>';
}
//add_action('admin_head', 'svg_size');

// List of used query variables
function add_query_vars_filter( $vars ){
  $vars[] = "type";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

// bloginfo access via shortcode
function bloginfo_shortcode( $atts ) {
    extract(shortcode_atts(array(
        'key' => '',
    ), $atts));
    return get_bloginfo($key);
}
//examples [bloginfo key='template_directory']
add_shortcode('bloginfo', 'bloginfo_shortcode');

function truncateString($text, $length) {
   $length = abs((int)$length);
   if(strlen($text) > $length) {
      $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
   }
   return($text);
}

function short_excerpt($text, $limit=20, $ending=' [...]') {
  $excerpt = explode(' ', $text, $limit);
  if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt);
  } else {
	$excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt.$ending;
}

function get_current_url() {
	global $wp;
	return home_url(add_query_arg(array(),$wp->request));	
}
add_shortcode('current_url', 'get_current_url');


function ogi_remove_wp_archives(){
  if( is_category() || is_tag() || is_date() || is_author() ) {
    global $wp_query;
    $wp_query->set_404(); //set to 404 not found page
	wp_redirect('/404');
  }
}
add_action('template_redirect', 'ogi_remove_wp_archives');

// Support for featured image in posts
add_theme_support( 'post-thumbnails' );

include_once( get_template_directory() . '/plugins/load.php' );


// Tour custom post type
function create_tour_post_type(){
  register_post_type( 'tour',
    array(
      'labels' => array(
        'name' => __( 'Tours' ),
        'singular_name' => __( 'Tour' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Tour' ),
        'edit_item' => __( 'Edit Tour' ),
        'new_item' => __( 'New Tour' ),
        'view_item' => __( 'View Tour' ),
        'search_items' => __( 'Search Tours' ),
        'not_found' => __( 'No Tours found' ),
        'not_found_in_trash' => __( 'No Tours found in Trash' ),
        'parent_item_colon' => __( 'Parent Tour:' ),
        'menu_name' => __( 'Tours' ),
      ),
	  'menu_icon' => 'dashicons-location-alt',
	  'hierarchical' => false,
	  'description' => 'Tours',
	  'supports' => array( 'title', 'page-attributes', 'thumbnail' ),
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'menu_position' => 24,
	  'show_in_nav_menus' => true,
	  'publicly_queryable' => true,
	  'exclude_from_search' => true,
	  'has_archive' => false,
	  'query_var' => true,
	  'can_export' => true,
	  'rewrite' => true,
	  'capability_type' => 'post'
    )
  );
}
add_action( 'init', 'create_tour_post_type' );

// Gallery custom post type
function create_gallery_post_type(){
  register_post_type( 'gallery',
    array(
      'labels' => array(
        'name' => __( 'Galleries' ),
        'singular_name' => __( 'Gallery' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Gallery' ),
        'edit_item' => __( 'Edit Gallery' ),
        'new_item' => __( 'New Gallery' ),
        'view_item' => __( 'View Gallery' ),
        'search_items' => __( 'Search Galleries' ),
        'not_found' => __( 'No Galleries found' ),
        'not_found_in_trash' => __( 'No Galleries found in Trash' ),
        'parent_item_colon' => __( 'Parent Gallery:' ),
        'menu_name' => __( 'Galleries' ),
      ),
	  'menu_icon' => 'dashicons-format-gallery',
	  'hierarchical' => false,
	  'description' => 'Galleries',
	  'supports' => array( 'title', 'thumbnail', 'page-attributes' ),
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'menu_position' => 24,
	  'show_in_nav_menus' => true,
	  'publicly_queryable' => true,
	  'exclude_from_search' => true,
	  'has_archive' => false,
	  'query_var' => true,
	  'can_export' => true,
	  'rewrite' => true,
	  'capability_type' => 'post'
    )
  );
}
add_action( 'init', 'create_gallery_post_type' );

// Videos custom post type
function create_video_post_type(){
  register_post_type( 'video',
    array(
      'labels' => array(
        'name' => __( 'Videos' ),
        'singular_name' => __( 'Video' ),
        'add_new' => __( 'Add New' ),
        'add_new_item' => __( 'Add New Video' ),
        'edit_item' => __( 'Edit Video' ),
        'new_item' => __( 'New Video' ),
        'view_item' => __( 'View Video' ),
        'search_items' => __( 'Search Videos' ),
        'not_found' => __( 'No Videos found' ),
        'not_found_in_trash' => __( 'No Videos found in Trash' ),
        'parent_item_colon' => __( 'Parent Video:' ),
        'menu_name' => __( 'Videos' ),
      ),
	  'menu_icon' => 'dashicons-format-video',
	  'hierarchical' => false,
	  'description' => 'Videos',
	  'supports' => array( 'title', 'thumbnail', 'page-attributes' ),
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'menu_position' => 24,
	  'show_in_nav_menus' => true,
	  'publicly_queryable' => true,
	  'exclude_from_search' => true,
	  'has_archive' => false,
	  'query_var' => true,
	  'can_export' => true,
	  'rewrite' => true,
	  'capability_type' => 'post'
    )
  );
}
add_action( 'init', 'create_video_post_type' );


function get_translate_id( $object_id, $type = 'post' ) {
    $current_language = apply_filters( 'wpml_current_language', NULL );
    // if array
    if( is_array( $object_id ) ){
        $translated_object_ids = array();
        foreach ( $object_id as $id ) {
            $translated_object_ids[] = apply_filters( 'wpml_object_id', $id, $type, true, $current_language );
        }
        return $translated_object_ids;
    }
    // if string
    elseif( is_string( $object_id ) ) {
        // check if we have a comma separated ID string
        $is_comma_separated = strpos( $object_id,"," );
 
        if( $is_comma_separated !== FALSE ) {
            // explode the comma to create an array of IDs
            $object_id     = explode( ',', $object_id );
 
            $translated_object_ids = array();
            foreach ( $object_id as $id ) {
                $translated_object_ids[] = apply_filters ( 'wpml_object_id', $id, $type, true, $current_language );
            }
 
            // make sure the output is a comma separated string (the same way it came in!)
            return implode ( ',', $translated_object_ids );
        }
        // if we don't find a comma in the string then this is a single ID
        else {
            return apply_filters( 'wpml_object_id', intval( $object_id ), $type, true, $current_language );
        }
    }
    // if int
    else {
        return apply_filters( 'wpml_object_id', $object_id, $type, true, $current_language );
    }
}


/* ADMIN CSS */ 
add_action('admin_head', 'custom_users_list');
function custom_users_list() { echo '<style>
.striped > tbody #user-1,
.plugins tr[data-slug="disable-all-wordpress-updates"] { display:none; }
.striped > tbody #user-2 { background:#BBE1FC; }
.acf-fields > .acf-field  { min-height:auto !important; }
.acf-image-uploader .image-wrap { max-width: 180px !important; }
</style>'; }

// remove emoticon scripts placed in <head>
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_generator');
// Disable image scaling in WordPress (a version 5.3 update)
add_filter( 'big_image_size_threshold', '__return_false' );
