<?php 

    // Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    // Theme support
    function wpb_theme_setup(){
        //Nav Menus
        register_nav_menus(array(
            'prmary' => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');
?>