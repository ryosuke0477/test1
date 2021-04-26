<?php

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('styles', [ // 投稿タイプ名の定義
    'labels' => [
      'name'          => 'スタイル', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'styles',    // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublicにするか
    'has_archive'   => true, // アーカイブ機能ON/OFF
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
  ]);
}

register_post_type(
    'styles',
    // 'supports'に'thumbnail'を追記
    array('supports' => array('title','editor','thumbnail'))
);

// add_action('init', 'create_post_type');
// function create_post_type()
// {
//   register_post_type('styles', [
//     'labels' => [
//       'name'          => 'スタイル',
//       'singular_name' => 'styles',
//     ],
//     'public'        => true,
//     'has_archive'   => true,
//     'menu_position' => 5,
//     'show_in_rest'  => true,
//     array(
//       'supports' => array('title', 'thumbnail', 'editor')
//     )
//   ]);
// }
// function custom_template_include($template)
// {
//   if (is_single() && in_category('styles')) {
//     $new_template = locate_template(array('single-styles.php'));
//     if ('' != $new_template) {
//       return $new_template;
//     }
//   }
//   return $template;
// }
// add_filter('template_include', 'custom_template_include', 99);

?>