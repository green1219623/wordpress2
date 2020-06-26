<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}

add_action('after_setup_theme', 'my_setup');




/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600&family=Sawarabi+Mincho&display=swap', array(), '5.8.2', 'all');
    wp_enqueue_style('typekit', 'https://use.typekit.net/ihf0edi.css', array(), '5.8.2', 'all');
    wp_enqueue_style('my', get_template_directory_uri() . '/null/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('wow', get_template_directory_uri() . '/wow/css/libs/animate.css', array(), '1.0.0', 'all');
    wp_enqueue_script('wow', get_template_directory_uri() . '/wow/dist/wow.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('my', get_template_directory_uri() . '/JS/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/**
* メニューの登録
*
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
)
);
}
add_action('init', 'my_menu_init');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/**
* confirmページ遷移
*
*/
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://test-site.moepinthai.com/confirm/'; /* 遷移先のURL */
}, false );
</script>
EOD;
}



/**
* メニューの登録
*
*/
add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'header-menu' => 'Header Menu',
        )
    );
}

function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
    $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<div>' . '<span class="menu-item-description">' . $item->description . '</div>' . $item->title . '</span>' , $item_output );
    }
    return $item_output;
   }
   add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


   /**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

    if ( is_category() ) { // カテゴリーアーカイブの場合
    $title = '' . single_cat_title( '', false ) . '';
    } elseif ( is_tag() ) { // タグアーカイブの場合
    $title = '' . single_tag_title( '', false ) . '';
    } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
    $title = '' . post_type_archive_title( '', false ) . '';
    } elseif ( is_tax() ) { // タームアーカイブの場合
    $title = '' . single_term_title( '', false );
    } elseif ( is_author() ) { // 作者アーカイブの場合
    $title = '' . get_the_author() . '';
    } elseif ( is_date() ) { // 日付アーカイブの場合
    $title = '';
    if ( get_query_var( 'year' ) ) {
    $title .= get_query_var( 'year' ) . '年';
    }
    if ( get_query_var( 'monthnum' ) ) {
    $title .= get_query_var( 'monthnum' ) . '月';
    }
    if ( get_query_var( 'day' ) ) {
    $title .= get_query_var( 'day' ) . '日';
    }
    }
    return $title;
    };
    add_filter( 'get_the_archive_title', 'my_archive_title' );




