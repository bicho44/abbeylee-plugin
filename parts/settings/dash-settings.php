<?php
/*
Title: News Section
Setting: abbeylee_news_settings

Order: 30
Default: true
Flow: Abbeylee Workflow
*/


piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_news_title'
,'value' => 'Lasted News'
,'label' => __('News Column Title', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_news_link'
,'value' => '#'
,'label' => __('News Column Title Link', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_news_title2'
,'value' => 'Instagram'
,'label' => __('Insta Column Title', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));

piklist('field', array(
    'type' => 'text'
,'field' => 'imgd_news_link2'
,'value' => '#'
,'label' => __('Insta Column Title Link', 'imgd')
,'attributes' => array(
        'class' => 'regular-text'
    )
));
