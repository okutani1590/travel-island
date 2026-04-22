<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<main>
  <!-- ヒーロー -->
  <section class="p-hero fv">
    <div class="p-hero__inner">
      <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/fv-img.png" alt="最高の旅をあなたに" />
      <h1 style="display:none">最高の旅をあなたに</h1>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta-section' ); ?>

  <!-- お悩み -->
  <section class="sec trouble" id="trouble">
    <div class="l-inner">
      <div class="c-sec-header">
        <p class="c-sec-header__subtitle js-fade-up">
          <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon01.svg" alt="" /></i>お悩みごと
        </p>
        <h2 class="c-sec-header__title js-fade-up">こんなお悩みに<br class="sp" />ご活用いただいています</h2>
      </div>

      <ul class="trouble__list">
        <li class="trouble__item js-trouble-item">
          <span class="trouble__case"> CASE 01 </span>
          <p class="trouble__question"><span>車椅子で泊まることができる<br />宿</span>を探している</p>
          <div class="trouble__list-image">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/trouble-icon01.svg" width="63" height="105" alt="" class="js-trouble-icon" />
          </div>
        </li>
        <li class="trouble__item js-trouble-item">
          <span class="trouble__case"> CASE 02 </span>
          <p class="trouble__question">ケガなど万が一の時に<br /><span>医療サポート</span>があると安心</p>
          <div class="trouble__list-image">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/trouble-icon02.svg" width="70" height="105" alt="" class="js-trouble-icon" />
          </div>
        </li>
        <li class="trouble__item js-trouble-item">
          <span class="trouble__case"> CASE 03 </span>
          <p class="trouble__question"><span>食事介助ができるところ</span>を<br />探している</p>
          <div class="trouble__list-image">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/trouble-icon03.svg" width="72" height="102" alt="" class="js-trouble-icon" />
          </div>
        </li>
        <li class="trouble__item js-trouble-item">
          <span class="trouble__case"> CASE 04 </span>
          <p class="trouble__question">通常より割高になる…？<br /><span>できるだけお得に旅行がしたい</span></p>
          <div class="trouble__list-image">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/trouble-icon04.svg" width="88" height="108" alt="" class="js-trouble-icon" />
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- トラベル愛ランドの特長 -->
  <section class="sec features" id="features">
    <div class="l-inner">
      <div class="c-sec-header">
        <p class="c-sec-header__subtitle js-fade-up">
          <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon03.svg" alt="" /></i>安心できる理由をご紹介
        </p>
        <h2 class="c-sec-header__title --color-primary js-fade-up">トラベル愛ランドの特長</h2>
      </div>

      <ul class="features__list">
        <li class="features__item js-feat-item">
          <div class="features__content js-feat-content">
            <span class="features__badge">POINT 01</span>
            <h3 class="features__title">全国の交通・宿泊を手配可能</h3>
            <p class="features__text">トラベル愛ランドは安心のJTB提携店なので、全国に交通・<br />宿泊の提携がございます。</p>
          </div>
          <div class="features__image-wrapper js-feat-img-wrap">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/features-img01.jpg" alt="スタッフが電話対応している様子" class="features__image js-feat-img" />
          </div>
        </li>
        <li class="features__item js-feat-item">
          <div class="features__content js-feat-content">
            <span class="features__badge">POINT 02</span>
            <h3 class="features__title">緊急時に備えた医療連携や現地サポート</h3>
            <p class="features__text">事前に現地の医療チームと連携するため、万が一の場合<br />でもすぐに対応が可能です。</p>
          </div>
          <div class="features__image-wrapper js-feat-img-wrap">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/features-img02.jpg" alt="スタッフが電話対応している様子" class="features__image js-feat-img" />
          </div>
        </li>
        <li class="features__item js-feat-item">
          <div class="features__content js-feat-content">
            <span class="features__badge">POINT 03</span>
            <h3 class="features__title">介護福祉士の資格を持つスタッフ</h3>
            <p class="features__text">急な病状の変化や移動方法、食事の対応などお客様の<br />状況や状態に応じた最適のプランをご提案いたします。</p>
          </div>
          <div class="features__image-wrapper js-feat-img-wrap">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/features-img03.jpg" alt="スタッフが電話対応している様子" class="features__image js-feat-img" />
          </div>
        </li>
        <li class="features__item js-feat-item">
          <div class="features__content js-feat-content">
            <span class="features__badge">POINT 04</span>
            <h3 class="features__title">豊富なご提案実績</h3>
            <p class="features__text">全身麻痺や車椅子のご利用など、さまざまな身体状況を<br />お持ちのお客様のご提案実績がございます。</p>
          </div>
          <div class="features__image-wrapper js-feat-img-wrap">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/features-img04.jpg" alt="スタッフが電話対応している様子" class="features__image js-feat-img" />
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- 代表メッセージ -->
  <section class="sec message" id="message">
    <div class="l-inner">
      <div class="message-container">
        <div class="message-visual js-msg-visual">
          <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/message-img.jpg" alt="山口 好範（JTB総合提携店トラベル愛ランド）" />
        </div>
        <div class="message-content">
          <h2 class="message-title js-msg-item">あなたの大切な旅を、<br class="sp" />安心とともに。</h2>
          <div class="message-body js-msg-item">
            <p>地元の旅行会社で多くのお客様と接する中で、旅とは単に目的地に行くことではなく、一人ひとりの人生に寄り添う体験そのものだと深く感じてきました。<br />その思いを胸に、地元・石川を中心に歩んできたトラベル愛ランドは、創業以来ずっと「お客様中心主義」を大切にしてまいりました。<br />旅のご相談や手配はもちろん、不安に思うこと・困っていることにも、じっくりと耳を傾け、安心して出発いただけるようなサポートを心がけています。<br />私たちは、きめ細やかな対応と、地域の方々との深いつながりを強みとして、これからも皆さまの思い描く旅を形にしていきたいと思っています。<br />どうぞお気軽にご相談ください。</p>
          </div>
          <div class="message-profile js-msg-item">
            <p class="message-profile-role">介護福祉士取得アドバイザー</p>
            <p class="message-profile-name">山口 好範 <small class="en">Yoshinori Yamaguchi</small></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- おすすめプラン -->
  <section class="sec plan" id="plan">
    <div class="l-inner">
      <div class="c-sec-header">
        <p class="c-sec-header__subtitle js-fade-up">
          <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon05.svg" alt="" /></i>おすすめプラン
        </p>
        <h2 class="c-sec-header__title js-fade-up">こんな旅をご用意しています</h2>
      </div>

      <ul class="plan__list">
        <?php
        $plan_query = new WP_Query( [
            'post_type'      => 'plan',
            'posts_per_page' => 9,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );
        if ( $plan_query->have_posts() ) :
            while ( $plan_query->have_posts() ) : $plan_query->the_post();
        ?>
        <li class="plan__item js-plan-card">
          <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
            <?php else : ?>
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" />
            <?php endif; ?>
            <p><?php the_title(); ?></p>
          </a>
        </li>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </ul>
    </div>
    <div class="btn js-btn">
      <a href="<?php echo esc_url( get_post_type_archive_link( 'plan' ) ); ?>" class="c-button c-button--reverse">
        <span class="c-button__text">もっと見る</span>
      </a>
    </div>
  </section>

  <!-- 相談 -->
  <section class="sec consultation" id="consultation">
    <div class="l-inner">
      <div class="consultation__desc">
        <h3>お身体の状態・介助内容にあわせて、<br class="pc" />行き先や過ごし方を柔軟に調整できます。</h3>
        <p>ご希望を伺いながら、専門のスタッフがご提案します。<br class="pc" />まずはお気軽にご相談ください。</p>
      </div>
      <div class="consultation__img">
        <img src="<?php echo esc_url( $dir ); ?>/assets/img/top/consultation-icon.svg" alt="相談イメージ" />
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta-section' ); ?>

  <!-- ご予算の目安 -->
  <section class="sec price" id="price">
    <div class="l-inner">
      <div class="c-sec-header">
        <p class="c-sec-header__subtitle js-fade-up">
          <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon07.svg" alt="" /></i>料金表
        </p>
        <h2 class="c-sec-header__title js-fade-up">ご予算の目安</h2>
      </div>

      <div class="price-onedays js-fade-up">
        <h3 class="price-exsample">日帰り８時間例（概算）</h3>
        <div class="price-table">
          <div class="p-price-table-wrap">
            <table class="p-price-table">
              <thead>
                <tr>
                  <th class="p-price-table__label-th" scope="col" aria-label="項目"></th>
                  <th class="p-price-table__ours-th" scope="col">トラベル愛ランド</th>
                  <th class="p-price-table__theirs-th" scope="col">一般的な介護旅行会社</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="p-price-table__label" scope="row">付添料金（介護福祉士１名）</th>
                  <td class="p-price-table__ours">40,000円</td>
                  <td class="p-price-table__theirs">50,000円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">車両代（車いす専用・ドライバー込み）</th>
                  <td class="p-price-table__ours">70,000円<span class="p-price-table__note">ドライバー料金込みで別途不要</span></td>
                  <td class="p-price-table__theirs">80,000円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">移動時間料金</th>
                  <td class="p-price-table__ours">8,750円<span class="p-price-table__note">1時間あたり（目安）</span></td>
                  <td class="p-price-table__theirs">5,500円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">事前面接・事前準備</th>
                  <td class="p-price-table__ours">0円<span class="p-price-table__note">自社無料！</span></td>
                  <td class="p-price-table__theirs">5,000円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">旅行プランの企画・作成料金</th>
                  <td class="p-price-table__ours">26,000円<span class="p-price-table__note">合計20%（トラベル愛ランド上限55,000円）</span></td>
                  <td class="p-price-table__theirs">30,500円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">その他実費（高速・駐車・飲食・保険）など</th>
                  <td class="p-price-table__ours">約12,000円<span class="p-price-table__note">実費同等</span></td>
                  <td class="p-price-table__theirs">約12,000円</td>
                </tr>
                <tr class="p-price-table__row--total">
                  <th class="p-price-table__label" scope="row">合計</th>
                  <td class="p-price-table__ours">約156,900円<span class="p-price-table__note">車両・準備込みの強み</span></td>
                  <td class="p-price-table__theirs">約183,000円</td>
                </tr>
              </tbody>
            </table>
          </div>
          <span class="attention">こちらは一例としての概算金額です。ご旅行内容やサポート内容に応じて、実際の料金は異なる場合があります。まずはお気軽にご相談ください。</span>
        </div>
      </div>

      <div class="price-twodays js-fade-up">
        <h3 class="price-exsample">１泊２日例（概算）</h3>
        <div class="price-table">
          <div class="p-price-table-wrap">
            <table class="p-price-table">
              <thead>
                <tr>
                  <th class="p-price-table__label-th" scope="col" aria-label="項目"></th>
                  <th class="p-price-table__ours-th" scope="col">トラベル愛ランド</th>
                  <th class="p-price-table__theirs-th" scope="col">一般的な介護旅行会社</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="p-price-table__label" scope="row">付添料金（介護福祉士１名）</th>
                  <td class="p-price-table__ours">90,000円</td>
                  <td class="p-price-table__theirs">100,000円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">車両代（車いす専用・ドライバー込み）</th>
                  <td class="p-price-table__ours">120,000円<span class="p-price-table__note">ドライバー料金込みで別途不要</span></td>
                  <td class="p-price-table__theirs">200,000円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">移動時間料金</th>
                  <td class="p-price-table__ours">8,750円<span class="p-price-table__note">1時間あたり（目安）</span></td>
                  <td class="p-price-table__theirs">5,500円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">事前面接・事前準備</th>
                  <td class="p-price-table__ours">0円<span class="p-price-table__note">自社無料！</span></td>
                  <td class="p-price-table__theirs">5,000円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">旅行プランの企画・作成料金</th>
                  <td class="p-price-table__ours">55,000円<span class="p-price-table__note">合計20%（トラベル愛ランド上限55,000円）</span></td>
                  <td class="p-price-table__theirs">73,900円</td>
                </tr>
                <tr>
                  <th class="p-price-table__label" scope="row">その他実費（高速・駐車・飲食・保険）など</th>
                  <td class="p-price-table__ours">約59,000円<span class="p-price-table__note">実費同等</span></td>
                  <td class="p-price-table__theirs">約59,000円</td>
                </tr>
                <tr class="p-price-table__row--total">
                  <th class="p-price-table__label" scope="row">合計</th>
                  <td class="p-price-table__ours">約333,300円<span class="p-price-table__note">車両・準備込みの強み</span></td>
                  <td class="p-price-table__theirs">約443,400円</td>
                </tr>
              </tbody>
            </table>
          </div>
          <span class="attention">こちらは一例としての概算金額です。ご旅行内容やサポート内容に応じて、実際の料金は異なる場合があります。まずはお気軽にご相談ください。</span>
        </div>
      </div>
    </div>
    <div class="btn js-btn">
      <a href="<?php echo esc_url( home_url( '/#price' ) ); ?>" class="c-button c-button--reverse">
        <span class="c-button__text">もっと見る</span>
      </a>
    </div>
  </section>

  <!-- お客様の声 -->
  <section class="sec customer-voice" id="customer-voice">
    <div class="l-inner">
      <div class="c-sec-header c-sec-header--left">
        <p class="c-sec-header__subtitle js-fade-up">
          <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon09.svg" alt="" /></i>お客様の声
        </p>
        <h2 class="c-sec-header__title js-fade-up">お客様からのご感想</h2>
      </div>

      <ul class="p-card-list">
        <?php
        $voice_query = new WP_Query( [
            'post_type'      => 'voice',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );
        if ( $voice_query->have_posts() ) :
            while ( $voice_query->have_posts() ) : $voice_query->the_post();
                $tags = wp_get_post_terms( get_the_ID(), 'voice_tag', [ 'fields' => 'names' ] );
        ?>
        <li class="p-card-list__item">
          <a href="<?php the_permalink(); ?>" class="c-card">
            <figure class="c-card__image-wrapper">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full', [ 'loading' => 'lazy', 'decoding' => 'async', 'alt' => '' ] ); ?>
              <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" loading="lazy" decoding="async" />
              <?php endif; ?>
            </figure>
            <div class="c-card__body">
              <div class="c-card__meta">
                <span class="c-card__name"><?php echo esc_html( get_post_meta( get_the_ID(), 'voice_name', true ) ?: 'S様' ); ?></span>
                <?php if ( ! empty( $tags ) ) : ?>
                <ul class="c-card__taglist" aria-label="お客様情報">
                  <?php foreach ( $tags as $tag ) : ?>
                  <li class="c-card__tag"><?php echo esc_html( $tag ); ?></li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              </div>
              <h3 class="c-card__title"><?php the_title(); ?></h3>
              <p class="c-card__description"><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
            </div>
          </a>
        </li>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </ul>

      <div class="btn js-btn btn--position-right">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>" class="c-button c-button--reverse">
          <span class="c-button__text">もっと見る</span>
        </a>
      </div>
    </div>
  </section>

  <!-- トラベルコラム -->
  <section class="sec travel-column" id="travel-column">
    <div class="l-inner">
      <div class="c-sec-header c-sec-header--left">
        <p class="c-sec-header__subtitle js-fade-up">
          <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon06.svg" alt="" /></i>トラベルコラム
        </p>
        <h2 class="c-sec-header__title js-fade-up">旅行に役立つ情報</h2>
      </div>

      <ul class="p-card-list">
        <?php
        $column_query = new WP_Query( [
            'post_type'      => 'column',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );
        if ( $column_query->have_posts() ) :
            while ( $column_query->have_posts() ) : $column_query->the_post();
                $cats = wp_get_post_terms( get_the_ID(), 'column_category', [ 'fields' => 'names' ] );
        ?>
        <li class="p-card-list__item">
          <a href="<?php the_permalink(); ?>" class="c-card">
            <figure class="c-card__image-wrapper">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full', [ 'loading' => 'lazy', 'decoding' => 'async', 'alt' => '' ] ); ?>
              <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" loading="lazy" decoding="async" />
              <?php endif; ?>
            </figure>
            <div class="c-card__body">
              <div class="c-article__meta">
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y.m.d' ); ?></time>
                <ul class="c-article__categorylist">
                  <?php if ( ! empty( $cats ) ) : ?>
                  <li class="c-article__category"><?php echo esc_html( $cats[0] ); ?></li>
                  <?php endif; ?>
                </ul>
              </div>
              <h3 class="c-card__title"><?php the_title(); ?></h3>
              <p class="c-card__description"><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
            </div>
          </a>
        </li>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </ul>

      <div class="btn js-btn btn--position-right">
        <a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="c-button c-button--reverse">
          <span class="c-button__text">もっと見る</span>
        </a>
      </div>
    </div>
  </section>

  <!-- お知らせ・インスタグラム -->
  <section class="sec info" id="info">
    <div class="l-inner">
      <div class="l-inner--flex">
        <div class="l-inner--left">
          <div class="c-sec-header c-sec-header--left">
            <h2 class="c-sec-header__title c-sec-header__title--flex js-fade-up">
              <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/info-icon.svg" alt="" /></i>お知らせ
            </h2>
          </div>

          <ul class="p-news-list">
            <?php
            $news_query = new WP_Query( [
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ] );
            if ( $news_query->have_posts() ) :
                while ( $news_query->have_posts() ) : $news_query->the_post();
                    $cats = get_the_category();
            ?>
            <li class="p-news-list__item">
              <a href="<?php the_permalink(); ?>">
                <div class="c-article__meta">
                  <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y.m.d' ); ?></time>
                  <ul class="c-article__categorylist">
                    <?php if ( ! empty( $cats ) ) : ?>
                    <li class="c-article__category c-article__category--yellow"><?php echo esc_html( $cats[0]->name ); ?></li>
                    <?php endif; ?>
                  </ul>
                </div>
                <h3 class="c-card__title"><?php the_title(); ?></h3>
              </a>
            </li>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
          </ul>

          <div class="btn js-btn btn--position-right">
            <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="c-button c-button--reverse">
              <span class="c-button__text">もっと見る</span>
            </a>
          </div>
        </div>

        <div class="l-inner--right">
          <div class="c-sec-header c-sec-header--left">
            <h2 class="c-sec-header__title c-sec-header__title--flex js-fade-up">
              <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/insta-icon.svg" alt="" /></i>Instagram
            </h2>
          </div>
          <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/insta-dummy.png" alt="" />
          <div class="btn js-btn btn--position-right">
            <a href="#" class="c-button c-button--reverse">
              <span class="c-button__text">もっと見る</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

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
            [ 'q' => '福祉旅行が初めてでも利用できますか？', 'a' => 'はい、ご利用いただけます。初めての方にも安心してご参加いただけるよう、事前のご相談から丁寧に対応しています。不安な点やご希望があれば、どんなことでもお聞かせください。' ],
            [ 'q' => 'どのような方が利用されていますか？', 'a' => 'ご高齢の方や、移動や体調に不安のある方、そのご家族など、さまざまなお客様にご利用いただいています。お一人でのご参加はもちろん、ご家族や付き添いの方と一緒のご旅行も可能です。' ],
            [ 'q' => '医療や介助が必要な場合でも参加できますか？', 'a' => '状況に応じて対応可能な場合があります。体調や必要なサポート内容を事前に伺い、無理のない旅程をご提案いたします。まずはお気軽にご相談ください。' ],
            [ 'q' => '車椅子でも旅行できますか？', 'a' => 'はい、対応可能な宿泊施設や移動手段をご案内しています。段差や動線に配慮した旅先を選び、安心して過ごせるようサポートします。' ],
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

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>
<?php get_template_part( 'template-parts/modal' ); ?>

<?php get_footer(); ?>
