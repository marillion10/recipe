<?php

function cptui_register_my_taxes_bs_recipe_tag() {

	/**
	 * Taxonomy: recipe tags.
	 */

	$labels = [
		"name" => __( "recipe tags", "custom-post-type-ui" ),
		"singular_name" => __( "recipe tag", "custom-post-type-ui" ),
		"menu_name" => __( "Recipe tags", "custom-post-type-ui" ),
		"all_items" => __( "All recipe tags", "custom-post-type-ui" ),
		"edit_item" => __( "Edit recipe tag", "custom-post-type-ui" ),
		"view_item" => __( "View recipe tag", "custom-post-type-ui" ),
		"update_item" => __( "Update recipe tag name", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new recipe tag", "custom-post-type-ui" ),
		"new_item_name" => __( "New recipe tag name", "custom-post-type-ui" ),
		"parent_item" => __( "Parent recipe tag", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent recipe tag:", "custom-post-type-ui" ),
		"search_items" => __( "Search recipe tags", "custom-post-type-ui" ),
		"popular_items" => __( "Popular recipe tags", "custom-post-type-ui" ),
		"separate_items_with_commas" => __( "Separate recipe tags with commas", "custom-post-type-ui" ),
		"add_or_remove_items" => __( "Add or remove recipe tags", "custom-post-type-ui" ),
		"choose_from_most_used" => __( "Choose from the most used recipe tags", "custom-post-type-ui" ),
		"not_found" => __( "No recipe tags found", "custom-post-type-ui" ),
		"no_terms" => __( "No recipe tags", "custom-post-type-ui" ),
		"items_list_navigation" => __( "recipe tags list navigation", "custom-post-type-ui" ),
		"items_list" => __( "recipe tags list", "custom-post-type-ui" ),
		"back_to_items" => __( "Back to recipe tags", "custom-post-type-ui" ),
	];


	$args = [
		"label" => __( "recipe tags", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'bs_recipe_tag', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "bs_recipe_tag",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "bs_recipe_tag", [ "bs_recipe" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_bs_recipe_tag' );
