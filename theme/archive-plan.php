<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<main id="page">
  <section class="c-page-header">
    <div class="l-inner">
      <h1 class="c-page-header__title">おすすめプラン</h1>
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span>おすすめプラン</span>
      </nav>
    </div>
  </section>

  <section class="p-archive-plan">
    <div class="l-inner">
      <ul class="p-archive-plan__list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $level     = (int) get_post_meta( get_the_ID(), 'care_level', true );
            $tags      = wp_get_post_terms( get_the_ID(), 'plan_tag', [ 'fields' => 'names' ] );
            $level_label = get_post_meta( get_the_ID(), 'care_level_label', true ) ?: '自立';
        ?>
        <li class="p-archive-plan__item">
          <a href="<?php the_permalink(); ?>" class="p-plan-card">
            <div class="p-plan-card__image">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium', [ 'alt' => get_the_title() ] ); ?>
              <?php endif; ?>
            </div>
            <div class="p-plan-card__content">
              <div class="p-plan-card__info">
                <div class="p-plan-card__level-block">
                  <span class="p-plan-card__level">対象介護レベル</span>
                  <span class="p-plan-card__icons" role="img" aria-label="<?php echo esc_attr( $level_label ); ?>">
                    <?php echo travel_island_get_level_icons( $level ); ?>
                  </span>
                </div>
              </div>
              <h2 class="p-plan-card__title"><?php the_title(); ?></h2>
              <?php if ( ! empty( $tags ) ) : ?>
              <div class="p-plan-card__tags">
                <?php foreach ( $tags as $tag ) : ?>
                <span class="p-plan-card__tag"><?php echo esc_html( $tag ); ?></span>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
            </div>
          </a>
        </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>
<?php get_template_part( 'template-parts/modal' ); ?>

<?php get_footer(); ?>
