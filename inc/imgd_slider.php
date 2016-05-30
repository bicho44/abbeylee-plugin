<?php
/**
 * Funciones para el Slider
 * User: bicho44
 * Date: 5/27/16
 * Time: 11:40 AM
 */

if(! function_exists('get_imgd_rev_slider')){

    function get_imgd_rev_slider($shortcode='home', $location=''){
        if ($shortcode=='') $shortcode='home';

        $html='';

        $html.='<!--'.$shortcode.'_slider-->
<div class="full_box home_slider">

    <!--slider-->
    <div class="slider">
        <div class="flexslider" id="'.$shortcode.'_slider">';
if (function_exists('putRevSlider')) {
    putRevSlider("$shortcode", "$location");
}
        $html.='</div>
        </div>
        <!--/slider-->
        <!--slider_text
        
<div class="slider_text">
    <div class="center_box">
    </div>
</div> -->
<!--/slider_text-->
</div>
<!--/'.$shortcode.'_slider-->';

return $html;

    }

}

if(! function_exists('imgd_rev_slider')) {

    function imgd_rev_slider($shortcode='home'){

        echo get_imgd_rev_slider($shortcode);

    }

}