<?php 
function university_post_types(){
    //Campus Post Type
    register_post_type('campus',array(
      'show_in_rest'=> true,
      'supports'=> array('title','editor','excerpt'),
      'rewrite' => array('slug' =>'campuses'),
      'has_archive' => true,
      'public'=>true,
      'labels'=> array (
        'name' => 'Campuses',
        'add_new_item' => 'Add New Campus',
        'edit_item' => 'Edit Campus',
        'all_items' => 'All Campuses'
      ),
      'menu_icon' =>  'dashicons-location-alt'
      ));
  
  //Event Post Type
  register_post_type('event',array(
    'show_in_rest'=> true,
    'supports'=> array('title','editor','excerpt'),
    'rewrite' => array('slug' =>'events'),
    'has_archive' => true,
    'public'=>true,
    'labels'=> array (
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events'
    ),
    'menu_icon' =>  'dashicons-calendar'
    ));
  //program Post Type
  register_post_type('program',array(
    'show_in_rest'=> true,
    'supports'=> array('title','editor'),
    'rewrite' => array('slug' =>'programs'),
    'has_archive' => true,
    'public'=>true,
    'labels'=> array (
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs'
    ),
    'menu_icon' =>  'dashicons-awards'
    
  ));
  //professor Post Type
  register_post_type('professor',array(
    'show_in_rest'=> true,
    'supports'=> array('title','editor','thumbnail'),
    'public'=>true,
    'labels'=> array (
      'name' => 'professors',
      'add_new_item' => 'Add New professor',
      'edit_item' => 'Edit professor',
      'all_items' => 'All professors'
    ),
    'menu_icon' =>  'dashicons-welcome-learn-more'
    
  ));
}
add_action('init','university_post_types');