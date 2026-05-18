<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
    $cats = get_the_category();
    $news_url = get_option( 'page_for_posts' ) ? get_permalink( get_option( 'page_for_posts' ) ) : home_url( '/news/' );
?>

<main id="page" class="single">
  <section class="c-page-header">
    <div class="l-inner">
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span><a href="<?php echo esc_url( $news_url ); ?>">お知らせ</a></span>
        <span><?php the_title(); ?></span>
      </nav>
    </div>
  </section>

  <div class="p-single-news">
    <div class="l-inner">
      <article class="p-single-news__main">
        <div class="c-article__meta">
          <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y.m.d' ); ?></time>
          <?php if ( ! empty( $cats ) ) : ?>
          <ul class="c-article__categorylist">
            <li class="c-article__category c-article__category--<?php echo esc_attr( $cats[0]->slug ); ?>"><?php echo esc_html( $cats[0]->name ); ?></li>
          </ul>
          <?php endif; ?>
        </div>

        <h1 class="p-single-news__title"><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : ?>
        <div class="p-single-news__eyecatch">
          <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
        </div>
        <?php endif; ?>

        <div class="p-entry-content">
          <?php the_content(); ?>
        </div>

        <div class="p-entry-nav">
          <?php
          $prev = get_previous_post();
          $next = get_next_post();
          ?>
          <?php if ( $prev ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="p-entry-nav__link p-entry-nav__link--prev">前の記事へ</a>
          <?php endif; ?>
          <a href="<?php echo esc_url( $news_url ); ?>" class="p-entry-nav__link p-entry-nav__link--list">一覧へ戻る</a>
          <?php if ( $next ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="p-entry-nav__link p-entry-nav__link--next">次の記事へ</a>
          <?php endif; ?>
        </div>
      </article>
    </div>
  </div>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
