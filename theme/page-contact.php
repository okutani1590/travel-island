<?php
/*
 * Template Name: お問い合わせ
 */
get_header();
?>

<?php $dir = get_template_directory_uri(); ?>

<main id="page">
    <section class="c-page-header">
        <div class="l-inner">
            <h1 class="c-page-header__title">お問い合わせ</h1>
            <nav class="c-page-header__breadcrumb">
                <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
                <span>お問い合わせ</span>
            </nav>
        </div>
    </section>

    <section class="p-contact">
        <div class="l-inner">
            <div class="p-contact__lead">
                <p>各種お問い合わせは下記フォームより受け付けております。<br class="pc" />内容確認後、担当より折り返しご連絡いたします。</p>
                <p class="p-contact__note">ご送信後、自動返信メールをお送りします。</p>
            </div>

            <div class="p-contact__options">
                <p class="p-contact__options-title">電話やLINEからでもお気軽にお問い合わせいただけます</p>
                <div class="p-contact__options-list">
                    <div class="p-contact__option">
                        <div class="p-contact__option-icon">
                            <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/tel-icon.svg" alt="" width="34"
                                height="38" />
                        </div>
                        <div class="p-contact__option-body">
                            <p class="p-contact__option-label">電話でお問い合わせ</p>
                            <a href="tel:0767537744" class="p-contact__option-tel">0767-53-7744</a>
                        </div>
                    </div>
                    <a href="#" class="p-contact__option">
                        <div class="p-contact__option-icon">
                            <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/line-icon2.svg" alt="" width="46"
                                height="42" />
                        </div>
                        <div class="p-contact__option-body">
                            <p class="p-contact__option-label">公式LINEから<br>かんたんお問い合わせ</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="p-form">
                <?php echo do_shortcode( '[contact-form-7 id="57" title="お問い合わせ"]' ); ?>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php get_footer(); ?>