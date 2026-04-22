<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="l-header">
  <div class="l-header__inner">
    <div class="l-header__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/header-logo.png" alt="トラベルアイランド" />
      </a>
    </div>

    <div class="l-header__hamburger-wrap">
      <button class="l-header__hamburger js-hamburger" aria-label="メニューを開く">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

    <nav class="l-header__nav js-nav">
      <ul class="l-header__nav-list">
        <li><a href="<?php echo esc_url( home_url( '/#trouble' ) ); ?>" class="l-header__nav-link icon-heart">お悩みごと</a></li>
        <li><a href="#" class="l-header__nav-link icon-check js-popup-btn">プラン診断</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>" class="l-header__nav-link icon-leaf">安心の理由</a></li>
        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>" class="l-header__nav-link icon-bag">エピソード</a></li>
        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'plan' ) ); ?>" class="l-header__nav-link icon-search">おすすめプラン</a></li>
        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="l-header__nav-link icon-pen">コラム</a></li>
      </ul>
    </nav>
  </div>
</header>
