<?php
/*
Title: Home Page Preferences
Post Type: page,post,events,tvvideo,faculty,classes
Description: Options to use the post at Home Page
Priority: high
Order: 3
Collapse: false
Context: side
*/

piklist('field',
    array(
        'type' => 'radio'
    , 'scope' => 'post_meta' // Not used for settings sections
    , 'field' => 'imgd_destacado'
    , 'value' => '0' // Sets default to Option 2
    , 'label' => __('Home Page', 'imgd')
    , 'description' => __('Put this on the home Page', 'imgd')
    , 'attributes' => array(
        'class' => 'radio'
    )
    , 'position' => 'start'
    , 'choices' => array(
        '0' => __('No','imgd')
    , '1' => __('Yes','imgd')
    )
    ));

piklist('field', array(
    'type' => 'number'
,'field' => 'imgd_destacado_order'
,'value' => 1
,'label' => __('Post Order', 'imgd')
,'help' => __('Set the order where the post must be showed in the home page, the number must be 1 to 5 ', 'imgd')
,'attributes' => array(
        'class' => 'small-text'
    )
));