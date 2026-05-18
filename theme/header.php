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
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/header-logo.png"
                        alt="トラベルアイランド" />
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
                <!-- PC用ナビリスト -->
                <ul class="l-header__nav-list">
                    <li><a href="<?php echo esc_url( home_url( '/#trouble' ) ); ?>"
                            class="l-header__nav-link icon-heart">お悩みごと</a></li>
                    <li><a href="#" class="l-header__nav-link icon-check js-popup-btn">プラン診断</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>"
                            class="l-header__nav-link icon-leaf">安心の理由</a></li>
                    <li><a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>"
                            class="l-header__nav-link icon-voice">お客様の声</a></li>
                    <li><a href="<?php echo esc_url( get_post_type_archive_link( 'plan' ) ); ?>"
                            class="l-header__nav-link icon-search">おすすめプラン</a></li>
                    <li><a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>"
                            class="l-header__nav-link icon-pen">コラム</a></li>
                </ul>

                <!-- スマホ用フルメニュー -->
                <div class="l-header__sp-menu">
                    <ul class="l-header__sp-grid">
                        <li class="l-header__sp-grid-item">
                            <a href="<?php echo esc_url( home_url( '/#trouble' ) ); ?>" class="l-header__sp-grid-btn">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/menu-icon01.svg"
                                    alt="" />
                                <span>お悩みごと</span>
                            </a>
                        </li>
                        <li class="l-header__sp-grid-item">
                            <a href="#" class="l-header__sp-grid-btn js-popup-btn">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/menu-icon02.svg"
                                    alt="" />
                                <span>プラン診断</span>
                            </a>
                        </li>
                        <li class="l-header__sp-grid-item">
                            <a href="<?php echo esc_url( home_url( '/#features' ) ); ?>" class="l-header__sp-grid-btn">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/menu-icon03.svg"
                                    alt="" />
                                <span>安心の理由</span>
                            </a>
                        </li>
                        <li class="l-header__sp-grid-item">
                            <a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>"
                                class="l-header__sp-grid-btn">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/menu-icon09.svg"
                                    alt="" />
                                <span>お客様の声</span>
                            </a>
                        </li>
                        <li class="l-header__sp-grid-item">
                            <a href="<?php echo esc_url( get_post_type_archive_link( 'plan' ) ); ?>"
                                class="l-header__sp-grid-btn">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/menu-icon05.svg"
                                    alt="" />
                                <span>おすすめプラン</span>
                            </a>
                        </li>
                        <li class="l-header__sp-grid-item">
                            <a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>"
                                class="l-header__sp-grid-btn">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/menu-icon06.svg"
                                    alt="" />
                                <span>コラム</span>
                            </a>
                        </li>
                    </ul>

                    <div class="l-header__sp-cta-area">
                        <div class="l-header__sp-cta-row">
                            <a href="#" class="l-header__sp-cta-banner js-popup-btn">
                                <div class="l-header__sp-cta-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/cta-banner01.jpg"
                                        alt="" />
                                </div>
                                <div class="l-header__sp-cta-content">
                                    <span class="l-header__sp-cta-sub">おすすめ</span>
                                    <span class="l-header__sp-cta-main">プラン診断</span>
                                </div>
                                <div class="l-header__sp-cta-arrow"></div>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="l-header__sp-cta-banner">
                                <div class="l-header__sp-cta-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/cta-banner02.jpg"
                                        alt="" />
                                </div>
                                <div class="l-header__sp-cta-content">
                                    <span class="l-header__sp-cta-sub">かんたん</span>
                                    <span class="l-header__sp-cta-main">無料相談</span>
                                </div>
                                <div class="l-header__sp-cta-arrow"></div>
                            </a>
                        </div>
                        <a href="tel:0767-53-7744" class="l-header__sp-tel">
                            <p class="l-header__sp-tel-sub">お困りごとなどお気軽にご相談ください</p>
                            <p class="l-header__sp-tel-number">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/tel-icon.svg"
                                    alt="" />
                                0767-53-7744
                            </p>
                        </a>
                    </div>

                    <div class="l-header__sp-subnav">
                        <a href="<?php echo esc_url( home_url( '/#info' ) ); ?>">お知らせ</a>
                        <span class="l-header__sp-subnav-divider"></span>
                        <a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">よくあるご質問</a>
                        <span class="l-header__sp-subnav-divider"></span>
                        <a href="<?php echo esc_url( home_url( '/#message' ) ); ?>">会社案内</a>
                    </div>

                    <div class="l-header__sp-info">
                        <p>
                            トラベル愛ランド株式会社<br />
                            〒926-0811 石川県七尾市御祓町1番地 パトリア1階
                        </p>
                        <p><a href="tel:0767-53-7744">TEL: 0767-53-7744</a></p>
                        <a href="https://maps.app.goo.gl/8zB4VtnX8BrBKz6S8" target="_blank" rel="noopener noreferrer"
                            class="l-header__sp-map">Google Map</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>