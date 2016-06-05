<?php
/**
 * Created by PhpStorm.
 * User: bicho44
 * Date: 6/2/16
 * Time: 8:06 PM
 */

function imgd_setting_css()
{
    wp_register_style('imgd-settings-css', plugins_url( '../assets/css/abby_settings_admin.css', __FILE__ ));
    wp_enqueue_style('imgd-settings-css');
}


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