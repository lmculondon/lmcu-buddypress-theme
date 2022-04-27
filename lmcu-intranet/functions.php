<?php
/**
 * Cera Child functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cera-child
 */

define( 'CERA_CHILD_VERSION', '1.0' );

/**
 * Initialize all the things.
 */
global $cera_child;
$cera_child = require get_stylesheet_directory() . '/inc/class-cera-child.php';

/**
 * Add your customizations below this line.
 */
/*
	Sync PMPro fields to BuddyPress profile fields.

function lmcu_update_user_meta($meta_id, $object_id, $meta_key, $meta_value)
{		
	//make sure buddypress is loaded
	do_action('bp_init');

	//array of user meta to mirror
	$um = array(
		"ocp_job_title" => "Job Title",			//usermeta field => buddypress profile field
	);		
		
	//check if this user meta is to be mirrored
	foreach($um as $left => $right)
	{
		if($meta_key == $left)
		{			
			//find the buddypress field
			$field = xprofile_get_field_id_from_name($right);
			
			//update it
			if(!empty($field))
				xprofile_set_field_data($field, $object_id, $meta_value);
		}
	}
}
add_action('update_user_meta', 'lmcu_update_user_meta', 10, 4);
//need to add the meta_id for add filter
function lmcu_add_user_meta($object_id, $meta_key, $meta_value)
{
	lmcu_update_user_meta(NULL, $object_id, $meta_key, $meta_value);
}
add_action('add_user_meta', 'lmcu_add_user_meta', 10, 3);*/