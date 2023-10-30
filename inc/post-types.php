<?php
//post types
function solution_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Solutions', 'Solutions', 'ruggedrobotics' ),
        'singular_name'       => _x( 'Solutions', 'Solutions', 'ruggedrobotics' ),
        'menu_name'           => __( 'Solutions', 'ruggedrobotics' ),
        'parent_item_colon'   => __( 'Parent Solution', 'ruggedrobotics' ),
        'all_items'           => __( 'All Solution', 'ruggedrobotics' ),
        'view_item'           => __( 'View Solution', 'ruggedrobotics' ),
        'add_new_item'        => __( 'Add New Solution', 'ruggedrobotics' ),
        'add_new'             => __( 'Add New', 'ruggedrobotics' ),
        'edit_item'           => __( 'Edit Solution', 'ruggedrobotics' ),
        'update_item'         => __( 'Update Solution', 'ruggedrobotics' ),
        'search_items'        => __( 'Search Solution', 'ruggedrobotics' ),
        'not_found'           => __( 'Not Found', 'ruggedrobotics' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ruggedrobotics' ),
    );
      
// Set other options for Custom Post Type
      
    $solutionArgs = array(
        'label'               => __( 'Solutions', 'ruggedrobotics' ),
        'description'         => __( 'Solutions news and reviews', 'ruggedrobotics' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ), 
        'taxonomies'          => array( 'solution_category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
      
    // Registering your Custom Post Type
    register_post_type( 'solutions', $solutionArgs );
    /*****/

    //register Solution Category texonomy
    $labelsSolCategory = array(
    'name' => _x( 'Category', 'Category' ),
    'singular_name' => _x( 'Category', 'Category' ),
    'search_items' =>  __( 'Search Category' ),
    'all_items' => __( 'All Category' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Category' ),
  );    
  
  // Now register the taxonomy
  register_taxonomy('solution_category',array('solutions'), array(
    'hierarchical' => true,
    'labels' => $labelsSolCategory,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'solution-category' ),
  ));
/****/

//register case study post type
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Case Study', 'Case Study', 'ruggedrobotics' ),
        'singular_name'       => _x( 'Case Study', 'Case Study', 'ruggedrobotics' ),
        'menu_name'           => __( 'Case Study', 'ruggedrobotics' ),
        'parent_item_colon'   => __( 'Parent Case Study', 'ruggedrobotics' ),
        'all_items'           => __( 'All Case Study', 'ruggedrobotics' ),
        'view_item'           => __( 'View Case Study', 'ruggedrobotics' ),
        'add_new_item'        => __( 'Add New Case Study', 'ruggedrobotics' ),
        'add_new'             => __( 'Add New', 'ruggedrobotics' ),
        'edit_item'           => __( 'Edit Case Study', 'ruggedrobotics' ),
        'update_item'         => __( 'Update Case Study', 'ruggedrobotics' ),
        'search_items'        => __( 'Search Case Study', 'ruggedrobotics' ),
        'not_found'           => __( 'Not Found', 'ruggedrobotics' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ruggedrobotics' ),
    );
      
// Set other options for Custom Post Type
      
    $caseStudyArgs = array(
        'label'               => __( 'Case Study', 'ruggedrobotics' ),
        'description'         => __( 'Case Study news and reviews', 'ruggedrobotics' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ), 
        //'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );
      
    // Registering your Custom Post Type
    register_post_type( 'case_studies', $caseStudyArgs );
    /*****/

}
add_action( 'init', 'solution_post_type', 0 );
/****/

function rugged_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Resources';
    $submenu['edit.php'][5][0] = 'Resources';
    $submenu['edit.php'][10][0] = 'Add Resources';
    echo '';
}
function rugged_change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Resources';
        $labels->singular_name = 'Resource';
        $labels->add_new = 'Add Resource';
        $labels->add_new_item = 'Add Resource';
        $labels->edit_item = 'Edit Resource';
        $labels->new_item = 'Resource';
        $labels->view_item = 'View Resource';
        $labels->search_items = 'Search Resources';
        $labels->not_found = 'No Resources found';
        $labels->not_found_in_trash = 'No Resources found in Trash';
        $labels->name_admin_bar = 'Add Resource';
}
add_action( 'init', 'rugged_change_post_object_label' );
add_action( 'admin_menu', 'rugged_change_post_menu_label' );
/****/

function add_view_count_column($columns) {
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'date') {
            $new_columns['casestudy_custom_count'] = 'View Count';
        }
    }

    return $new_columns;
}
//add_filter('manage_case_studies_posts_columns', 'add_view_count_column');
/****/


function display_view_count_column($column_name, $post_id) {
    if ($column_name == 'casestudy_custom_count') {
        $casestudy_custom_count = get_post_meta($post_id, 'casestudy_custom_count', true);
        echo (int)$casestudy_custom_count;
    }
}
//add_action('manage_case_studies_posts_custom_column', 'display_view_count_column', 10, 2);
/****/

function custom_post_type_columns($columns) {
    $date = $columns['date'];
    unset($columns['date']);

    // Add 'View Count' column before 'Date' column
    $columns['casestudy_custom_count'] = 'Views';
    $columns['date'] = $date;

    return $columns;
}
add_filter('manage_case_studies_posts_columns', 'custom_post_type_columns');

// Populate the custom column with data
function custom_post_type_custom_column($column, $post_id) {
    if ($column === 'casestudy_custom_count') {
        // Replace 'view_count' with the actual post meta key you're using
        $casestudy_custom_count = get_post_meta($post_id, 'casestudy_custom_count', true);
        echo esc_html($casestudy_custom_count);
    }
}
add_action('manage_case_studies_posts_custom_column', 'custom_post_type_custom_column', 10, 2);