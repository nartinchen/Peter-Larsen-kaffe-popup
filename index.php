<?php
/*
* Plugin Name: Peter Larsen Popup
* Plugin URI: http://localhost
* Description: Popup med en animation
* Version: 1.0
* Author: Martin Chen
* Author URI: http://localhost
* License: GPL2
*/
function kaffe_popup_form(){
    $content = '';
    $content .= '<div id="popup-container">';
    $content .= '<div class="box slide-top" id="popup-box">';
    $content .= '<div class="popupCloseButton" id="closeBtn">&#10008;</div>';
 	$content .= '<div class="plant plant-left">';
    $content .= '<img src="' . plugins_url('img/plante1.png', __FILE__) . '" alt="Plant left">';
    $content .= '</div>';
	$content .= '<div class="plant plant-right">';
    $content .= '<img src="' . plugins_url('img/plante2.png', __FILE__) . '" alt="Plant right">';
    $content .= '</div>';
    $content .= '<div class="gif-animation">';
 	$content .= '<img id="gif-container" width="400" height="400" src="' . plugins_url('img/kaffe.gif', __FILE__) . '" alt="Kaffe gif">';
    $content .= '</img>';
    $content .= '</div>';
    $content .= '<div id="header">';
    $content .= '<h1 id="header-title">EN KOP KAFFE NÆRMERE <br> <span id="subheader-title">Tag med på en gåtur og kom en kop nærmere på dit bæredygtige mål.</span></h1>';
    $content .= '</div>';
    $content .= '<form action="#">';
    $content .= '<div class="button-holder">';
    $content .= '<div class="button-element">';
    $content .= '<a href="#" target="_blank" class="btn btn-primary btn-lg active" id="newUrl">';
	$content .= 'DELTAG HER';
	$content .= '</a>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</div>';
    $content .= '</div>';

    return $content;
}

function register_plugin_assets (){
    wp_enqueue_style('CustomStyleSheet', plugins_url('css/style.css', __FILE__));
    wp_enqueue_script('CustomScript', plugins_url('js/script.js', __FILE__), array(), '1.0', true);    
}

add_shortcode('show_kaffe_popup','kaffe_popup_form');
add_action('wp_enqueue_scripts','register_plugin_assets');
