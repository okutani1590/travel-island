<?php get_header(); ?>

<?php $dir = get_template_directory_uri(); ?>

<?php while ( have_posts() ) : the_post();
    $level       = (int) get_post_meta( get_the_ID(), 'care_level', true );
    $level_label = get_post_meta( get_the_ID(), 'care_level_label', true ) ?: '自立';
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
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" />
          <?php endif; ?>
        </div>
        <div class="p-plan-hero__content">
          <h1 class="p-plan-hero__title"><?php the_title(); ?></h1>
          <div class="p-plan-hero__badges">
            <p>対象介助レベル</p>
            <ul>
              <li>
                <span class="p-plan-hero__badge p-plan-hero__badge--yellow"><?php echo esc_html( $level_label ); ?></span>
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
            <?php if ( $season ) : ?>
            <div class="p-plan-hero__info-item">
              <dt>おすすめの季節</dt>
              <dd><?php echo esc_html( $season ); ?></dd>
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
              <dd><?php echo esc_html( $point ); ?></dd>
            </div>
            <?php endif; ?>
            <?php if ( $price ) : ?>
            <div class="p-plan-hero__info-item">
              <dt>旅行代金の目安</dt>
              <dd><?php echo wp_kses_post( $price ); ?></dd>
            </div>
            <?php endif; ?>
          </dl>
        </div>
      </div>

      <!-- モデルプラン・本文 -->
      <div class="p-entry-content">
        <?php the_content(); ?>
      </div>
    </div>
  </article>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>
<?php get_template_part( 'template-parts/modal' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
