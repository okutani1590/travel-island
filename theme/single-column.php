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

        <div class="p-single-column__eyecatch">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
          <?php else : ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" />
          <?php endif; ?>
        </div>

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
      <?php get_template_part( 'template-parts/sidebar-column' ); ?>
    </div>
  </div>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
