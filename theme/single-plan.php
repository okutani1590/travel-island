<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<?php while ( have_posts() ) : the_post();
    $level_terms = wp_get_post_terms( get_the_ID(), 'plan_level' );
    $level_term  = ! empty( $level_terms ) && ! is_wp_error( $level_terms ) ? $level_terms[0] : null;
    $level_label = $level_term ? $level_term->name : '自立';
    $season      = get_post_meta( get_the_ID(), 'plan_season', true );
    $style       = get_post_meta( get_the_ID(), 'plan_style', true );
    $area        = get_post_meta( get_the_ID(), 'plan_area', true );
    $point       = get_post_meta( get_the_ID(), 'plan_point', true );
    $price       = get_post_meta( get_the_ID(), 'plan_price', true );
    $tags        = wp_get_post_terms( get_the_ID(), 'plan_tag', [ 'fields' => 'names' ] );
?>

<main id="page" class="single">
    <section class="c-page-header">
        <div class="l-inner">
            <nav class="c-page-header__breadcrumb">
                <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
                <span><a href="<?php echo esc_url( get_post_type_archive_link( 'plan' ) ); ?>">おすすめプラン</a></span>
                <span><?php the_title(); ?></span>
            </nav>
        </div>
    </section>

    <article class="p-single-plan">
        <div class="l-inner">
            <div class="p-plan-hero">
                <div class="p-plan-hero__image">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
                    <?php else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg"
                        alt="" />
                    <?php endif; ?>
                </div>
                <div class="p-plan-hero__content">
                    <h1 class="p-plan-hero__title"><?php the_title(); ?></h1>
                    <div class="p-plan-hero__badges">
                        <p>対象介助レベル</p>
                        <ul>
                            <li>
                                <span
                                    class="p-plan-hero__badge p-plan-hero__badge--yellow"><?php echo esc_html( $level_label ); ?></span>
                            </li>
                        </ul>
                        <?php if ( ! empty( $tags ) ) : ?>
                        <ul class="p-plan-hero__tags">
                            <?php foreach ( $tags as $tag ) : ?>
                            <li>#<?php echo esc_html( $tag ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <dl class="p-plan-hero__info-list">
                        <?php if ( ! empty( $season ) ) : ?>
                        <div class="p-plan-hero__info-item">
                            <dt>おすすめの季節</dt>
                            <dd><?php echo esc_html( implode( '・', (array) $season ) ); ?></dd>
                        </div>
                        <?php endif; ?>
                        <?php if ( $style ) : ?>
                        <div class="p-plan-hero__info-item">
                            <dt>スタイル</dt>
                            <dd><?php echo esc_html( $style ); ?></dd>
                        </div>
                        <?php endif; ?>
                        <?php if ( $area ) : ?>
                        <div class="p-plan-hero__info-item">
                            <dt>エリア</dt>
                            <dd><?php echo esc_html( $area ); ?></dd>
                        </div>
                        <?php endif; ?>
                        <?php if ( $point ) : ?>
                        <div class="p-plan-hero__info-item">
                            <dt>旅のポイント</dt>
                            <dd><?php echo nl2br( esc_html( $point ) ); ?></dd>
                        </div>
                        <?php endif; ?>
                        <?php if ( $price ) : ?>
                        <div class="p-plan-hero__info-item">
                            <dt>旅行代金の目安</dt>
                            <dd><?php echo nl2br( esc_html( $price ) ); ?></dd>
                        </div>
                        <?php endif; ?>
                    </dl>
                </div>
            </div>

            <!-- モデルプラン -->
            <?php
            $_svg = function( $path ) {
                return '<svg class="p-model-plan__move-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
            };
            $_img = function( $file ) use ( $dir ) {
                return '<img src="' . esc_url( $dir . '/assets/img/common/' . $file ) . '" alt="" class="p-model-plan__move-icon" width="30" height="30">';
            };
            $move_map = [
                '飛行機'          => [ 'mod' => '--taxi', 'svg' => $_svg( '<path d="M16 10h4a2 2 0 0 1 0 4h-4l-4 7h-3l2-7h-4l-2 2H2l2-4-2-4h3l2 2h4L9 3h3z"/>' ) ],
                '電車'            => [ 'mod' => '--taxi', 'svg' => $_svg( '<rect x="4" y="3" width="16" height="16" rx="3"/><path d="M4 11h16"/><circle cx="8.5" cy="15.5" r="1.5"/><circle cx="15.5" cy="15.5" r="1.5"/>' ) ],
                '車'              => [ 'mod' => '--taxi', 'svg' => $_img( 'taxi-icon.svg' ) ],
                'バス'            => [ 'mod' => '--taxi', 'svg' => $_svg( '<rect x="2" y="4" width="20" height="14" rx="2"/><path d="M2 10h20M7 4v6M17 4v6"/><circle cx="7" cy="20" r="2"/><circle cx="17" cy="20" r="2"/>' ) ],
                '介護タクシー利用' => [ 'mod' => '--taxi', 'svg' => $_img( 'taxi-icon.svg' ) ],
                '徒歩'            => [ 'mod' => '--walk', 'svg' => $_img( 'walk-icon.svg' ) ],
            ];
            ?>
            <div class="p-model-plan">
                <h2 class="p-model-plan__title">モデルプラン</h2>
                <?php if ( have_rows( 'day' ) ) : ?>
                <div class="p-model-plan__days">
                    <?php $day_num = 1; while ( have_rows( 'day' ) ) : the_row(); ?>
                    <div class="p-model-plan__day">
                        <div class="p-model-plan__day-label"><?php echo esc_html( $day_num ); ?>日目</div>
                        <div class="p-model-plan__steps">
                            <?php if ( have_rows( '一日の流れ' ) ) : while ( have_rows( '一日の流れ' ) ) : the_row();
                                $content    = get_sub_field( 'flow_content' );
                                $move       = get_sub_field( 'flow_move' );
                                $move_types = ! empty( $move['move__use'] ) ? (array) $move['move__use'] : [];
                                $move_time  = ! empty( $move['move_time'] ) ? $move['move_time'] : '';
                            ?>
                            <?php if ( $content ) : ?>
                            <div class="p-model-plan__spot"><?php echo esc_html( $content ); ?></div>
                            <?php endif; ?>
                            <?php if ( ! empty( $move_types ) ) :
                                $first = $move_types[0];
                                $cfg   = $move_map[ $first ] ?? $move_map['車'];
                                $label = implode( '・', $move_types ) . ( $move_time ? '（' . $move_time . '）' : '' );
                            ?>
                            <div class="p-model-plan__move p-model-plan__move<?php echo esc_attr( $cfg['mod'] ); ?>">
                                <?php echo $cfg['svg']; ?>
                                <span class="p-model-plan__move-text"><?php echo esc_html( $label ); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <?php $day_num++; endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </article>

    <!-- よくある質問 -->
    <section class="sec faq" id="faq">
        <div class="l-inner">
            <div class="c-sec-header">
                <p class="c-sec-header__subtitle js-fade-up">
                    <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon08.svg" alt="" /></i>はじめての方へ
                </p>
                <h2 class="c-sec-header__title js-fade-up">よくあるご質問</h2>
            </div>

            <div class="faq__accordion p-faq-accordion js-stagger-container">
                <?php
        $faqs = [
            [ 'q' => '医療や介助が必要な場合でも参加できますか？', 'a' => '状況に応じて対応可能な場合があります。体調や必要なサポート内容を事前に伺い、無理のない旅程をご提案いたします。まずはお気軽にご相談ください。' ],
            [ 'q' => '移動中の負担が心配です。', 'a' => '移動時間や乗り換え回数を考慮したプランをご提案しています。長時間の移動を避けるなど、体への負担を抑えた行程を大切にしています。' ],
            [ 'q' => '食事に制限があるのですが対応できますか？', 'a' => '事前にご相談いただければ、可能な範囲で対応いたします。アレルギーや体調に配慮した食事について、宿泊施設と連携しながら調整します。' ],
            [ 'q' => 'どこまでサポートしてもらえますか？', 'a' => 'ご旅行のご相談から、宿・移動・観光の手配まで一貫してお手伝いします。「何をお願いしていいかわからない」という段階からでも大丈夫です。' ],
            [ 'q' => '相談だけでも大丈夫ですか？', 'a' => 'もちろんです。旅行が可能かどうかを含めて、一緒に考えるところから始めています。無理にお申し込みをおすすめすることはありません。' ],
        ];
        foreach ( $faqs as $faq ) :
        ?>
                <div class="p-faq-accordion__item js-accordion-item js-fade-up">
                    <button class="p-faq-accordion__header js-accordion-trigger">
                        <span class="p-faq-accordion__question"><?php echo esc_html( $faq['q'] ); ?></span>
                        <span class="p-faq-accordion__icon"></span>
                    </button>
                    <div class="p-faq-accordion__body js-accordion-body">
                        <div class="p-faq-accordion__content">
                            <p class="p-faq-accordion__text"><?php echo esc_html( $faq['a'] ); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>





    <!-- プラン相談CTA -->
    <section class="p-plan-cta">
        <div class="l-inner">
            <p class="p-plan-cta__lead">プランについてご不明・ご不安な点は、<br>こちらからお気軽にお問い合わせください。</p>
            <div class="p-plan-cta__inner">
                <a href="tel:0767537744" class="p-plan-cta__item">
                    <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/tel-icon.svg" alt=""
                        class="p-plan-cta__icon" />
                    <span class="p-plan-cta__name">電話でお問い合わせ</span>
                    <p class="p-plan-cta__desc p-plan-cta__desc--tel">0767-53-7744</p>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="p-plan-cta__item">
                    <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/mail-icon.svg" alt=""
                        class="p-plan-cta__icon" />
                    <span class="p-plan-cta__name">Webでお問い合わせ</span>
                    <p class="p-plan-cta__desc">当Webサイトよりすぐにご相談いただけます</p>
                </a>
                <a href="https://lin.ee/X2gEPfD" target="_blank" rel="noopener noreferrer" class="p-plan-cta__item">
                    <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/line-icon2.svg" alt=""
                        class="p-plan-cta__icon" />
                    <span class="p-plan-cta__name">公式LINE</span>
                    <p class="p-plan-cta__desc">公式LINEアカウントからご相談いただけます</p>
                </a>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/related-plans' ); ?>

    <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>