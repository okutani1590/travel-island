<?php get_header(); ?>
<section class="sec" id="single_member">
    <div class="container">
        <div class="single_content">
            <div class="box">
                <div class="wide_img">
                    <img src="<?php the_field('wide_img01'); ?>" />
                </div>
                <div class="profile_box">
                    <h2 class="content_title">
                        <span class="en">PROFILE</span> ｜ プロフィール
                    </h2>
                    <?php
    $free_items = SCF::get('profile');
    if (!empty($free_items)) { // 空チェック
        $chunks = array_chunk($free_items, ceil(count($free_items) / 2)); // 2分割
    ?>
                    <div class="table-wrapper flex">
                        <?php foreach ($chunks as $chunk) { ?>
                        <table>
                            <tbody>
                                <?php foreach ($chunk as $item) { ?>
                                <tr>
                                    <th class="en">NAME</th>
                                    <td><?php echo esc_html($item['NAME']); ?></td>
                                </tr>
                                <tr>
                                    <th class="en">POSITION</th>
                                    <td><?php echo esc_html($item['POSITION']); ?></td>
                                </tr>
                                <tr>
                                    <th class="en">JOINING</th>
                                    <td><?php echo esc_html($item['JOINING']); ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>


                <div class="message_area">

                    <?php
    $free_item = SCF::get('message');
    foreach ($free_item as $fields) { 
?>
                    <h2 class="message_title t-center">
                        <small class="en">
                            <?php echo $fields['message_title']; ?>
                        </small>
                        <?php echo $fields['desc']; ?>
                    </h2>

                    <?php } ?>

                    <div class="desc">
                        <?php the_field('contents01'); ?>
                    </div>

                </div>

                <div class="wide_img">
                    <img src="<?php the_field('wide_img02'); ?>" />
                </div>
                <div class="message_area">
                    <div class="desc">
                        <?php the_field('contents02'); ?>
                    </div>
                </div>

            </div>
        </div>


        <div class="othermember_area">
            <h3 class="content_title en">OTHER MEMBER</h3>
            <ul class="flex">
                <li>
                    <a href="<?php echo home_url( '/member/k_s_k_r/' ); ?>">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/k_s_k_r_thumbnail_sp.jpg"
                                media="(max-width: 767px)" />
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/k_s_k_r_thumbnail.jpg"
                                media="(min-width: 768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/service/k_s_k_r_thumbnail.jpg"
                                alt="MEMBER">
                        </picture>
                        <div class="meta_box flex">
                            <div class="left">
                                <span class="job_cat en">BUYING</span>
                                <p class="name">
                                    栗須　涼
                                </p>
                                <p class="desc">
                                    ひとつの時代<br>となるものを
                                </p>
                            </div>
                            <i class="">×</i>
                            <div class="right">
                                <span class="job_cat en">BUYING</span>
                                <p class="name">
                                    小窪　勝太
                                </p>
                                <p class="desc">
                                    快適な住まいを<br>届けたい
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url( '/member/s_i_a_y/' ); ?>">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/i_s_y_a_thumbnail_sp.jpg"
                                media="(max-width: 767px)" />
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/i_s_y_a_thumbnail.jpg"
                                media="(min-width: 768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/service/i_s_y_a_thumbnail.jpg"
                                alt="MEMBER">
                        </picture>
                        <div class="meta_box flex">
                            <div class="left">
                                <span class="job_cat en">DESIGN</span>
                                <p class="name">
                                    井口　鈴菜
                                </p>
                                <p class="desc">
                                    これが完璧を<br>世に送り出す
                                </p>
                            </div>
                            <i class="">×</i>
                            <div class="right">
                                <span class="job_cat en">DESIGN</span>
                                <p class="name">
                                    吉原　亜美
                                </p>
                                <p class="desc">
                                    わくわく感を<br>届ける
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url( '/member/i_k/' ); ?>">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/k_i_thumbnail_sp.jpg"
                                media="(max-width: 767px)" />
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/k_i_thumbnail.jpg"
                                media="(min-width: 768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/service/k_i_thumbnail.jpg"
                                alt="MEMBER">
                        </picture>

                        <div class="meta_box">
                            <div class="left">
                                <span class="job_cat en">CONSTRUCTION</span>
                                <p class="name">
                                    小林　一生
                                </p>
                                <p class="desc">
                                    現場にいるときが一番楽しいです
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url( '/member/i_y/' ); ?>">
                        <picture>
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/i_y_thumbnail_sp.jpg"
                                media="(max-width: 767px)" />
                            <source
                                srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page/service/i_y_thumbnail.jpg"
                                media="(min-width: 768px)" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/service/i_y_thumbnail.jpg"
                                alt="MEMBER">
                        </picture>
                        <div class="meta_box">
                            <div class="left">
                                <span class="job_cat en">MARKETING</span>
                                <p class="name">
                                    今井　佑妃
                                </p>
                                <p class="desc">
                                    守りたいものを護れる人に
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>


<?php get_footer(); ?>