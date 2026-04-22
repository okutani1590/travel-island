<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<main id="page">
  <section class="c-page-header">
    <div class="l-inner">
      <h1 class="c-page-header__title">コラム</h1>
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span>コラム</span>
      </nav>
    </div>
  </section>

  <section class="p-archive-column">
    <div class="l-inner p-archive-column__inner">
      <!-- メインコンテンツ -->
      <div class="p-archive-column__main">
        <ul class="p-column-list">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              $cats = wp_get_post_terms( get_the_ID(), 'column_category', [ 'fields' => 'names' ] );
          ?>
          <li class="p-column-list__item">
            <a href="<?php the_permalink(); ?>" class="c-card">
              <figure class="c-card__image-wrapper">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'medium', [ 'loading' => 'lazy', 'decoding' => 'async', 'alt' => '' ] ); ?>
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
                <p class="c-card__description"><?php echo wp_trim_words( get_the_excerpt(), 40 ); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile; endif; ?>
        </ul>

        <!-- ページネーション -->
        <div class="c-pagination">
          <?php
          echo paginate_links( [
              'type'    => 'list',
              'prev_text' => '<span class="c-pagination__arrow c-pagination__arrow--prev" aria-label="前へ"></span>',
              'next_text' => '<span class="c-pagination__arrow c-pagination__arrow--next" aria-label="次へ"></span>',
          ] );
          ?>
        </div>
      </div>

      <!-- サイドバー -->
      <aside class="p-archive-column__side p-sidebar">
        <div class="p-sidebar__section">
          <h2 class="p-sidebar__title">カテゴリー</h2>
          <nav class="p-sidebar-category">
            <?php
            $col_cats = get_terms( [ 'taxonomy' => 'column_category', 'hide_empty' => false ] );
            $color_map = [ 'お知らせ' => 'red', 'キャンペーン' => 'orange', '取り組み' => 'green', 'お役立ち情報' => 'blue' ];
            $icon_map  = [
                'お知らせ'      => 'news-icon.svg',
                'キャンペーン'  => 'campaign-icon.svg',
                '取り組み'      => 'attempt-icon.svg',
                'お役立ち情報'  => 'info-icon-white.svg',
            ];
            if ( ! is_wp_error( $col_cats ) ) :
                foreach ( $col_cats as $cat ) :
                    $color = $color_map[ $cat->name ] ?? 'blue';
                    $icon  = $icon_map[ $cat->name ] ?? 'info-icon-white.svg';
            ?>
            <a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="p-sidebar-category__btn p-sidebar-category__btn--<?php echo esc_attr( $color ); ?>">
              <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/<?php echo esc_attr( $icon ); ?>" alt="" /></i>
              <span><?php echo esc_html( $cat->name ); ?></span>
            </a>
            <?php
                endforeach;
            endif;
            ?>
          </nav>
        </div>
      </aside>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php get_footer(); ?>
