<?php
// style.cssを読み込む
function read_enqueue_styles()
{
	wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'read_enqueue_styles');

// 投稿画面でアイキャッチ画像を設定できるようにする
function custom_theme_setup()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');