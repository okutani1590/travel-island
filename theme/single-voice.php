<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<?php while ( have_posts() ) : the_post();
    $tags = wp_get_post_terms( get_the_ID(), 'voice_tag', [ 'fields' => 'names' ] );
    $name = ( get_field( 'names' ) ?: 'S' ) . '様';
?>

<main id="page" class="single">
  <section class="c-page-header">
    <div class="l-inner">
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span><a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>">お客様の声</a></span>
        <span><?php the_title(); ?></span>
      </nav>
    </div>
  </section>

  <div class="p-single-voice">
    <div class="l-inner">
      <article class="p-single-voice__main">
        <div class="p-single-voice__meta">
          <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date( 'Y.m.d' ); ?></time>
          <span class="p-single-voice__name"><?php echo esc_html( $name ); ?></span>
          <?php if ( ! empty( $tags ) ) : ?>
          <div class="p-single-voice__tags">
            <?php foreach ( $tags as $tag ) : ?>
            <span class="p-single-voice__tag"><?php echo esc_html( $tag ); ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>

        <h1 class="p-single-voice__title"><?php the_title(); ?></h1>

        <div class="p-single-voice__eyecatch">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full', [ 'alt' => 'お客様の声' ] ); ?>
          <?php else : ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" />
          <?php endif; ?>
        </div>

        <div class="p-entry-content">
          <?php the_content(); ?>
        </div>

        <div class="p-entry-nav">
          <?php
          $prev = get_previous_post( false, '', 'voice_tag' );
          $next = get_next_post( false, '', 'voice_tag' );
          ?>
          <?php if ( $prev ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="p-entry-nav__link p-entry-nav__link--prev">前の記事へ</a>
          <?php endif; ?>
          <a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>" class="p-entry-nav__link p-entry-nav__link--list">一覧へ戻る</a>
          <?php if ( $next ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="p-entry-nav__link p-entry-nav__link--next">次の記事へ</a>
          <?php endif; ?>
        </div>
      </article>
    </div>
  </div>

  <!-- その他のお客様の声 -->
  <section class="p-related-voices">
    <div class="l-inner">
      <div class="p-related-voices__title-wrap">
        <h2 class="p-related-voices__title">
          <i><img src="<?php echo esc_url( $dir ); ?>/assets/img/common/menu-icon04.svg" alt="" /></i> その他のお客様の声
        </h2>
      </div>
      <ul class="p-card-list">
        <?php
        $related = new WP_Query( [
            'post_type'      => 'voice',
            'posts_per_page' => 3,
            'post__not_in'   => [ get_the_ID() ],
            'orderby'        => 'rand',
        ] );
        while ( $related->have_posts() ) : $related->the_post();
            $r_tags = wp_get_post_terms( get_the_ID(), 'voice_tag', [ 'fields' => 'names' ] );
            $r_name = ( get_field( 'names' ) ?: 'S' ) . '様';
        ?>
        <li class="p-card-list__item">
          <a href="<?php the_permalink(); ?>" class="c-card">
            <figure class="c-card__image-wrapper">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full', [ 'alt' => '', 'loading' => 'lazy' ] ); ?>
              <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" loading="lazy" />
              <?php endif; ?>
            </figure>
            <div class="c-card__body">
              <div class="c-card__meta">
                <span class="c-card__name"><?php echo esc_html( $r_name ); ?></span>
                <?php if ( ! empty( $r_tags ) ) : ?>
                <ul class="c-card__taglist">
                  <?php foreach ( $r_tags as $rt ) : ?>
                  <li class="c-card__tag"><?php echo esc_html( $rt ); ?></li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              </div>
              <h3 class="c-card__title"><?php the_title(); ?></h3>
              <p class="c-card__description"><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
            </div>
          </a>
        </li>
        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
