<?php
function portfolio_styles_scripts(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',array(),time(),'all');
    wp_enqueue_style('gf1','https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700',array(),time(),'all');
    wp_enqueue_style('gf2','https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i',array(),time(),'all');
    wp_enqueue_style('allmin',get_template_directory_uri().'/vendor/fontawesome-free/css/all.min.css',array(),time(),'all');
    wp_enqueue_style('resume',get_template_directory_uri().'/css/resume.css',array(),time(),'all');

    wp_deregister_script('jquery');
    wp_enqueue_script('jq',get_template_directory_uri().'/vendor/jquery/jquery.min.js',array(),time(),true);
    wp_enqueue_script('boot',get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),time(),true);
    wp_enqueue_script('easing',get_template_directory_uri().'/vendor/jquery-easing/jquery.easing.min.js',array(),time(),true);
    wp_enqueue_script('resume',get_template_directory_uri().'/js/resume.js',array(),time(),true);
}
add_action('wp_enqueue_scripts','portfolio_styles_scripts');

//require get_template_directory().'/csf/options.php';
require get_template_directory().'/inc/theme-options.php';
add_theme_support('title-tag');
add_theme_support('custom-logo');
