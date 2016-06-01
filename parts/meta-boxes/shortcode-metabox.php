<?php
/*
Title: Page Attributes
Post Type: page
Description: Option to put a revolution slider shorcode. Remember to use the page Template "Page with slider" in the Page options MetaBox. If yo dont do this the slider do not gone a shown
Order: 10
Collapse: false
Context: side

Extend: pageparentdiv
Extend Method: after
*/



piklist('field', array(
    'type' => 'radio'
,'field' => 'imgd_revolution_switch'
,'label' => __('Add a Revolution Slider?','imgd')
,'attributes' => array(
        'class' => 'text'
    )
,'choices' => array(
        'yes' => __('Yes','imgd')
    ,'no' => __('No', 'imgd')
    )
,'value' => 'no'
));

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_revolution_shortcode'
,'label' => __('Revolution ShortCode', 'imgd')
,'description' => __('Please enter the Revolution shortcode','imgd')
    ,'placeholder' => '[SV-3788]'
,'conditions' => array(
        array(
            'field' => 'imgd_revolution_switch'
        ,'value' => 'yes'
        )
    )
));