<?php get_header(); ?>

<section class="sec" id="single_property">
    <div class="container mw_1520">
        <div class="single_content">
            <div class="fv">
                <?php
$imgGroup = SCF::get('imgGroup');
if (!empty($imgGroup)) :
?>
                <div class="thumbnail_swiper">
                    <div class="swiper thumbnail_swiper_main">
                        <div class="swiper-wrapper">
                            <?php foreach ($imgGroup as $fields) { 
                $imgurl = wp_get_attachment_image_src($fields['repeat_img'], 'full');
                if (!empty($fields['repeat_img'])) { // 画像がある場合のみスライドを追加
            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($imgurl[0]); ?>">
                            </div>
                            <?php } } ?>
                        </div>
                        <div class="swiper-property-btn">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    <div class="swiper thumbnail_swiper_thumbnail">
                        <div class="swiper-wrapper">
                            <?php foreach ($imgGroup as $fields) { 
                $imgurl = wp_get_attachment_image_src($fields['repeat_img'], 'full');
                if (!empty($fields['repeat_img'])) { // 画像がある場合のみサムネイルを追加
            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($imgurl[0]); ?>">
                            </div>
                            <?php } } ?>
                        </div>

                    </div>

                </div>
                <?php endif; ?>
            </div>




            <div class="meta_box">
                <h2 class="content_title"><?php the_title(); ?></h2>
                <ul class="flex">
                    <li class="amount">
                        <span class="en"><?php the_field('販売価格（コンマ）'); ?></span>万円
                    </li>
                    <li class="address">
                        <?php the_field('所在地'); ?>
                    </li>
                    <li class="exclusive_area">
                        <b class="sp_only">専有面積：</b> <?php the_field('専有面積'); ?>㎡
                    </li>
                </ul>
            </div>

            <div class="content_area">
                <div class="overview_area">
                    <div class="flex">
                        <p class="left">物件概要</p>
                        <table class="property-table right">
                            <tr>
                                <th>物件名</th>
                                <td><?php the_title(); ?></td>
                                <?php if (get_field('販売価格')) : ?>
                                <th>販売価格</th>
                                <td><?php the_field('販売価格'); ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <?php if (get_field('所在地')) : ?>
                                <th>所在地</th>
                                <td><?php the_field('所在地'); ?></td>
                                <?php endif; ?>
                                <?php if (get_field('交通')) : ?>
                                <th>交通</th>
                                <td colspan="3"><?php the_field('交通'); ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <?php if (get_field('構造')) : ?>
                                <th>構造</th>
                                <td><?php the_field('構造'); ?></td>
                                <?php endif; ?>
                                <?php if (get_field('階建／所在階')) : ?>
                                <th>階建／所在階</th>
                                <td><?php the_field('階建／所在階'); ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>

                                <?php if (get_field('専有面積')) : ?>
                                <th>専有面積</th>
                                <td><?php the_field('専有面積'); ?>㎡</td>
                                <?php endif; ?>

                                <?php if (get_field('バルコニー面積')) : ?>
                                <th>バルコニー<br class="sp_only">面積</th>
                                <td><?php the_field('バルコニー面積'); ?>㎡</td>
                                <?php endif; ?>
                            </tr>
                            <tr>

                                <?php if (get_field('間取り')) : ?>
                                <th>間取り</th>
                                <td><?php the_field('間取り'); ?></td>
                                <?php endif; ?>

                                <?php if (get_field('築年月')) : ?>
                                <th>築年月</th>
                                <td><?php the_field('築年月'); ?></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <?php if (get_field('管理費')) : ?>
                                <th>管理費</th>
                                <td><?php the_field('管理費'); ?></td>
                                <?php endif; ?>
                                <?php if (get_field('修繕積立金')) : ?>
                                <th>修繕積立金</th>
                                <td><?php the_field('修繕積立金'); ?></td>
                                <?php endif; ?>
                            </tr>

                            <tr>
                                <?php if (get_field('取引態様')) : ?>
                                <th>取引態様</th>
                                <td><?php the_field('取引態様'); ?></td>
                                <?php endif; ?>
                            </tr>

                        </table>
                    </div>
                </div>

                <?php if (get_field('リフォーム')) : ?>
                <div class="reform_area">
                    <div class="flex">
                        <p class="left">リフォーム</p>
                        <div class="wysiwyg_area right">
                            <?php the_field('リフォーム'); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (get_field('備考内容')) : ?>
                <div class="remarks_area">
                    <div class="flex">
                        <p class="left">備考</p>
                        <div class="wysiwyg_area right">
                            <?php the_field('備考内容'); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>


            <?php
$terms = get_the_terms(get_the_ID(), 'property_cat');
if (!empty($terms) && !is_wp_error($terms)) :
?>
            <div class="cat_area">
                <ul class="grid grid-cols-6">
                    <?php foreach ($terms as $term) : ?>
                    <li><?php echo esc_html($term->name); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>


        </div>
    </div>
</section>


<section class="sec single_property_slide" id="property">
    <div class="swiper-container">
        <div class="swiper-title en u_mb45">
            RECOMMEND
        </div>

        <?php
$paged = get_query_var('paged', 1);
$query = new WP_Query(array(
    'post_type'      => 'property',
    'posts_per_page' => 8,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'paged'          => $paged,
    'post__not_in'   => array(get_the_ID()), // ← 現在の投稿を除外
    'meta_query'     => array(
        array(
            'key'     => 'recommend',
            'value'   => '1',
            'compare' => '=',
        ),
    ),
));
?>

        <?php if ($query->have_posts()) : ?>
        <div class="swiper-wrapper">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="swiper-slide">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.png" alt="デフォルト画像" />
                    <?php endif; ?>
                    <div class="overview">
                        <p class="title"><?php the_title(); ?></p>
                        <table>
                            <tr>
                                <th>金額</th>
                                <td><?php the_field('販売価格（コンマ）'); ?>万円</td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td><?php the_field('所在地'); ?></td>
                            </tr>
                            <tr>
                                <th>間取り</th>
                                <td><?php the_field('間取り'); ?></td>
                            </tr>
                        </table>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
        <!-- スクロールバー -->
        <div class="swiper-scrollbar"></div>
    </div>
</section>


<?php get_footer(); ?>