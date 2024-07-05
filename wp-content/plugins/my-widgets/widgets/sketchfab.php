<?php

 if(!defined('ABSPATH')){
    exit;
 }

 use Elementor\Widget_Base;
 use Elementor\Control_Manager;

 add_action("elementor/init",function(){
    class Sketchfab_Widget extends WidgetBase{
        public function get_name(){
            return "sketchfab-widget";
        }
        public function get_title(){
            return __("Sketchfab", "my-widgets");
        }
        public function get_icon(){
            return "eicon-nerd-chuckle";
        }
        public function get_categories(){
            return ["my-widgets"];
        }
        protected function _register_controls(){
            $this->start_controls_section(
                "section_content",["label"=>__("Opciones", "my-widgets")]
            );
            $this->add_control("url-sketchfab",{
                "Label"=> __("URL","my-widgets")
                "type"=> Controls_Manager::TEXT,
                "default"=>"",
            });
        }
    }
 });