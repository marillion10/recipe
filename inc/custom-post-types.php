<?php
function cptui_register_my_cpts_bs_recipe() {

/**
 * Post Type: recipes.
 */

$labels = [
	"name" => __( "recipes", "custom-post-type-ui" ),
	"singular_name" => __( "recipe", "custom-post-type-ui" ),
	"menu_name" => __( "Recipes", "custom-post-type-ui" ),
	"all_items" => __( "All recipes", "custom-post-type-ui" ),
	"add_new" => __( "Add new", "custom-post-type-ui" ),
	"add_new_item" => __( "Add new recipe", "custom-post-type-ui" ),
	"edit_item" => __( "Edit recipe", "custom-post-type-ui" ),
	"new_item" => __( "New recipe", "custom-post-type-ui" ),
	"view_item" => __( "View recipe", "custom-post-type-ui" ),
	"view_items" => __( "View recipes", "custom-post-type-ui" ),
	"search_items" => __( "Search recipes", "custom-post-type-ui" ),
	"not_found" => __( "No recipes found", "custom-post-type-ui" ),
	"not_found_in_trash" => __( "No recipes found in trash", "custom-post-type-ui" ),
	"parent" => __( "Parent recipe:", "custom-post-type-ui" ),
	"featured_image" => __( "Featured image for this recipe", "custom-post-type-ui" ),
	"set_featured_image" => __( "Set featured image for this recipe", "custom-post-type-ui" ),
	"remove_featured_image" => __( "Remove featured image for this recipe", "custom-post-type-ui" ),
	"use_featured_image" => __( "Use as featured image for this recipe", "custom-post-type-ui" ),
	"archives" => __( "recipe archives", "custom-post-type-ui" ),
	"insert_into_item" => __( "Insert into recipe", "custom-post-type-ui" ),
	"uploaded_to_this_item" => __( "Upload to this recipe", "custom-post-type-ui" ),
	"filter_items_list" => __( "Filter recipes list", "custom-post-type-ui" ),
	"items_list_navigation" => __( "recipes list navigation", "custom-post-type-ui" ),
	"items_list" => __( "recipes list", "custom-post-type-ui" ),
	"attributes" => __( "recipes attributes", "custom-post-type-ui" ),
	"name_admin_bar" => __( "recipe", "custom-post-type-ui" ),
	"item_published" => __( "recipe published", "custom-post-type-ui" ),
	"item_published_privately" => __( "recipe published privately.", "custom-post-type-ui" ),
	"item_reverted_to_draft" => __( "recipe reverted to draft.", "custom-post-type-ui" ),
	"item_scheduled" => __( "recipe scheduled", "custom-post-type-ui" ),
	"item_updated" => __( "recipe updated.", "custom-post-type-ui" ),
	"parent_item_colon" => __( "Parent recipe:", "custom-post-type-ui" ),
];

$args = [
	"label" => __( "recipes", "custom-post-type-ui" ),
	"labels" => $labels,
	"description" => "",
	"public" => true,
	"publicly_queryable" => true,
	"show_ui" => true,
	"show_in_rest" => true,
	"rest_base" => "",
	"rest_controller_class" => "WP_REST_Posts_Controller",
	"has_archive" => true,
	"show_in_menu" => true,
	"show_in_nav_menus" => true,
	"delete_with_user" => false,
	"exclude_from_search" => false,
	"capability_type" => "post",
	"map_meta_cap" => true,
	"hierarchical" => false,
	"rewrite" => [ "slug" => "recipe", "with_front" => true ],
	"query_var" => true,
	"menu_icon" => "dashicons-carrot",
	"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ],
	"show_in_graphql" => false,
];

register_post_type( "bs_recipe", $args );
}

add_action( 'init', 'cptui_register_my_cpts_bs_recipe' );
