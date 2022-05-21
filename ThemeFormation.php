<?php
/*
Plugin Name: Theme de formation
Description: A Plugin For WordPress CRUD ( Create, Read, Update & Delete ) 
Author: Olfa 
Version: 1.0.0
*/

add_action('admin_menu', 'my_menu_pages');
function my_menu_pages(){
    add_menu_page('THEME', 'THEME', 'manage_options', 'new-entry','my_menu_output' );
    add_submenu_page('new-entry', 'Theme de formation', 'New THEME', 'manage_options', 'new-entry', 'my_menu_output' );
    add_submenu_page('new-entry', 'Theme de formation', 'View THEMES', 'manage_options', 'view-entries', 'my_submenu_output' );
    
}
function my_menu_output() {
 
}
function my_submenu_output() {

}

?>