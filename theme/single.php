<?php get_header(); ?>
<div class="page_mv">
    <div class="container mw_1660">
        <div class="title-box">

            <?php if (is_singular('member')) : ?>
            <h1 class="en">
                MEMBER
            </h1>
            <?php elseif (is_singular('property')) : ?>
            <h1 class="en">
                PROPERTY
            </h1>
            <?php elseif (is_single()) : ?>
            <h1 class="en">
                INFORMATION
            </h1>
            <?php else : ?>
            <?php endif; ?>
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
    <?php if (have_posts()) : ?>
    <?php if (is_singular('property')) : ?>
    <?php get_template_part('single/single', 'property'); ?>
    <?php elseif (is_singular('member')) : ?>
    <?php get_template_part('single/single', 'member'); ?>
    <?php elseif (is_single()) : ?>
    <?php get_template_part('single/single', 'information'); ?>
    <?php else : ?>
    <!-- 他のシングルページには適用しない -->
    <?php endif; ?>
    <?php else : ?>
    <!-- 投稿がない場合の処理 -->
    <?php endif; ?>


</div>
<?php get_footer(); ?>