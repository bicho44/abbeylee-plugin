<?php
/*
Plugin Name: Abbey Lee Plugin
Plugin URI: http://imgdigital.com.ar/portfolio/projects/abbeylee/
Description: Este es un Plug-in para el sitio de Abbey Lee
Version: 1.0
Author: Federico Reinoso
Author URI: http://imgdigital.com.ar
Text Domain: imgd
Domain Path: languages/
Plugin Type: Piklist
License: GPL2
*/

define( 'ABBEYLEE_PLUGIN_PATH', plugin_dir_url( __FILE__ ) );

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
 * Retrieve Image thumbnail ID.
 *
 * @since 2.9.0
 * @since 4.4.0 `$post` can be a post ID or WP_Post object.
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @param string $meta Meta data a buscar
 * @return string|int Meta ID or empty string.
 */
function imgd_get_meta_id( $post = null, $meta = 'imgd_image_slideshow' ) {
    
    $post = get_post( $post );
    if ( ! $post ) {
        return '';
    }
    
    return get_post_meta( $post->ID, $meta , true );
}

/**
 * @param $post
 * @param string $meta
 * @param string $thumbsize
 * @param string $posttype
 * @return false|string
 */
function get_imgd_imagen_home($post, $meta='imgd_slideshow', $thumbsize='thumbnail', $posttype=""){

    $imageID=array();
    $path = "";

    if ($meta=='') $meta='imgd_slideshow';

    $post = get_post( $post );

    if ( ! $post ) {
        return '';
    }

    $imageID = get_post_meta( $post->ID, $meta, true );

    //piklist::pre($imageID);

    if (!empty($imageID)){
        return wp_get_attachment_url($imageID, $thumbsize);

    } else {

        if($posttype!="") {
            $imageID = get_post_meta($post->ID, $posttype);
            if (!empty($imageID))
                 return thumb($imageID[0]['path']);
        }

        if (has_post_thumbnail($post->ID)) {
            return get_the_post_thumbnail_url($post->ID, $thumbsize);

        }
    }
}


function get_promo_title($post){

    $post = get_post( $post );

    if ( ! $post ) {
        return '';
    }

    $title = get_post_meta( $post->ID, 'imgd_destacado_title', true );

    if (empty($title)){
        $title = get_the_title($post->ID);
    }

    return $title;

}

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
        'page_title' => __('Abbey Lee Home Page Settings','imgd')
    ,'menu_title' => __('Abbey Lee Home Page', 'imgd')
    ,'capability' => 'manage_options'
    ,'menu_slug' => 'custom_settings'
    ,'setting' => 'abbeylee_settings'
    ,'single_line' => true
    ,'default_tab' => 'Home'
    ,'save_text' => __('Save Settings','imgd')
    );

    return $pages;
}
