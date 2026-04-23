<?php $dir = get_template_directory_uri(); ?>

<aside class="p-archive-column__side p-sidebar">
  <div class="p-sidebar__section">
    <h2 class="p-sidebar__title">人気記事</h2>
    <ul class="p-sidebar-list">
      <?php
      $i           = 1;
      $popular_ids = function_exists( 'pvc_get_post_views' ) ? travel_island_get_popular_column_ids( 3 ) : [];
      $popular     = ! empty( $popular_ids )
          ? new WP_Query( [
              'post_type'      => 'column',
              'post__in'       => $popular_ids,
              'orderby'        => 'post__in',
              'posts_per_page' => count( $popular_ids ),
          ] )
          : new WP_Query( [
              'post_type'      => 'column',
              'posts_per_page' => 3,
              'orderby'        => 'comment_count',
              'order'          => 'DESC',
          ] );
      while ( $popular->have_posts() ) : $popular->the_post();
          $p_cats = wp_get_post_terms( get_the_ID(), 'column_category' );
      ?>
      <li class="p-sidebar-list__item">
        <a href="<?php the_permalink(); ?>">
          <div class="p-sidebar-list__image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'thumbnail', [ 'alt' => '' ] ); ?>
            <?php else : ?>
              <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/noimage.jpg" alt="" />
            <?php endif; ?>
            <span class="p-sidebar-list__number"><?php echo $i++; ?></span>
          </div>
          <div class="p-sidebar-list__body">
            <div class="p-sidebar-list__meta">
              <time class="p-sidebar-list__date"><?php echo get_the_date( 'Y.m.d' ); ?></time>
              <?php if ( ! empty( $p_cats ) ) : ?>
              <span class="p-sidebar-list__category p-sidebar-list__category--<?php echo esc_attr( $p_cats[0]->slug ); ?>"><?php echo esc_html( $p_cats[0]->name ); ?></span>
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
          $r_cats = wp_get_post_terms( get_the_ID(), 'column_category' );
      ?>
      <li class="p-sidebar-list__item">
        <a href="<?php the_permalink(); ?>">
          <div class="p-sidebar-list__image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'thumbnail', [ 'alt' => '' ] ); ?>
            <?php else : ?>
              <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/noimage.jpg" alt="" />
            <?php endif; ?>
          </div>
          <div class="p-sidebar-list__body">
            <div class="p-sidebar-list__meta">
              <time class="p-sidebar-list__date"><?php echo get_the_date( 'Y.m.d' ); ?></time>
              <?php if ( ! empty( $r_cats ) ) : ?>
              <span class="p-sidebar-list__category p-sidebar-list__category--<?php echo esc_attr( $r_cats[0]->slug ); ?>"><?php echo esc_html( $r_cats[0]->name ); ?></span>
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
