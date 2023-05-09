<?php 
/*~~~~~~~~~~~~~~~~~~~~~~~~~~
Theme Name : shidonotheme
~~~~~~~~~~~~~~~~~~~~~~~~~~*/


function post_has_archive($args, $post_type){
    if('post'== $post_type){
      $args['rewrite']=true;
      $args ["label"] = 'ブログ投稿一覧'; 
      $args['has_archive']='blog'; 
    }
    return $args;
  }
  
  add_filter('register_post_type_args', 'post_has_archive', 10, 2);


function setup_theme() {
    add_theme_support('post-thumbnails');
    }
add_action('after_setup_theme', 'setup_theme');
?>
