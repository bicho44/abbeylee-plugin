<?php
/*
Title: Home Page Banner
Setting: abbeylee_settings
Tab: Advanced

Order: 20
Flow: Abbeylee Workflow
*/

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_banner_text'
,'value' => 'Save Up to 40% on selected items'
,'label' => __('Banner Text', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_banner_button'
,'value' => 'Shop Now!'
,'label' => __('Banner Button Text', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_banner_url'
,'value' => ''
,'label' => __('Banner Button Link', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));


