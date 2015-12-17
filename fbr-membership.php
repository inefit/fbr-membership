<?php
/*
Plugin Name: FBR Membership
Plugin URI: http://fabrictheme.com
Description: Membership Plugin for woocommerce theme
Version: 0.2.0
Author: Fahri Arrasyid
Author URI: http://github.com/mfahri

/**
  * @function 	: fbr_member_menu
  *	@desc 		: This function will create menu in admin wordpress
  */
add_action("admin_menu", "fbr_member_menu");
function fbr_member_menu() {
	add_menu_page( 'Membership' , 'Membership', 'add_users', 'fbr-membership', 'fbr_member_init', '', 14.2 );
    add_submenu_page("fbr-membership", "Add New", "Add New", 'add_users', "fbr-member-add", "fbr_member_add");
    add_submenu_page("fbr-membership", "Settings", "Settings", 'add_users', "fbr-member-settings", "fbr_member_settings");
}

function fbr_member_init(){

}