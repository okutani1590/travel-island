<?php get_header(); ?>

<div class="page_mv">
    <div class="container mw_1660">
        <div class="title-box">
            <h1 class="en">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
</div>
<div class="breadcrumbs " typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="container mw_1660">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
</div>


<div class="page_wrapper">
    <?php if (is_page('company')): ?>
        <?php get_template_part('page/page', 'company'); ?>
    <?php elseif (is_page('property')): ?>
        <?php get_template_part('page/page', 'property'); ?>
    <?php elseif (is_page('service')): ?>
        <?php get_template_part('page/page', 'service'); ?>
    <?php elseif (is_page('information')): ?>
        <?php get_template_part('archive/archive', 'information'); ?>
    <?php elseif (is_page('recruit')): ?>
        <?php get_template_part('page/page', 'recruit'); ?>
    <?php elseif (is_page('privacypolicy')): ?>
        <?php get_template_part('page/page', 'privacypolicy'); ?>
    <?php elseif (is_page('contact')): ?>
        <?php get_template_part('page/page', 'contact'); ?>
    <?php elseif (is_page('property-contact')): ?>
        <?php get_template_part('page/page', 'propertycontact'); ?>
    <?php else: ?>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <?php remove_filter('the_content', 'wpautop'); ?>
                <div class="container">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>