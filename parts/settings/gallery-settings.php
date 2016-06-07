<?php
/*
Title: Gallery Settings
Setting: abbylee_settings
Tab: Gallery
Order: 30
Flow: Abbylee Settings
*/


piklist('field', array(
    'type' => 'group'
    ,'field' => 'gallery_group'
    ,'label' => __('Gallery Setting', 'imgd')
    ,'list' => false
,'columns' => 6
    ,'description' => __('Image Size you use in the galleries.', 'imgd')
    ,'fields' => array(
        array(
            'type' => 'number'
            ,'field' => 'imgd_image_thumb_w'
            ,'label' => __('Thumbnail Width', 'imgd')
        ,'columns' => 6
            ,'attributes' => array(
                'class' => 'small-text'
            ,'placeholder'=>'320'
            )
        )
        ,array(
            'type' => 'number'
        ,'field' => 'imgd_image_thumb_h'
        ,'label' => __('Thumbnail Height', 'imgd')
        ,'columns' => 6
        ,'attributes' => array(
                'class' => 'small-text'
            ,'placeholder'=>'240'
            )
        )
    , array(
            'type' => 'number'
            ,'field' => 'imgd_image_big_w'
            ,'label' => __('Image Width', 'imgd')
        ,'columns' => 6
            ,'attributes' => array(
                    'class' => 'small-text'
            ,'placeholder'=>'800'
                )
            )
    , array(
            'type' => 'number'
        ,'field' => 'imgd_image_big_h'
        ,'label' => __('Image Height', 'imgd')
        ,'columns' => 6
        ,'attributes' => array(
                'class' => 'small-text'
            ,'placeholder'=>'600'
            )
        )

    )
    ));


If (is_admin()){
    $abby_settings = get_option('abbylee_settings');
   // piklist::pre($abby_settings);
}