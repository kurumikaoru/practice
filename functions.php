<?php

function mytheme_setup(){

  // Cのcssを有効化
  add_theme_support('wp-block-styles');

  // 縦横比を維持したレスポンシブを有効化
  add_theme_support('responsive-embeds');

  // EのCEEを有効化＆エディタに読み込み
  add_theme_support('editor-styles');
  add_editor_style('esitor-style.css');

  // ページのタイトルを有効化
  add_theme_support('title-tag');

  // link style scriptのhtml5を有効化
  add_theme_support('html5',array(
    'style',
    'script'
  ));
  // 全幅・幅広を有効化
 add_theme_support('align-wide');

}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue(){

  // DテーマのCSSを読み込み
  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
  );

  // Google Fontsを読み込み
  wp_enqueue_style(
    'myfonts',
    'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap',
    array(),
    null
  );

    wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

?>