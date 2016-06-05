<?php
/*
Plugin Name: Abbey Lee Plugin
Plugin URI: http://imgdigital.com.ar/portfolio/projects/abbylee/
Description: Este es un Plug-in para el sitio de Abby Lee
Version: 1.22
Author: Federico Reinoso
Author URI: http://imgdigital.com.ar
Text Domain: imgd
Domain Path: languages/
Plugin Type: Piklist
License: GPL2
*/


define( 'IMGD_PLUGIN_PATH', plugin_dir_url( __FILE__ ) );

//echo IMGD_PLUGIN_PATH;
/**
 * Check if Piklist is activated and installed
 */
add_action('init', 'imgd_init_function');
function imgd_init_function()
{
    if(is_admin())
    {
        include_once(plugin_dir_path(__FILE__).'class-piklist-checker.php');

        if (!piklist_checker::check(__FILE__))
        {
            return;
        }
    }
}

/**
 * Loading Translation
 */
function imgd_plugin_init() {
    $plugin_dir = basename(dirname(__FILE__)).'/languages';
    //echo '<h1>'.$plugin_dir.'</h1>';
    load_plugin_textdomain( 'imgd', false, $plugin_dir );
}
add_action('plugins_loaded', 'casino_plugin_init');

/**
 * Get terms dropdown
 *
 * Arma un Dropdwn de los términos de las categorías
 *
 * @param $taxonomies
 * @param $args
 * @return string
 */
/*
function get_terms_dropdown($taxonomies, $args){

    $myterms = get_terms($taxonomies, $args);

    $output ="<select name='.$taxonomies.'>";

    foreach($myterms as $term){
        $root_url = get_bloginfo('url');
        $term_taxonomy=$term->taxonomy;
        $term_slug=$term->slug;
        $term_name =$term->name;
         $link = get_term_link($term->term_id, $term->taxonomy);
        $output .="<option value='".$link."'>".$term_name."</option>";
    }
    $output .="</select>";
    return $output;
}
*/


add_filter('piklist_admin_pages', 'imgd_abbeylee_setting_pages');
function imgd_abbeylee_setting_pages($pages)
{
    $pages[] = array(
        'page_title' => __('Abby Lee Page Settings','imgd')
    ,'menu_title' => __('Abby Lee Page', 'imgd')
    ,'capability' => 'manage_options'
    ,'menu_slug' => 'abbylee_settings'
    ,'setting' => 'abbylee_settings'
    ,'menu_icon' => 'dashicons-universal-access-alt'
    ,'page_icon' => 'dashicons-universal-access-alt'
    ,'default_tab' => 'Home'
    ,'save_text' => __('Save Settings','imgd')
    );

    return $pages;
}
/**
 * Load IMGD Framework compatibility file.
 */
require plugin_dir_path(__FILE__).'/inc/imgd_functions.php';

imgd_setting_css();

/**
 * Load IMGD Framework compatibility file.
 */
require plugin_dir_path(__FILE__).'/inc/imgd_slider.php';


