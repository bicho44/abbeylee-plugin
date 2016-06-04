<?php
/*
Title: Home Page Settings
Setting: abbylee_settings
Tab: Home
Order: 10
Default: True
Flow: Abbylee Settings
*/


piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_slider_shortcode'
,'description' => __('Insert the Slider Shortcode', 'imgd')
,'value' => 'home'
,'label' => __('Slider Shortcode', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));


piklist('field', array(
    'type' => 'group'
    ,'field' => 'banner_group'
    ,'label' => __('Banners Setting', 'imgd')
    ,'list' => false
    ,'description' => __('Insert here the Home Page banner data.', 'imgd')
    ,'fields' => array(
        array(
            'type' => 'text'
            ,'field' => 'imgd_banner_text'
            ,'value' => __('Save Up to 40% on selected items','imgd')
            ,'label' => __('Promo Text', 'imgd')
            ,'attributes' => array(
                'class' => 'regular-text'
            )
        )
    , array(
            'type' => 'text'
            ,'field' => 'imgd_banner_button'
            ,'value' => 'Shop Now!'
            ,'label' => __('Button Text', 'imgd')
            ,'attributes' => array(
                    'class' => 'regular-text'
                )
            )
    , array(
            'type' => 'text'
            ,'field' => 'imgd_banner_url'
            ,'value' => ''
            ,'placeholder'=>__('URL to the button','imgd')
            ,'label' => __('Button Link', 'imgd')
            ,'attributes' => array(
                    'class' => 'regular-text'
                )
            )
    )
    ));