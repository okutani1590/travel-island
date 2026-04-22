<?php

function travel_island_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

    register_nav_menus( [
        'primary' => 'メインナビゲーション',
        'footer'  => 'フッターナビゲーション',
    ] );
}
add_action( 'after_setup_theme', 'travel_island_setup' );

function travel_island_enqueue() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'travel-island-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [ 'google-fonts' ],
        '1.0.0'
    );

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        [],
        null,
        false
    );
    wp_enqueue_script(
        'travel-island-option',
        get_template_directory_uri() . '/assets/js/option.js',
        [],
        '1.0.0',
        false
    );
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js',
        [ 'gsap' ],
        null,
        true
    );
    wp_enqueue_script(
        'travel-island-animation',
        get_template_directory_uri() . '/assets/js/animation.js',
        [ 'gsap', 'gsap-scrolltrigger' ],
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'travel_island_enqueue' );

function travel_island_register_cpts() {
    register_post_type( 'plan', [
        'labels' => [
            'name'          => 'おすすめプラン',
            'singular_name' => 'プラン',
            'add_new_item'  => 'プランを追加',
            'edit_item'     => 'プランを編集',
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-palmtree',
        'supports'     => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'rewrite'      => [ 'slug' => 'plan' ],
        'show_in_rest' => true,
    ] );

    register_post_type( 'column', [
        'labels' => [
            'name'          => 'コラム',
            'singular_name' => 'コラム記事',
            'add_new_item'  => 'コラムを追加',
            'edit_item'     => 'コラムを編集',
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-admin-post',
        'supports'     => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'rewrite'      => [ 'slug' => 'column' ],
        'show_in_rest' => true,
    ] );

    register_post_type( 'voice', [
        'labels' => [
            'name'          => 'お客様の声',
            'singular_name' => 'お客様の声',
            'add_new_item'  => 'お客様の声を追加',
            'edit_item'     => 'お客様の声を編集',
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-testimonial',
        'supports'     => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'rewrite'      => [ 'slug' => 'voice' ],
        'show_in_rest' => true,
    ] );

    register_taxonomy( 'plan_tag', 'plan', [
        'label'        => 'プランタグ',
        'public'       => true,
        'hierarchical' => false,
        'rewrite'      => [ 'slug' => 'plan-tag' ],
        'show_in_rest' => true,
    ] );

    register_taxonomy( 'plan_level', 'plan', [
        'label'        => '介助レベル',
        'public'       => true,
        'hierarchical' => true,
        'rewrite'      => [ 'slug' => 'plan-level' ],
        'show_in_rest' => true,
    ] );

    register_taxonomy( 'column_category', 'column', [
        'label'        => 'コラムカテゴリー',
        'public'       => true,
        'hierarchical' => true,
        'rewrite'      => [ 'slug' => 'column-category' ],
        'show_in_rest' => true,
    ] );

    register_taxonomy( 'voice_tag', 'voice', [
        'label'        => '旅行タグ',
        'public'       => true,
        'hierarchical' => false,
        'rewrite'      => [ 'slug' => 'voice-tag' ],
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'travel_island_register_cpts' );

function travel_island_get_level_icons( int $level ): string {
    $dir  = get_template_directory_uri() . '/assets/img/common/';
    $html = '';
    for ( $i = 1; $i <= 4; $i++ ) {
        $src   = $i <= $level ? $dir . 'level-icon_on.svg' : $dir . 'level-icon_off.svg';
        $html .= '<img src="' . esc_url( $src ) . '" alt="" width="14" height="18" />';
    }
    return $html;
}
