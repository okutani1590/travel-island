<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<main id="page">
  <section class="c-page-header">
    <div class="l-inner">
      <h1 class="c-page-header__title">お客様の声</h1>
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span>お客様の声</span>
      </nav>
    </div>
  </section>

  <section class="p-archive-voice">
    <div class="l-inner">
      <ul class="p-card-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $tags = wp_get_post_terms( get_the_ID(), 'voice_tag', [ 'fields' => 'names' ] );
            $name = ( get_field( 'names' ) ?: 'S' ) . '様';
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
                <span class="c-card__name"><?php echo esc_html( $name ); ?></span>
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
        <?php endwhile; endif; ?>
      </ul>

      <!-- ページネーション -->
      <div class="c-pagination">
        <?php echo paginate_links( [ 'type' => 'list' ] ); ?>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php get_footer(); ?>
