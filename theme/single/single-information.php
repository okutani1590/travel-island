<?php get_header(); ?>
<section class="sec" id="single_information">
    <div class="container mw_1520">

        <div class="flex_wrap">
            <div class="single_content left">
                <div class="article_meta">
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <div class="flex">
                        <div class="month_day en">
                            <span><?php echo get_the_date('d'); ?></span>
                            <?php echo esc_html(get_post_time('M')); ?>
                        </div>
                        <div class="content">
                            <small class="year_cat en">
                                <?php 
                                    echo get_the_date('Y'); 
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo ' | ' . esc_html($categories[0]->name);
                                    }
                                ?>
                            </small>
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <?php remove_filter ('the_content', 'wpautop'); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="pager sp_only">
                <ul class="pager__list">
                    <li class="pager__item prev">
                        <?php previous_post_link('%link', '<i class="arrow2"></i>'); ?>
                    </li>
                    <li class="pager__item">
                        <a href="<?php echo esc_url(home_url('/information')); ?>">BACK</a>
                    </li>
                    <li class="pager__item next">
                        <?php next_post_link('%link', '<i class="arrow2"></i>'); ?>
                    </li>
                </ul>
            </div>

            <aside id="info_sidebar" class="right">
                <div class="box article">
                    <h3>
                        <a href="<?php echo esc_url(home_url('/information')); ?>" class="arrow en no_stick_">
                            NEW POST
                        </a>
                    </h3>
                    <div class="inner flex f_column">
                        <?php
$paged = get_query_var('paged', 1);
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 9,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => $paged,
);
$posts = get_posts($args);
?>

                        <?php if ($posts) : ?>
                        <ul class="article_wrap">
                            <?php foreach ($posts as $post) : setup_postdata($post); ?>
                            <li class="article_item">
                                <a href="<?php the_permalink(); ?>" class="arrow no_stick_">
                                    <div class="flex">
                                        <div class="month_day en">
                                            <span><?php echo get_the_date('d'); ?></span>
                                            <?php echo esc_html(get_post_time('M')); ?>
                                        </div>
                                        <div class="content">
                                            <small class="year_cat en">
                                                <?php 
                                    echo get_the_date('Y'); 
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo ' | ' . esc_html($categories[0]->name);
                                    }
                                ?>
                                            </small>
                                            <h4 class="title"><?php the_title(); ?></h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                        <?php else : ?>
                        <p>記事が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="box category">
                    <h3 class="en">
                        CATEGORY
                    </h3>
                    <div class="inner flex f_column">
                        <ul class="cat_wrap">
                            <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'order'   => 'ASC',
            ));

            if (!empty($categories)) :
                foreach ($categories as $category) : ?>
                            <li class="cat_item">
                                <a href="<?php echo get_category_link($category->term_id); ?>"
                                    class="triangle_arrow en no_stick_">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </li>
                            <?php endforeach;
            endif;
            ?>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
        <!-- ページネーション -->
        <div class="pager pc_only">
            <ul class="pager__list">
                <li class="pager__item prev">
                    <?php previous_post_link('%link', '<i class="arrow2"></i>'); ?>
                </li>
                <li class="pager__item">
                    <a class="no_stick_" href="<?php echo esc_url(home_url('/information')); ?>">BACK</a>
                </li>
                <li class="pager__item next">
                    <?php next_post_link('%link', '<i class="arrow2"></i>'); ?>
                </li>
            </ul>
        </div>


    </div>
</section>


<?php get_footer(); ?>