<?php

//CSS,JSの読み込み
function my_script_init(){
  wp_enqueue_style('style-style',get_template_directory_uri().'/style.css',array(),'1.0.0','all');
  wp_enqueue_style('style-fontawesome','https://use.fontawesome.com/releases/v5.0.8/css/all.css',array(),'1.0.0','all');
  wp_enqueue_script('script-jquery','https://code.jquery.com/jquery-3.6.0.min.js',array(),'1.0.0','all');
  wp_enqueue_script('script-splitting','https://unpkg.com/splitting/dist/splitting.min.js',array(),'1.0.0','all');
  wp_enqueue_script('script-gasp','https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js',array(),'1.0.0','all');
  wp_enqueue_script('script-scrolltrigger','https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js',array(),'1.0.0','all');
  wp_enqueue_script('script-script',get_template_directory_uri().'/js/script.js',array(),'1.0.0','all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

//ヘッダーとフッターのナビ
register_nav_menus(
  array(
    'place_header' => 'ヘッダーメニュー',
    'place_footer' => 'フッターメニュー',
  )
  );

//カテゴリ名を取得する関数を登録
add_action( 'rest_api_init', 'register_category_name' );

function register_category_name() {
//register_rest_field関数を用いget_category_name関数からカテゴリ名を取得し、追加する
    register_rest_field( 'post',
        'category_name',
        array(
            'get_callback'    => 'get_category_name'
        )
    );
}

//$objectは現在の投稿の詳細データが入る
function get_category_name( $object ) {
    $category = get_the_category($object[ 'id' ]);
    $cat_name = $category[0]->cat_name;
    return $cat_name;
}