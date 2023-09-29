<?php 
    /** 
     * Main function file
     *       
     * @package Manza
     */
?>

<?php
var_dump( get_template_directory_uri() .'/assets/main.js' );


function manza_style_added(){
    //  register style
    $bootstrap_css = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"';
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all');
    wp_register_style('bootstrap-css',$bootstrap_css, [], false, false, 'all');

    //  register script
    $bootstrap_js = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"';
    wp_register_script( 'main-js', get_template_directory_uri() .'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true );
    wp_register_script('bootstrap-js',$bootstrap_js, false, false,'all');

    // enqueue style
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');


    // enqueue script
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action( 'wp_enqueue_scripts', 'manza_style_added' );
