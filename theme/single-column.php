<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<?php while ( have_posts() ) : the_post();
    $cats = wp_get_post_terms( get_the_ID(), 'column_category', [ 'fields' => 'names' ] );
?>

<main id="page" class="single">
  <section class="c-page-header">
    <div class="l-inner">
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span><a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>">コラム</a></span>
        <span><?php the_title(); ?></span>
      </nav>
    </div>
  </section>

  <div class="p-single-column">
    <div class="l-inner p-single-column__inner">
      <article class="p-single-column__main">
        <div class="c-article__meta">
          <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y.m.d' ); ?></time>
          <?php if ( ! empty( $cats ) ) : ?>
          <span class="c-article__category c-article__category--blue"><?php echo esc_html( $cats[0] ); ?></span>
          <?php endif; ?>
        </div>

        <h1 class="p-single-column__title"><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : ?>
        <div class="p-single-column__eyecatch">
          <?php the_post_thumbnail( 'large', [ 'alt' => get_the_title() ] ); ?>
        </div>
        <?php endif; ?>

        <div class="p-entry-content">
          <?php the_content(); ?>
        </div>

        <div class="p-entry-nav">
          <?php
          $prev = get_previous_post( false, '', 'column_category' );
          $next = get_next_post( false, '', 'column_category' );
          ?>
          <?php if ( $prev ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="p-entry-nav__link p-entry-nav__link--prev">前の記事へ</a>
          <?php endif; ?>
          <a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>" class="p-entry-nav__link p-entry-nav__link--list">一覧へ戻る</a>
          <?php if ( $next ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="p-entry-nav__link p-entry-nav__link--next">次の記事へ</a>
          <?php endif; ?>
        </div>
      </article>

      <!-- サイドバー -->
      <aside class="p-archive-column__side p-sidebar">
        <div class="p-sidebar__section">
          <h2 class="p-sidebar__title">人気記事</h2>
          <ul class="p-sidebar-list">
            <?php
            $popular = new WP_Query( [
                'post_type'      => 'column',
                'posts_per_page' => 3,
                'orderby'        => 'comment_count',
                'order'          => 'DESC',
            ] );
            $i = 1;
            while ( $popular->have_posts() ) : $popular->the_post();
                $p_cats = wp_get_post_terms( get_the_ID(), 'column_category', [ 'fields' => 'names' ] );
            ?>
            <li class="p-sidebar-list__item">
              <a href="<?php the_permalink(); ?>">
                <div class="p-sidebar-list__image">
                  <?php the_post_thumbnail( 'thumbnail', [ 'alt' => '' ] ); ?>
                  <span class="p-sidebar-list__number"><?php echo $i++; ?></span>
                </div>
                <div class="p-sidebar-list__body">
                  <div class="p-sidebar-list__meta">
                    <time class="p-sidebar-list__date"><?php echo get_the_date( 'Y.m.d' ); ?></time>
                    <?php if ( ! empty( $p_cats ) ) : ?>
                    <span class="p-sidebar-list__category"><?php echo esc_html( $p_cats[0] ); ?></span>
                    <?php endif; ?>
                  </div>
                  <h3 class="p-sidebar-list__title"><?php the_title(); ?></h3>
                </div>
              </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
        </div>

        <div class="p-sidebar__section">
          <h2 class="p-sidebar__title">新着記事</h2>
          <ul class="p-sidebar-list">
            <?php
            $recent = new WP_Query( [
                'post_type'      => 'column',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ] );
            while ( $recent->have_posts() ) : $recent->the_post();
                $r_cats = wp_get_post_terms( get_the_ID(), 'column_category', [ 'fields' => 'names' ] );
            ?>
            <li class="p-sidebar-list__item">
              <a href="<?php the_permalink(); ?>">
                <div class="p-sidebar-list__image">
                  <?php the_post_thumbnail( 'thumbnail', [ 'alt' => '' ] ); ?>
                </div>
                <div class="p-sidebar-list__body">
                  <div class="p-sidebar-list__meta">
                    <time class="p-sidebar-list__date"><?php echo get_the_date( 'Y.m.d' ); ?></time>
                    <?php if ( ! empty( $r_cats ) ) : ?>
                    <span class="p-sidebar-list__category"><?php echo esc_html( $r_cats[0] ); ?></span>
                    <?php endif; ?>
                  </div>
                  <h3 class="p-sidebar-list__title"><?php the_title(); ?></h3>
                </div>
              </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
        </div>

        <div class="p-sidebar__section">
          <h2 class="p-sidebar__title">カテゴリー</h2>
          <nav class="p-sidebar-category">
            <?php
            $col_cats  = get_terms( [ 'taxonomy' => 'column_category', 'hide_empty' => false ] );
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
  </div>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
