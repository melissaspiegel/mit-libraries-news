<?php

// Remove dashboard menu items
function mitlibnews_remove_dashboard_menu_items() {
	if (!current_user_can('add_users')) {
		remove_menu_page('edit-comments.php');
		remove_menu_page('tools.php');
	}
}

add_action('admin_menu', 'mitlibnews_remove_dashboard_menu_items');

// Remove unneeded dashboard widgets
function mitlibnews_remove_dashboard_widgets() {
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // Quickpress widget
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // Wordpress news
	if (!current_user_can('add_users')) {
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // "At a glance" widget
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal'); // Activity widget
	}
} 

add_action('do_meta_boxes', 'mitlibnews_remove_dashboard_widgets' );

// Register the custom post types
function mitlibnews_register_news_posts() {
	$supports_default = array(
		'title',
		'editor',
		'thumbnail',
		'excerpt'
	);

	// Bibliotech
	$labelsFeatures = array(
		'name' => 'Bibliotech',
		'singular_name' => 'Bibliotech',
		'menu_name' => 'Bibliotech',
		'name_admin_bar' => 'Bibliotech',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Bibliotech',
		'new_item' => 'New Bibliotech',
		'edit_item' => 'Edit Bibliotech',
		'view_item' => 'View Bibliotech',
		'all_items' => 'All Bibliotech',
		'search_items' => 'Search Bibliotech',
		'parent_item_colon' => 'Parent Bibliotech:',
		'not_found' => 'No Bibliotech found.',
		'not_found_in_trash' => 'No Bibliotech found in Trash.'
	);
	$argsFeatures = array(
		'labels'  => $labelsFeatures,
		'public' => true,
		'menu_position' => 5,
		'supports' => $supports_default,
		'taxonomies' => array('category')
	);
	register_post_type('bibliotech', $argsFeatures);

	// Features
	$labelsFeatures = array(
		'name' => 'Spotlights - Featured',
		'singular_name' => 'Spotlight - Featured',
		'menu_name' => 'Spotlights - Featured',
		'name_admin_bar' => 'Spotlight - Featured',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Spotlight - Featured',
		'new_item' => 'New Spotlight - Featured',
		'edit_item' => 'Edit Spotlight - Featured',
		'view_item' => 'View Spotlight - Featured',
		'all_items' => 'All Spotlights - Featured',
		'search_items' => 'Search Spotlights - Featured',
		'parent_item_colon' => 'Parent Spotlights - Featured:',
		'not_found' => 'No Spotlights - Featured found.',
		'not_found_in_trash' => 'No Spotlights - Featured found in Trash.'
	);
	$argsFeatures = array(
		'labels'  => $labelsFeatures,
		'public' => true,
		'menu_position' => 5,
		'supports' => $supports_default,
		'taxonomies' => array('category')
	);
	register_post_type('features', $argsFeatures);

	// Exhibits
	//$labelsExhibits = array(
	//	'name' => 'Spotlights - Exhibits',
	//	'singular_name' => 'Spotlights - Exhibit',
	//	'menu_name' => 'Spotlights - Exhibits',
	//	'name_admin_bar' => 'Spotlights - Exhibit',
	//	'add_new' => 'Add New',
	//	'add_new_item' => 'Add New Spotlights - Exhibit',
	//	'new_item' => 'New Spotlights - Exhibit',
	//	'edit_item' => 'Edit Spotlights - Exhibit',
	//	'view_item' => 'View Spotlights - Exhibit',
	//	'all_items' => 'All Spotlights - Exhibits',
	//	'search_items' => 'Search Spotlights - Exhibits',
	//	'parent_item_colon' => 'Parent Spotlights - Exhibits:',
	//	'not_found' => 'No Spotlights - Exhibits found.',
	//	'not_found_in_trash' => 'No Spotlights - Exhibits found in Trash.'
	//);
	//$argsExhibits = array(
	//	'labels'  => $labelsExhibits,
	//	'public' => true,
	//	'menu_position' => 5,
	//	'supports' => $supports_default,
	//	'taxonomies' => array('category')
	//);
	//register_post_type('exhibits', $argsExhibits);

	//// Tips
	//$labelsTips = array(
	//	'name' => 'Spotlights - Tips',
	//	'singular_name' => 'Spotlights - Tip',
	//	'menu_name' => 'Spotlights - Tips',
	//	'name_admin_bar' => 'Spotlights - Tip',
	//	'add_new' => 'Add New',
	//	'add_new_item' => 'Add New Spotlights - Tip',
	//	'new_item' => 'New Spotlights - Tip',
	//	'edit_item' => 'Edit Spotlights - Tip',
	//	'view_item' => 'View Spotlights - Tip',
	//	'all_items' => 'All Spotlights - Tips',
	//	'search_items' => 'Search Spotlights - Tips',
	//	'parent_item_colon' => 'Parent Spotlights - Tips:',
	//	'not_found' => 'No Spotlights - Tips found.',
	//	'not_found_in_trash' => 'No Spotlights - Tips found in Trash.'
	//);
	//$argsTips = array(
	//	'labels'  => $labelsTips,
	//	'public' => true,
	//	'menu_position' => 5,
	//	'supports' => $supports_default,
	//	'taxonomies' => array('category')
	//);
	//register_post_type('tips', $argsTips);

	// Facts
	//$labelsFacts = array(
		//'name' => 'Spotlights - Facts',
		//'singular_name' => 'Spotlights - Fact',
		//'menu_name' => 'Spotlights - Facts',
		//'name_admin_bar' => 'Spotlights - Fact',
		//'add_new' => 'Add New',
		//'add_new_item' => 'Add New Spotlights - Fact',
		//'new_item' => 'New Spotlights - Fact',
		//'edit_item' => 'Edit Spotlights - Fact',
		//'view_item' => 'View Spotlights - Fact',
		//'all_items' => 'All Spotlights - Facts',
		//'search_items' => 'Search Spotlights - Facts',
		//'parent_item_colon' => 'Parent Spotlights - Facts:',
		//'not_found' => 'No Spotlights - Facts found.',
		//'not_found_in_trash' => 'No Spotlights - Facts found in Trash.'
//	);
//	$argsFacts = array(
		//'labels'  => $labelsFacts,
		//'public' => true,
		//'menu_position' => 5,
		//'supports' => $supports_default,
		//'taxonomies' => array('category')
	//);
	//register_post_type('facts', $argsFacts);

	// Updates
	//$labelsUpdates = array(
	//	'name' => 'Spotlights - Updates',
	//	'singular_name' => 'Spotlights - Update',
	//	'menu_name' => 'Spotlights - Updates',
	//	'name_admin_bar' => 'Spotlights - Update',
	//	'add_new' => 'Add New',
	//	'add_new_item' => 'Add New Spotlights - Update',
	//	'new_item' => 'New Spotlights - Update',
	//	'edit_item' => 'Edit Spotlights - Update',
	//	'view_item' => 'View Spotlights - Update',
	//	'all_items' => 'All Spotlights - Updates',
	//	'search_items' => 'Search Spotlights - Updates',
	//	'parent_item_colon' => 'Parent Spotlights - Updates:',
	//	'not_found' => 'No Spotlights - Updates found.',
	//	'not_found_in_trash' => 'No Spotlights - Updates found in Trash.'
	//);
	//$argsUpdates = array(
	//	'labels'  => $labelsUpdates,
	//	'public' => true,
	//	'menu_position' => 5,
	//	'supports' => $supports_default,
	//	'taxonomies' => array('category')
	//);
	//register_post_type('updates', $argsUpdates);
}	//

add_action('init', 'mitlibnews_register_news_posts');

// Remove tags support from posts
function mitlibnews_unregister_tags() {
	unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'mitlibnews_unregister_tags');

// Disable admin color scheme
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

// function wp_api_encode_acf($data,$post,$context){
// 	$data['meta'] = array_merge($data['meta'],get_fields($post['ID']));
// 	return $data;
// }
 
// if( function_exists('get_fields') ){
// 	add_filter('json_prepare_post', 'wp_api_encode_acf', 10, 3);
// }


	
	



//custom images for the news
add_theme_support( 'post-thumbnails' );
add_image_size( 'news-thumb', 600, 600, true ); // Hard Crop Mode
add_image_size( 'other-news', 600, 9999 ); // Unlimited Height Mode





