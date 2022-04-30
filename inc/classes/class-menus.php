<?php
/**
 * Bootstraps the theme
 * @package hoha
 */

 namespace HOHA\Inc;
 use HOHA\Inc\Traits\Singleton;

 class Menus{
     use Singleton;

     protected function __construct(){
        $this->set_hooks();
     }

     protected function set_hooks(){
        add_action( 'init', [$this, 'register_menus'] );
     }

    function register_menus(){
        register_nav_menus(
            [
                'kilo-header-menu'       => esc_html__('Header Menu', 'kiloventure'),
                'kilo-footer-menu'       => esc_html__('Footer Menu', 'kiloventure')
            ]
        );
    }

    function get_menu_id($location){
        $locations = get_nav_menu_locations();

        
        // get object ID by location
        $menu_id =  $locations[$location];

        return ! empty( $menu_id) ? $menu_id : '';
    }

    function get_child_menu_items( $menu_array, $parent_id){
        $child_menus = [];
        if( ! empty( $menu_array ) && is_array( $menu_array )){
            foreach( $menu_array as $menu ){
                if( intval ($menu->menu_item_parent) === $parent_id){
                    array_push($child_menus, $menu);
                }
            }
        }
    }
     
 }