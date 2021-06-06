<?php
    add_action('init', function() {
    /* aaa */
    add_theme_support('title-tag');
    /* 投稿のサムネ機能を有効化する */
    add_theme_support('post-thumbnails');
});

/* カスタム投稿のnewsを追加する　*/
add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 
    'news',
        array(
            'labels' => array(
            'name' => __( 'news' ),
            'singular_name' => __( 'news' ),
            'menu_name' => __('ボニーズ全体のお知らせ'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
  register_post_type( 
    'about',
        array(
            'labels' => array(
            'name' => __( 'about' ),
            'singular_name' => __( 'about' ),
            'menu_name' => __('ボニーズについて'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
  register_post_type( 
    'sakaide',
        array(
            'labels' => array(
            'name' => __( 'sakaide' ),
            'singular_name' => __( 'sakaide' ),
            'menu_name' => __('坂出店ブログ'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
  register_post_type( 
    'takamatsu',
        array(
            'labels' => array(
            'name' => __( 'takamatsu' ),
            'singular_name' => __( 'takamatsu' ),
            'menu_name' => __('高松店について'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
  register_post_type( 
    'marugame',
        array(
            'labels' => array(
            'name' => __( 'marugame' ),
            'singular_name' => __( 'marugame' ),
            'menu_name' => __('丸亀店ブログ'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
  register_post_type( 
    'sakaide-news',
        array(
            'labels' => array(
            'name' => __( 'sakaide-news' ),
            'singular_name' => __( 'sakaide-news' ),
            'menu_name' => __('坂出店のお知らせ'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
  register_post_type( 
    'takamatsu-news',
        array(
            'labels' => array(
            'name' => __( 'takamatsu-news' ),
            'singular_name' => __( 'takamatsu-news' ),
            'menu_name' => __('高松店のお知らせ'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
  register_post_type( 
    'marugame-news',
        array(
            'labels' => array(
            'name' => __( 'marugame-news' ),
            'singular_name' => __( 'marugame-news' ),
            'menu_name' => __('丸亀店のお知らせ'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', "slug" ),
        'show_in_rest' => true,
      )
  );
}

/* アイキャッチ画像がなければ、標準画像を取得する　*/
function get_eyecatch() {
    if (has_post_thumbnail()):
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
    else:
        /* ない場合の画像の指定はプロジェクトによって変えてあげる */
        $img = array('https://boneedz.com/wp-content/uploads/2018/12/rogo3.jpg');

    endif;
       
    return $img;
}

// OGイメージの設定プログラム
    function meta_ogp() {

        if (is_front_page() || is_home() || is_singular() || is_archive()) { 
        // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
        $ogp_image = 'https://boneedz.com/wp-content/uploads/2018/12/rogo3.jpg';
        // Twitterのアカウント名 (@xxx)
        $twitter_site = '';
        // Twitterカードの種類（summary_large_image または summary を指定）
        $twitter_card = 'summary';
        // Facebook APP ID
        $facebook_app_id = '';
    
        /*初期設定 ここまで*/
        
        global $post;
        $ogp_title = 'パーソナルトレーニングスタジオ boneedz';
        $ogp_description = 'パーソナルトレーニングスタジオ boneedz';
        $ogp_url = 'https://boneedz.com/';
        $html = '';

        if (is_singular()) {
            // 記事＆固定ページ
            setup_postdata($post);
            $ogp_title = $post->post_title;
            $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
            $ogp_url = get_permalink();
            wp_reset_postdata();
        } elseif (is_front_page() || is_home()) {
            // トップページ
            $ogp_title = get_bloginfo('name');
            $ogp_description = get_bloginfo('description');
            $ogp_url = home_url();
        }
    
        // og:type
        $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
    
        // og:image
        if (is_singular() && has_post_thumbnail()) {
        $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        $ogp_image = $ps_thumb[0];
        }

        // 出力するOGPタグをまとめる
        $html = "\n";
        $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
        $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
        $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
        $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
        $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
        $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
        $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
        $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
        $html .= '<meta property="og:locale" content="ja_JP">' . "\n";
    
        if ($facebook_app_id != "") {
            $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
        }
        echo $html;
        }
}
// headタグ内にOGPを出力する
add_action('wp_head', 'meta_ogp');

/* デフォルト投稿タイプをリライトするアーカイブページの作成 */
function post_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_archive', 6, 2 );

/* 
カスタム投稿の個別ページに飛べない問題が発生したが、下記リンクのナレッジを参考にして解決した。
https://gray-code.com/blog/wordpress/how-to-repair-404page/ 
*/
global $wp_rewrite;
$wp_rewrite->flush_rules();


function original_pager($args = null){
    global $wp_query;
   
    $my_setting = array(
      'prev_text' => '',
      'next_text' => '',
      'first_text' => '',
      'last_text' => '',
      'visit_nth' => 5,
      'last_number' => true,
      'output' => 'echo',
    );

    if(is_array($args)) $my_setting = array_merge($my_setting,$args);
   
    //url関係
    $now_page_data = parse_url($_SERVER["REQUEST_URI"]);
    $base_url = preg_replace('/\/page\/.*/','/',$now_page_data['path']);
    $url_query = $now_page_data['query'] ? '?'.$now_page_data['query'] : '';
    $max_page = intval($wp_query->max_num_pages);
    $page_nth = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $last_page = "{$base_url}page/{$max_page}/{$url_query}";
   
    //次のページと前のページの取得
    $next_page = $my_setting['next_text'] ? get_next_posts_link($my_setting['next_text']) : 'hidden';
    $prev_page = $my_setting['prev_text'] ? get_previous_posts_link($my_setting['prev_text']) : 'hidden';
   
    //数字の左と右の表示数を設定
    if($my_setting['visit_nth']%2==0){
      $base_nth = $my_setting['visit_nth']/2 ;
    }else{
      $base_nth = ($my_setting['visit_nth'] - 1) / 2;
    }
   
    ////前
    if(($max_page - $page_nth) < $base_nth){
      if($base_nth * 2 - ($max_page - $page_nth) >= $page_nth){
        $mae = $page_nth-1;
      }else{
        $mae = $base_nth * 2 - ($max_page - $page_nth);
      }
    }else{
      if($base_nth >= $page_nth){
        $mae = $page_nth - 1;
      }else{
        $mae = $base_nth;
      }
    }
   
    ////後
    if($base_nth >= $page_nth){
      if($base_nth*2 - $mae >= $max_page - $page_nth){
        $ato = $max_page - $page_nth;
      }else{
        $ato = $base_nth*2 - $mae;
      }
    }else{
      if($base_nth >= $max_page - $page_nth){
        $ato = $max_page - $page_nth;
      }else{
        $ato = $base_nth;
      }
    }
   
    ////点々表示
    $key = false;
    if(($ato + $page_nth) < $max_page){
      $key = true;
    }
   
   
    $html = '<nav class="pager">';
   
    //最初
    if($my_setting['first_text']){
      if($page_nth !== 1){
        $html .= "<p class=\"first\" style=\"display: none\"><a href=\"{$base_url}{$url_query}\">{$my_setting['first_text']}</a></p>";
      }else{
        $html .= "<p class=\"first\"><span class=\"no-link\" style=\"display: none\">{$my_setting['first_text']}</span></p>";
      }
    }
   
    //前
    if($prev_page !== 'hidden' && $prev_page){
      $html .= "<p class=\"prev\">{$prev_page}</p>";
    }elseif(!$prev_page){
      $html .= "<p class=\"prev\"><span class=\"no-link\" style=\"display: none\">{$my_setting['prev_text']}</span></p>";
    }
   
    //数字関係
    $html .= '<p class="nth-box" style="display: none">';
   
    ////前の数字
    while($mae>0){
      $mae_nth = $page_nth - $mae;
      $html .= "<a href=\"{$base_url}page/{$mae_nth}/{$url_query}\">{$mae_nth}</a>";
      $mae--;
    }
   
    ////現在
    $html .= "<span class=\"current no-link\" style=\"display: none\">{$page_nth}</span>";
   
    ////後の数字
    $i = 1;
    while($ato>0){
      $ato_nth = $page_nth + $i;
      $html .= "<a class=\"next-link\" href=\"{$base_url}page/{$ato_nth}/{$url_query}\" style=\"display: none\">{$ato_nth}</a>";
      $ato--;
      $i++;
    }
   
    ////数字それ以上
    if($key && $my_setting['last_number']){
      $html .= <<<EOT
      <span class="tenten" style="display: none">...</span>
      <a href="{$base_url}page/{$max_page}/{$url_query}" class="last-nth" style=\"display: none\">{$max_page}</a>
  EOT;
    }
   
    $html .= "</p>";
   
    //次
    if($next_page !== 'hidden' && $next_page){
      $html .= "<p class=\"next\">{$next_page}</p>";
    }elseif(!$next_page){
      $html .= "<p class=\"next\"><span class=\"no-link\" style=\"display: none\">{$my_setting['next_text']}</span></p>";
    }
   
    //最後
    if($my_setting['last_text']){
      if($page_nth !== $max_page){
        $html .= "<p class=\"last\" style=\"display: none\"><a href=\"{$last_page}\">{$my_setting['last_text']}</a></p>";
      }else{
        $html .= "<p class=\"last\"><span class=\"no-link\" style=\"display: none\">{$my_setting['last_text']}</span></p>";
      }
    }
   
    $html .= "</nav>";
   
    if($my_setting['output'] == 'echo'){
      echo $html;
      return;
    }else{
      return $html;
    }
  }

  // 人気記事出力用関数
  // 参照先 https://cage.tokyo/wordpress/wordpress-ranking/
  function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 View";
    }
    return $count.' Views';
  }
  // 記事viewカウント用関数
  function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
    }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
    }
  }
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

  //クローラーのアクセス判別
  function is_bot() {
    $ua = $SERVER['HTTP_USER_AGENT'];
    $bot = array(
      "googlebot",
      "msnbot",
      "yahoo"
    );
    foreach( $bot as $bot ) {
      if (stripos( $ua, $bot ) !== false){
        return true;
      }
    }
    return false;
  }