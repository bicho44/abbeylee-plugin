<?php
/*
Title: News Section
Setting: abbylee_settings

Order: 40
Tab: News
Flow: Abbylee Settings
*/

piklist('field', array(
    'type' => 'group'
,'field' => 'new_group'
,'label' => __('News Setting', 'imgd')
,'list' => false
    ,'columns'=> 6
,'description' => __('Titles You use in the news section.', 'imgd')
,'fields' =>  array (array(
        'type' => 'text'
        ,'field' => 'imgd_news_title'
        ,'value' => 'Lasted News'
        ,'label' => __('Column Title', 'imgd')
        ,'attributes' => array(
                'class' => 'regular-text'
            )
        ), array(
            'type' => 'text'
        ,'field' => 'imgd_news_link'
        ,'value' => ''
        ,'label' => __('Column Title Link', 'imgd')
        ,'attributes' => array(
                'class' => 'regular-text'
            , 'placeholder'=>__('Type the URL', 'imgd')
            )
    ))));

/*piklist('field', array(
    'type' => 'group'
,'field' => 'insta_group'
,'label' => __('Instagram Setting', 'imgd')
,'list' => false
,'columns'=> 6
,'description' => __('Titles You use in the news section.', 'imgd')
,'fields' =>  array (

 array(
    'type' => 'text'
,'field' => 'imgd_news_title2'
,'value' => 'Instagram'
,'label' => __('Social Column Title', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
)
, array(
    'type' => 'text'
,'field' => 'imgd_news_link2'
,'value' => ''
,'label' => __('Social Column Title Link', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
        , 'placeholder'=>__('Type the URL', 'imgd')
    )
)
    , array(
    'type' => 'text'
,'field' => 'imgd_news_shortcode'
,'value' => ''
,'label' => __('Shortcode', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    , 'placeholder'=>__('[ISW id=XXXX]', 'imgd')
    )
))));*/
