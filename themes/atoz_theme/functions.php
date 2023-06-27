<?php


//ビジュアルエディタに切り替えで、空の span タグや i タグが消されるのを防止

if ( ! function_exists('tinymce_init') ) {
    function tinymce_init( $init ) {
        $init['verify_html'] = false; // 空タグや属性なしのタグを消させない
        $initArray['valid_children'] = '+body[style], +div[div|span|a], +span[span]'; // 指定の子要素を消させない
        return $init;
    }
    add_filter( 'tiny_mce_before_init', 'tinymce_init', 100 );
}

//ページ単位で、グーテンベルグを無効に
function top_disable_block_editor($use_block_editor, $post){
$post_type = $post->post_type;
$post_name = $post->post_name;

// 特定の固定ページのみブロックエディタを有効化
// ↓本番環境とテスト環境でIDが違う場合は注意！！！！

// ▼テスト環境の例
// if($post->ID === 13 | $post->ID === 2228 | $post->ID === 2230 | $post->ID === 2234) return false;
// return $use_block_editor;
// }
if($post->ID === 13 | $post->ID === 2266 | $post->ID === 2268 | $post->ID === 2273) return false;
return $use_block_editor;
}
add_filter( 'use_block_editor_for_post', 'top_disable_block_editor', 10, 2 );

//クラッシクエディタ用のcss
function my_custom_editor_style() {
add_editor_style( '/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'my_custom_editor_style' );

//shortcode 外部ファイルの読み込み
function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(get_stylesheet_directory(). "$file.php");
    return ob_get_clean();
   }
   add_shortcode('myphp', 'my_php_Include');



/* ====================================================
// 有効化
// ===================================================*/
// 自動更新
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );

add_theme_support( 'automatic-feed-links' );
add_theme_support('post-thumbnails');
add_theme_support( 'editor-styles' );
add_theme_support( 'wp-block-styles' );
add_post_type_support( 'page', 'excerpt' );


/* ====================================================
// 無効化
// ===================================================*/
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'index_rel-link' );
remove_action( 'wp_head', 'adjacent_posts_rel-link_wp_head');
remove_action( 'wp_head', 'parent_post_rel-link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel-link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra',3);
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );


/* ====================================================
// 画像サイズ
// ===================================================*/
add_image_size( 'post-thumb', 300, 230, true );
add_image_size( 'post-thumb-large', 900, 675, true );
add_image_size( 'heroimage', 1280, 400, true );

add_image_size( 'c-logo', 300, 150, false );
add_image_size( 'c-image', 1620, 800, false );



/* ====================================================
// ウィジェット
// ===================================================*/
function az_widgets_init() {
	register_sidebar( array(
						'name' => 'サイドバー',
						'id' => 'sidebar',
						'before_widget' => '<div>',
						'after_widget' => '</div>',
						'before_title' => '<h3>',
						'after_title' => '</h3>',
					) );
	}
add_action( 'widgets_init', 'az_widgets_init' );


/* ====================================================
// ACFオプションページ設定
// ===================================================*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'  => 'AtoZ設定',
		'menu_title'  => 'AtoZ設定',
		'menu_slug'   => 'site-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false,
	));
}


/* ====================================================
// カスタムメニュー
// ===================================================*/
function az_register_menus() {
	register_nav_menus(
		array(
			'main menu' => 'グローバルナビ',
			'sp menu' => 'グローバルナビ（スマホ追加分）',
			'footer menu' => 'フッターナビ'
			)
	);
}
add_action( 'init', 'az_register_menus' );


/* ====================================================
// Body classにスラッグを表示
// ===================================================*/
function pagename_class($classes = '') {
	if (is_page()) {
		$page = get_page(get_the_ID());
		$classes[] = "page-" . $page->post_name;
	}
	return $classes;
}
add_filter('body_class','pagename_class');


/* ====================================================
// 記事一覧にアイキャッチ画像を表示
// ===================================================*/
function manage_posts_columns($columns) {
  $columns['thumbnail'] = 'アイキャッチ';
  return $columns;
}
function add_column($column_name, $post_id) {
  if ( $column_name == 'thumbnail') {
    $thumb = get_the_post_thumbnail($post_id, array(60,60), 'thumbnail');
  }
  if ( isset($thumb) && $thumb ) {
    echo $thumb;
  }
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );







function aztheme_block_editor_styles() {
    wp_enqueue_style( 'aztheme-block-editor-styles', get_theme_file_uri( '/css/editor-style.css' ), false, '1.0', 'all' );
}

add_action( 'enqueue_block_editor_assets', 'aztheme_block_editor_styles' );




?>