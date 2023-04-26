<?php
/**
 * Plugin Name: Softuni Training
 * Description: This is our first plugin
 * Version: 0.0.1
 */
function change_title_text($title) {
   
 return $title . ' our edit here';
} 

add_filter('the_title', 'change_title_text');

function change_title_again($title){
    return $title . ' this is my second manipulation';
}

add_filter('the_title', 'change_title_again');