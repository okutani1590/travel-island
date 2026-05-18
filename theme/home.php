<?php get_header(); ?>

<main id="page">

  <section class="c-page-header">
    <div class="l-inner">
      <h1 class="c-page-header__title">お知らせ</h1>
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span>お知らせ</span>
      </nav>
    </div>
  </section>

  <section class="p-archive-news">
    <div class="l-inner">
      <ul class="p-news-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $cats = get_the_category();
        ?>
        <li class="p-news-list__item">
          <a href="<?php the_permalink(); ?>">
            <div class="c-article__meta">
              <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y.m.d' ); ?></time>
              <ul class="c-article__categorylist">
                <?php if ( ! empty( $cats ) ) : ?>
                <li class="c-article__category c-article__category--<?php echo esc_attr( $cats[0]->slug ); ?>"><?php echo esc_html( $cats[0]->name ); ?></li>
                <?php endif; ?>
              </ul>
            </div>
            <h2 class="p-news-list__title"><?php the_title(); ?></h2>
          </a>
        </li>
        <?php endwhile; endif; ?>
      </ul>

      <!-- ページネーション -->
      <div class="c-pagination">
        <?php
        echo paginate_links( [
            'type'      => 'list',
            'prev_text' => '<span class="c-pagination__arrow c-pagination__arrow--prev" aria-label="前へ"></span>',
            'next_text' => '<span class="c-pagination__arrow c-pagination__arrow--next" aria-label="次へ"></span>',
        ] );
        ?>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php get_footer(); ?>
