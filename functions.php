<?php
/*
=================================
    theme support functions
=================================
 */
add_theme_support('post-thumbnails');
add_theme_support('html5',array('search_form'));
add_theme_support( 'post-formats', array('aside','image','quote','video') );
add_theme_support('custom-header');
add_theme_support('custom-background');

/*
=================================
         activite menus
=================================
*/
function awesome_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary','header navigation');
  register_nav_menu('secondary','footer navigation');
}
add_action('init','awesome_theme_setup');


/*
=================================
        sidebar function
=================================
 */
 function awesome_widget_setup(){
   register_sidebar(array(
       'name'         => 'sidebar',
       'id'           => 'right-sidebar',
       'class'        => 'custom',
       'description'  => 'standar sidebar',
       'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
       'after_widget' =>'</aside>',
       'before_title' =>'<h2 id="" class="widget_title">',
       'after_title'  =>'</h2>',
   ));
 }
 add_action('widgets_init','awesome_widget_setup');


 /*
 =================================
         include file
 =================================
  */

  /*
  require get_template_directory(). '/inc/walker.php';
  require get_template_directory(). '/inc/function-admin.php';
  require get_template_directory(). '/inc/enqueue.php';
  require get_template_directory(). '/inc/theme-support.php';
  require get_template_directory(). '/inc/custom-post-type.php';
  */


  /*
  =================================
          custom post type
  =================================
   */


  function awesome_custom_post_type (){
     $labels = array(
       'name' => 'Portfolio',
       'singular_name' => 'Portfolio',
       'add_new' => 'Add Item',
       'all_items' => 'All Items',
       'add_new_item' => 'Add Item',
       'new_item' => 'New Item',
       'view_item' => 'Vieu Item',
       'search_item' => 'Search Portfolio',
       'not_found' => 'No items found',
       'not_found_in_trash' => 'No items found in trash',
       'parent_item_colon' => 'Parent Item'
     );
     $args = array(
       'labels' => $labels,
       'public' => true,
       'has_archive' => true,
       'publicity_queryable' => true,
       'query_var' => true,
       'rewrite' => true,
       'capability_type' => 'post',
       'hierachical' => false,
       'supports' => array(
         'title',
         'editor',
         'excerpt',
         'thumbnail',
         'revisions',
       ),
       'taxonomies' => array('category', 'post_tag'),
       'menu_position' => 5,
       'exclude_from_search' => false
     );
     register_post_type('portfolio', $args);
   }
   add_action('init', 'awesome_custom_post_type');





?>
