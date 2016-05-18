<?php
/*
Title: Preferencias para la Pagina Inicio
Post Type: page,post,events,tvvideo,faculty,classes
Description: Opciones para decidir sobre la aparición de este item en la Página Principal
Priority: high
Order: 3
Collapse: true
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