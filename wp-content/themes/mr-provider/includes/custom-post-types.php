<?php
//add_action( 'init', 'cp_change_post_object' );
// add_action( 'init', 'register_my_cpts' );
// add_action( 'init', 'register_my_taxes' );
/*
|-----------------------------------------------------------------------------------
| Add new post type
|-----------------------------------------------------------------------------------
|
*/
function register_my_cpts() {
	$labels = [
		"name" => __( "Products", "custom-post-type-ui" ),
		"singular_name" => __( "Product", "custom-post-type-ui" ),
		"menu_name" => __( "My Products", "custom-post-type-ui" ),
		"all_items" => __( "All Products", "custom-post-type-ui" ),
		"add_new" => __( "Add Product", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Product", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Product", "custom-post-type-ui" ),
		"new_item" => __( "New Product", "custom-post-type-ui" ),
		"view_item" => __( "View Product", "custom-post-type-ui" ),
		"view_items" => __( "View Products", "custom-post-type-ui" ),
		"search_items" => __( "Search Products", "custom-post-type-ui" ),
		"parent" => __( "Parent Product", "custom-post-type-ui" ),
		"featured_image" => __( "Featured Image for this product", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this product", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this product", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this product", "custom-post-type-ui" ),
		"archives" => __( "Product archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into product", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Uploaded to this product", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter products list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Products list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Products list", "custom-post-type-ui" ),
		"attributes" => __( "Products Attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Product", "custom-post-type-ui" ),
		"item_published" => __( "Product published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Product published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Product reverted to draft", "custom-post-type-ui" ),
		"item_scheduled" => __( "Product scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Product updated", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Product", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Products", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "This is product post type description.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "product", "with_front" => true ],
		"query_var" => true,
		// "menu_icon" => "/wp-content/uploads/icon.png",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "brand", "price" ],
	];

	register_post_type( "product", $args );
}

/*
|-----------------------------------------------------------------------------------
| Add new taxonomy
|-----------------------------------------------------------------------------------
|
*/
function register_my_taxes() {

    /**
     * Taxonomy - 1
     * 
     */
	$labels = [
		"name" => __( "Brands", "custom-post-type-ui" ),
		"singular_name" => __( "Brand", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Brands", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'brand', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "brand",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "brand", [ "post", "product" ], $args );


	/**
     * Taxonomy - 2
     * 
     */
	$labels = [
		"name" => __( "Prices", "custom-post-type-ui" ),
		"singular_name" => __( "Price", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Prices", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'price', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "price",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "price", [ "product" ], $args );
}


/*
|-----------------------------------------------------------------------------------
| Change dashboard Posts to News
|-----------------------------------------------------------------------------------
|
*/
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News';
        $labels->add_new_item = 'Add News';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
        $labels->all_items = 'All News';
        $labels->menu_name = 'News';
        $labels->name_admin_bar = 'News';
}
