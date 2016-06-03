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

