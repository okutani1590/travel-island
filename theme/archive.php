<?php get_header(); ?>

<div class="page_mv">
    <div class="container mw_1660">
        <div class="title-box">
            <h1 class="en">
                <?php if (is_post_type_archive('works') || is_tax('works_cat')): ?>
                WORKS
                <?php elseif (is_post_type_archive('property')): ?>
                PROPERTY
                <?php else: ?>
                INFORMATION
                <?php endif; ?>
            </h1>
        </div>
    </div>
</div>
<div class="breadcrumbs " typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="container mw_1660">
        <?php if(function_exists('bcn_display'))
{
	bcn_display();
}?>
    </div>
</div>
<div class="page_wrapper">
    <?php if (is_post_type_archive('works')): ?>
    <?php get_template_part('archive/archive', 'works'); ?>
    <?php elseif (is_post_type_archive('property')): ?>
    <?php get_template_part('archive/archive', 'property'); ?>
    <?php elseif (is_tax('works_cat')): ?>
    <?php get_template_part('archive/taxonomy', 'works_cat'); ?>
    <?php else: ?>
    <section class="sec article" id="information">
        <div class="container mw_1520">
            <?php if (have_posts()) : ?>
            <ul class="article_wrap">
                <?php while (have_posts()) : the_post(); ?>
                <li class="article_item">
                    <a href="<?php the_permalink(); ?>" class="arrow">
                        <div class="flex">
                            <div class="month_day en">
                                <span><?php echo get_the_date('d'); ?></span>
                                <?php echo strtoupper(get_the_date('M')); ?>
                            </div>
                            <div class="content">
                                <small class="year_cat">
                                    <?php 
                                    echo get_the_date('Y'); 
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo ' | ' . esc_html($categories[0]->name);
                                    }
                                ?>
                                </small>
                                <h4 class="title"><?php the_title(); ?></h4>
                                <p class="desc"><?php echo wp_kses_post(get_the_excerpt()); ?></p>
                            </div>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php else : ?>
            <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
    </section>

    <?php endif; ?>
</div>







<?php get_footer(); ?>