<?php  

function load_stylesheets() {

wp_enqueue_style('wp-block-library-css', 'https://www.warschawski.com/wp-includes/css/dist/block-library/style.min.css?ver=5.1.1');
wp_enqueue_style('wpr-fonts-css', 'https://use.typekit.net/pbi7izw.css');  
wp_enqueue_style('wpr-site-css', 'https://www.warschawski.com/wp-content/themes/warschawski/public/css/site.css?ver=1.2.9');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function addjs() {

    wp_enqueue_script('jquery', 'https://www.warschawski.com/wp-includes/js/jquery/jquery.js');
    wp_enqueue_script('main', 'https://www.warschawski.com/wp-content/themes/warschawski/public/js/site.js?ver=1.2.9');
    wp_enqueue_script('wp-embed', 'https://www.warschawski.com/wp-includes/js/wp-embed.min.js?ver=5.1.1');

}

add_action('wp_enqueue_scripts', 'addjs');

add_theme_support('menus');

register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'theme'),

    )

    );

?>

