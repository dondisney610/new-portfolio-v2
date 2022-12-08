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