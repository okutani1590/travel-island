<?php $dir = get_template_directory_uri(); ?>
<div class="c-cta-section">
  <div class="c-cta-section__inner">
    <ul class="p-cta-grid">
      <li class="p-cta-grid__item">
        <a href="#" class="c-cta-banner js-popup-btn">
          <div class="c-cta-banner__image-wrapper">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/cta-banner01.jpg" alt="" class="c-cta-banner__image" />
          </div>
          <div class="c-cta-banner__content">
            <span class="c-cta-banner__sub-text">30秒でわかる！</span>
            <span class="c-cta-banner__main-text">おすすめプラン診断</span>
          </div>
          <div class="c-cta-banner__icon"><span class="c-cta-banner__arrow"></span></div>
        </a>
      </li>
      <li class="p-cta-grid__item">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="c-cta-banner">
          <div class="c-cta-banner__image-wrapper">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/cta-banner02.jpg" alt="" class="c-cta-banner__image" />
          </div>
          <div class="c-cta-banner__content">
            <span class="c-cta-banner__sub-text">介護福祉士資格保持者がご対応</span>
            <span class="c-cta-banner__main-text">かんたん無料相談</span>
          </div>
          <div class="c-cta-banner__icon"><span class="c-cta-banner__arrow"></span></div>
        </a>
      </li>
      <li class="p-cta-grid__item">
        <a href="tel:0767-53-7744" class="c-cta-banner c-cta-banner--tel">
          <div class="c-cta-banner__content">
            <span class="c-cta-banner__sub-text">お困りごとなどお気軽にご相談ください</span>
            <span class="c-cta-banner__main-text">
              <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/tel-text.svg" alt="0767-53-7744" />
            </span>
          </div>
          <div class="c-cta-banner__icon"><span class="c-cta-banner__arrow"></span></div>
        </a>
      </li>
    </ul>
  </div>
</div>
