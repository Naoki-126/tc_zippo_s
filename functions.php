<?php
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action("after_setup_theme","my_setup");


/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init() {
  wp_enqueue_style("font-awesome", "https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2", array(), "5.8.2", "all");
  wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array('jquery'), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");


/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

/**
 * 外観→メニューリスト表示
 */
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

// 表の横幅と高さを自動設定される機能を無効化する
function customize_tinymce_settings($mceInit) {
  $mceInit['table_resize_bars'] = false;
  $mceInit['object_resizing'] = "img";
  return $mceInit;
}
add_filter( 'tiny_mce_before_init', 'customize_tinymce_settings' ,0);

// 固定ページの画像呼び出しパスの簡略化
function imagepassshort($arg) {
  $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
  return $content;
}
add_action('the_content', 'imagepassshort');

//pタグ自動生成廃止
add_action('init', function() {
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_content', 'wpautop');
  });
  add_filter('tiny_mce_before_init', function($init) {
  $init['wpautop'] = false;
  // $init[‘apply_source_formatting’] = true;
  return $init;
  });

?>
