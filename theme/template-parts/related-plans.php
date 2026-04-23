<?php
$posts_count = isset( $args['posts_count'] ) ? (int) $args['posts_count'] : 3;
$extra_class = isset( $args['extra_class'] ) ? ' ' . sanitize_html_class( $args['extra_class'] ) : '';
$current_id  = get_the_ID() ?: 0;
$related     = new WP_Query( [
    'post_type'      => 'plan',
    'posts_per_page' => $posts_count,
    'post__not_in'   => $current_id ? [ $current_id ] : [],
    'orderby'        => 'rand',
] );

if ( ! $related->have_posts() ) {
    return;
}

$dir = get_template_directory_uri();
?>
<section class="p-related-plans<?php echo esc_attr( $extra_class ); ?>">
  <div class="l-inner">
    <h2 class="p-related-plans__title">
      <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/check-icon.svg" alt="" width="30" height="30" />
      その他のおすすめプラン
    </h2>
    <ul class="p-related-plans__list">
      <?php while ( $related->have_posts() ) : $related->the_post();
          $level_terms = wp_get_post_terms( get_the_ID(), 'plan_level' );
          $level_term  = ! empty( $level_terms ) && ! is_wp_error( $level_terms ) ? $level_terms[0] : null;
          $level       = $level_term ? (int) str_replace( 'level', '', $level_term->slug ) : 0;
          $level_label = $level_term ? $level_term->name : '自立';
          $tags        = wp_get_post_terms( get_the_ID(), 'plan_tag', [ 'fields' => 'names' ] );
      ?>
      <li class="p-related-plans__item">
        <a href="<?php the_permalink(); ?>" class="p-plan-card">
          <div class="p-plan-card__image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
            <?php else : ?>
              <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/noimage.jpg" alt="" />
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
            <h3 class="p-plan-card__title"><?php the_title(); ?></h3>
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
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
