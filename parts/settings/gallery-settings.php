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
    ,'description' => __('Image Size you use in the galleries.', 'imgd')
    ,'fields' => array(
        array(
            'type' => 'number'
            ,'field' => 'imgd_image_thumb'
            ,'label' => __('Thumbnail Size', 'imgd')
            ,'attributes' => array(
                'class' => 'small-text'
            ,'placeholder'=>'320'
            )
        )
    , array(
            'type' => 'number'
            ,'field' => 'imgd_image_big'
            ,'label' => __('Image Size', 'imgd')
            ,'attributes' => array(
                    'class' => 'small-text'
            ,'placeholder'=>'800'
                )
            )

    )
    ));


If (is_admin()){
    $abby_settings = get_option('abbylee_settings');
    piklist::pre($abby_settings);
}