<?php $dir = get_template_directory_uri(); ?>
<section class="c-cta">
  <div class="c-cta__inner">
    <div class="c-cta__left">
      <h2 class="c-cta__title">お問い合わせ</h2>
      <p class="c-cta__text">ご希望を伺いながら、<br class="sp" />専門のスタッフがご提案します。<br />まずはお気軽にご相談ください。</p>
      <a href="tel:0767-53-7744" class="c-button--tel">
        <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/tel-text.svg" alt="0767-53-7744" />
      </a>
    </div>
    <div class="c-cta__right">
      <a href="https://lin.ee/X2gEPfD" target="_blank" class="c-button--line">
        <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/line-btn.svg" alt="LINE" />
      </a>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="c-button--contact">
        <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/contact-btn.svg" alt="お問い合わせ" />
      </a>
    </div>
  </div>
</section>
