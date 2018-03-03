<?php if ( ! defined( 'ABSPATH' ) ) exit; # Exit if accessed directly

#-----------------#
# LIST OF STYLES  #
#-----------------#

function get_css_files() {

  wp_enqueue_style( 'cookieconsent', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );

}
add_action( 'wp_enqueue_scripts', 'get_css_files' );

#------------------#
# LIST OF SCRIPTS  #
#------------------#

function get_js_files() {

	wp_enqueue_script( 'jquery', array(), null, true );

  wp_enqueue_script( 'fontawesome-js', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array(), null, true );
  wp_enqueue_script( 'cookieconsent-js', get_template_directory_uri() . '/vendor/cookieconsent/cookieconsent.min.js', array(), null, true );
	wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/vendor/popper/popper.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.js', array(), null, true );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'get_js_files' );

#--------------------#
# CREATE OPTION PAGE #
#--------------------#

function create_acf_options_page( $title, $slug ) {
  acf_add_options_page( array(
    'page_title'  => $title,
    'menu_title'  => $title,
    'menu_slug'   => $slug,
    'capability'  => 'edit_posts',
    'redirect'  => false
  )); 
}

if ( function_exists( 'acf_add_options_page' ) ) {

  create_acf_options_page( 'Opções', 'options' );
  create_acf_options_page( 'Tours', 'tours' );
  create_acf_options_page( 'Contactos', 'contacts' );
  create_acf_options_page( 'Sobre', 'about' );
  
}

#-----------------#
# DASHBOARD ITEMS #
#-----------------#

function reorder_admin_menu( $__return_true ) { #$__return_true

  return array( 
    'index.php', # Dashboard

    'separator1', # --Space--

    'options',
    'tours',
    'about',
    'contacts',

    'edit.php', # Posts
    'edit.php?post_type=page', # Page

    'separator2', # --Space--

    'upload.php', # Media
    'themes.php', # Appearance
    'edit-comments.php', # Comments
    'users.php', # Users
    'plugins.php', # Plugins
    'tools.php', # Tools
    'options-general.php', # Settings
 );

}
add_filter( 'custom_menu_order', 'reorder_admin_menu', 99 );
add_filter( 'menu_order', 'reorder_admin_menu', 99 );

#------------------------#
# REMOVE DASHBOARD ITEMS #
#------------------------#

function remove_menu_items() {

  remove_menu_page( 'edit.php' ); # remove posts
  remove_menu_page( 'edit.php?post_type=page' ); # remove pages
  remove_menu_page( 'edit-comments.php' ); #remove comments
  // remove_menu_page( 'edit.php?post_type=acf-field-group' ); #remove acf

}
add_action( 'admin_menu', 'remove_menu_items' );

#----------------#
# ACF GOOGLE MAP #
#----------------#

function my_acf_init() {
  acf_update_setting( 'google_api_key', 'AIzaSyCENK52GYrNSNWWc1KlqSbHtIK4KVbCHt0' );
}
add_action( 'acf/init', 'my_acf_init' );

?>