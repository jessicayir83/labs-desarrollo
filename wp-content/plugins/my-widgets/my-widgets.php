<?php
/**
 * Plugin Name: My Gutenberg Blocks
 * Description: Mi plugin con bloques
 * Version: 1.0
 * Author: Jessica Gonzalez Alvarado
 */

 if(!defined('ABSPATH')){
    exit;
 }


function add_elementor_widget_categories($element_manager){
    $element_manager->add_category("my-widgets", [
        "title"=>__("My Widgets", "my-widgets"),
        "icon"=> "fa fa-plug",
    ]);
}
add_action("elementor/element/categories_registered","add_elementor_widget_categories");

function my_widgets_register_scripts(){
    wp_register_script("sketchfab-script", get_template_directory_uri()."/assets/js/sketchfab.js",[],null, true);
}

require_once plugin_dir_path(__FILE__)."/widgets/sketchfab.php";
 