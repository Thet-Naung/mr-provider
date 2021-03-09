<?php
add_action( 'init', 'cp_change_post_object' );
add_action( 'init', 'create_post_type' );
add_action( 'init', 'create_tax' );
/*
|-----------------------------------------------------------------------------------
| Add new post type
|-----------------------------------------------------------------------------------
|
*/
function create_post_type(){
	register_post_type('service',
		array(
			'labels' => array(
				'name' => __('Services'),
				'singular_name' => __('Service')
			),
			//'taxonomies'  => array( 'product-type', 'product-category' ),
			'public' => true,
			'has_archive' => true,
			'show_in_rest'=> true,
			//'menu_icon' =>'dashicons-products',
			'rewrite' => array('slug' => 'service'),
			'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail')
		)
	);
	register_post_type('product',
		array(
			'labels' => array(
				'name' => __('Products'),
				'singular_name' => __('Product')
			),
			//'taxonomies'  => array( 'product-type', 'product-category' ),
			'public' => true,
			'has_archive' => true,
			'show_in_rest'=> true,
			//'menu_icon' =>'dashicons-products',
			'rewrite' => array('slug' => 'product'),
			'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail')
		)
	);
}
function create_tax(){

    register_taxonomy('product-type', 'product', array(
		'label' =>__('Product Types'),
        'rewrite'      => array('slug' => 'product-type'),
		'hierarchical' => true,
		'show_in_rest'=> true,
	));

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
