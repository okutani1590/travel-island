<?php get_header(); ?>

<?php
$dir         = get_template_directory_uri();
$is_search   = ! empty( $_GET['plan_level'] ) || ! empty( $_GET['travel'] );
$travel      = ! empty( $_GET['travel'] )     ? sanitize_text_field( wp_unslash( $_GET['travel'] ) ) : '';
$members     = ! empty( $_GET['members'] )    ? (int) $_GET['members'] : 0;
$plan_level  = ! empty( $_GET['plan_level'] ) ? sanitize_key( $_GET['plan_level'] ) : '';

// 介助レベルのアイコン数
$level_num = (int) str_replace( 'level', '', $plan_level );
?>

<main id="page">
  <?php if ( $is_search ) : ?>
  <section class="c-page-header c-page-header--result">
    <div class="l-inner">
      <h1 class="c-page-header__title">診断結果</h1>
    </div>
  </section>

  <section class="p-archive-plan">
    <div class="l-inner">
      <div class="p-archive-plan__filters">
        <?php if ( $travel ) : ?>
        <span class="p-archive-plan__filter-chip">
          <span class="p-archive-plan__filter-label">希望の旅行先</span>
          <?php echo esc_html( $travel ); ?>
        </span>
        <?php endif; ?>
        <?php if ( $members ) : ?>
        <span class="p-archive-plan__filter-chip">
          <span class="p-archive-plan__filter-label">人数</span>
          <?php echo esc_html( $members ); ?> 人
        </span>
        <?php endif; ?>
        <?php if ( $plan_level ) : ?>
        <span class="p-archive-plan__filter-chip">
          <span class="p-archive-plan__filter-label">介助レベル</span>
          <span class="p-archive-plan__filter-icons">
            <?php echo travel_island_get_level_icons( $level_num ); ?>
          </span>
        </span>
        <?php endif; ?>
      </div>

  <?php else : ?>
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
  <?php endif; ?>

      <ul class="p-archive-plan__list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $level_terms = wp_get_post_terms( get_the_ID(), 'plan_level' );
            $level_term  = ! empty( $level_terms ) && ! is_wp_error( $level_terms ) ? $level_terms[0] : null;
            $level       = $level_term ? (int) str_replace( 'level', '', $level_term->slug ) : 0;
            $level_label = $level_term ? $level_term->name : '自立';
            $tags        = wp_get_post_terms( get_the_ID(), 'plan_tag', [ 'fields' => 'names' ] );
        ?>
        <li class="p-archive-plan__item">
          <a href="<?php the_permalink(); ?>" class="p-plan-card">
            <div class="p-plan-card__image">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
              <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/noimage.jpg" alt="" />
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
        <?php endwhile; else : ?>
        <li class="p-archive-plan__empty">
          <p>条件に合うプランが見つかりませんでした。</p>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </section>

  <?php if ( $is_search ) : ?>
  <?php get_template_part( 'template-parts/related-plans', null, [ 'posts_count' => 6, 'extra_class' => 'p-related-plans--result' ] ); ?>
  <?php endif; ?>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php get_footer(); ?>
