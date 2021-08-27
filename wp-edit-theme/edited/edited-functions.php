<?php
/*
Author: Takashi Funayama
URL: http://timsnavi.com/
*/
//jquery読み込み
function add_files() {
// WordPress本体のjquery.jsを読み込まない
wp_deregister_script('jquery');
// jQueryの読み込み
wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', "", "", false );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

//titleタグ
function wpdocs_theme_name_wp_title($title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
    global $page, $paged;
    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep"."|"." $site_description";
    }
    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= "$sep" . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );

//投稿内にショートコードでブログURLとテンプレートURLを引用
function shortcode_url() {
	return get_bloginfo('url');
}
add_shortcode('url', 'shortcode_url');

function get_template_dir() {
	return get_bloginfo('template_directory');
}
add_shortcode('template_dir', 'get_template_dir');

function shortcode_images() {
	ob_start();
	bloginfo('template_directory');
	$td .= ob_get_clean();
	return $td;
}
add_shortcode('img', 'shortcode_images');

//固定ページ内で特定のPHP(news)使用を許可
function my_php_Include($params = array()) {
	extract(shortcode_atts(array('file' => 'default'), $params));
	ob_start();
	include(STYLESHEETPATH . "/okunews.php");
	return ob_get_clean();
}
add_shortcode('call_php', 'my_php_Include');

//コンタクトフォーム内ショートコード
function the_required_image(){
    return get_bloginfo('template_directory');
}
//wpcf7_add_shortcode("contact_td","the_required_image");

//サイドバーウィジェット
register_sidebar( array(
     'name' => __( 'Side Widget' ),
     'id' => 'side-widget',
     'before_widget' => '<li class="widget-container">',
     'after_widget' => '</li>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );

register_sidebar( array(
     'name' => __( 'Footer Widget' ),
     'id' => 'footer-widget',
     'before_widget' => '<div class="widget-area"><ul><li class="widget-container">',
     'after_widget' => '</li></ul></div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );

//カスタムメニュー
//register_nav_menu('mainmenu', 'メインメニュー');
register_nav_menu('mainmenu01', 'メインメニュー01');
register_nav_menu('mainmenu02', 'メインメニュー02');
register_nav_menu('footer01', 'フッター01');
register_nav_menu('footer02', 'フッター02');
register_nav_menu('footer03', 'フッター03');

//オフィシャルサイト
function shortcode_portal_url() {
	return 'https://musclecorp.com/';
}
add_shortcode('portal_url', 'shortcode_portal_url');

//アイキャッチ
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(440, 330, true );

//スタイルシート
add_action( 'wp_enqueue_scripts', 'my_site_enqueue_styles' );
function my_site_enqueue_styles() {
	wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0' );
}

//固定ページのビジュアルエディットを非表示
add_filter( 'user_can_richedit', 'disable_visual_editor' );
function disable_visual_editor( $default ) {
  $screen = get_post_type();
  if ( $screen == 'page' ) {
    return false;
  } else {
    return $default;
  }
}

//　改行の時に自動的にPタグが挿入されるのを防ぐ
remove_filter('the_content', 'wpautop');
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * サイト内検索の範囲に、カテゴリー名、タグ名、を含める
 */
function custom_search($search, $wp_query) {
global $wpdb;

//サーチページ以外だったら終了
if (!$wp_query->is_search)
 return $search;

if (!isset($wp_query->query_vars))
 return $search;

// ユーザー名とか、タグ名・カテゴリ名も検索対象に
$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
 if ( count($search_words) > 0 ) {
   $search = '';
   foreach ( $search_words as $word ) {
     if ( !empty($word) ) {
       $search_word = $wpdb->escape("%{$word}%");
       $search .= " AND (
           {$wpdb->posts}.post_title LIKE '{$search_word}'
           OR {$wpdb->posts}.post_content LIKE '{$search_word}'
           OR {$wpdb->posts}.ID IN (
             SELECT distinct r.object_id
             FROM {$wpdb->term_relationships} AS r
             INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
             INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
             WHERE t.name LIKE '{$search_word}'
           OR t.slug LIKE '{$search_word}'
           OR tt.description LIKE '{$search_word}'
           )
       ) ";
     }
   }
 }

 return $search;
 }
 add_filter('posts_search','custom_search', 10, 2);


function change_posts_paging($query) {

// 管理画面やメインクエリーでない場合は除外
 if ( is_admin() || ! $query->is_main_query() ) {
   return;
 }
 // 検索結果ページ
 if ( $query->is_search() ) {
    // 公開されてる記事のみ検索
    $query->set( 'post_status', publish );
    // 投稿のみ検索
    $query -> set ('post_type', array('post', 'page', 'download', 'example', 'download_gearbox'));
    // 表示したくないカテゴリーID
    $query->set( 'category__not_in', 1 );
    //　表示したくない投稿ID。arrayで複数指定可。
    $query->set( 'post__not_in', array( 1, 2, 3, 4, 5 ) );
    //　検索結果の表示順
    $query->set( 'order', DESC );
   return;
  }
 }
 add_action( 'pre_get_posts', 'change_posts_paging' );

/**
 * contact-form-7関連
 */

//郵便番号入力で住所の自動入力用
wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );

//コンタクトフォーム７で確認用メールアドレス設定
function wpcf7_main_validation_filter( $result, $tag ) {
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
  if ( 'email' == $type || 'email*' == $type ) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)){
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
      } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}
add_filter( 'wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2 );

//contact-form-7プラグインにて電話番号チェック
add_filter('wpcf7_validate_tel',  'wpcf7_validate_tel', 11, 2);
add_filter('wpcf7_validate_tel*', 'wpcf7_validate_tel', 11, 2);
function wpcf7_validate_tel($result,$tag){
  $tag = new WPCF7_Shortcode($tag);
  $name = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
  // フォーム側のnameです
  if ($name === "your-phone") {
    // 半角数字のみ許可
    if(!preg_match("/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/", $value)) {
      $result->invalidate($tag, "半角数字ハイフン付き(例：00-0000-0000)で入力してください。");
    }
  }
  return $result;
}

//contact-form-7プラグインにて電話番号チェック
add_filter('wpcf7_validate_text',  'wpcf7_validate_post', 11, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_post', 11, 2);
function wpcf7_validate_post($result,$tag){
  $tag = new WPCF7_Shortcode($tag);
  $name = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
  // フォーム側のnameです
  if ($name === "your-zipcode") {
    // 半角数字のみ許可
    if(!preg_match("/^\d{3}\-\d{4}$/", $value)) {
      $result->invalidate($tag, "半角数字ハイフン付き(000-0000)で入力してくださ>い。");
    }
  }
  return $result;
}

//アップロードファイルのカスタマイズ
function arrow_upload_file_mimes($mimes) {
	//$mimes[]にファイルの拡張子 、イコールのあとにファイルの形式
	$mimes['zip'] = 'application/zip';
	return $mimes;
}
add_filter('upload_mimes','arrow_upload_file_mimes');
//アップロードファイル拡張子を判別して適正なmimeを与える
function my_check_filetype_and_ext( $types, $file, $filename ) {
	if ( strrchr( $filename, '.' ) === '.dxf' ) {
		$types['ext'] = 'dxf';
		$types['type'] = 'application/dxf';
	}
	return $types;
}
add_filter( 'wp_check_filetype_and_ext', 'my_check_filetype_and_ext', 10, 3 );
//アップロードファイルのカスタマイズ
function arrow_upload_file_dxf($mimes) {
	//$mimes[]にファイルの拡張子 、イコールのあとにファイルの形式
	$mimes['dxf'] = 'application/dxf';
	return $mimes;
}
add_filter('upload_mimes','arrow_upload_file_dxf');
@ini_set( 'upload_max_size' , '30M' );

//スマホ条件分岐
function is_mobile() {
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//header内不要なタグの削除
remove_action( 'wp_head', 'feed_links', 2 ); //サイト全体のフィード
remove_action( 'wp_head', 'feed_links_extra', 3 ); //その他のフィード
remove_action( 'wp_head', 'rsd_link' ); //Really Simple Discoveryリンク
remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writerリンク
//remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //前後の記事リンク
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //ショートリンク
remove_action( 'wp_head', 'rel_canonical' ); //canonical属性
remove_action( 'wp_head', 'wp_generator' ); //WPバージョン

//rss
remove_filter('do_feed_rss2', 'do_feed_rss2', 10);
function custom_feed_rss2(){
  $template_file = '/feed-rss2.php';
  load_template(get_template_directory() . $template_file);
}
add_action('do_feed_rss2', 'custom_feed_rss2', 10);


/*トップページ発売予定文字列*/

function loop_caption($info) {
//    if ($info == "title"){
//    echo "※出荷開始日";
//    }
//    elseif ($info == "product01"){
//    echo "クールマッスル3";
//    }
//    elseif ($info == "product02"){
//    echo "クールマッスル3+";
//    }
//    elseif ($info == "date01"){
//    echo "8/31";
//    }
//    elseif ($info == "date02"){
//    echo "9/30";
//    }
}

touch( get_stylesheet_directory().'/CM3-PC.php' );
touch( get_stylesheet_directory().'/CM3-MICON.php' );
touch( get_stylesheet_directory().'/CM3-IO.php' );