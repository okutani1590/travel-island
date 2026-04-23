<footer class="l-footer">
  <div class="l-footer__inner">
    <div class="l-footer__img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/footer_img.jpg" alt="" />
    </div>
    <div class="l-footer__content">
      <p class="l-footer__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/common/header-logo.png" alt="トラベルアイランド" />
        </a>
      </p>

      <div class="l-footer__nav">
        <ul class="l-footer__nav-list">
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>"> お客様の声 </a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"> お問い合わせ </a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/#access' ) ); ?>"> 店舗案内 </a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'plan' ) ); ?>"> おすすめプラン </a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/#plan' ) ); ?>"> オーダーメイド旅行 </a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"> 来店予約 </a></li>
          <li class="l-footer__nav-item"><a href="<?php echo esc_url( get_post_type_archive_link( 'column' ) ); ?>"> コラム </a></li>
          <li class="l-footer__nav-item"><a href="#"> 国内・海外旅行検索 </a></li>
        </ul>

        <ul class="l-footer__subnav-list">
          <li class="l-footer__subnav-item"><a href="<?php echo esc_url( home_url( '/#info' ) ); ?>"> お知らせ </a></li>
          <li class="l-footer__subnav-item"><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"> よくあるご質問 </a></li>
          <li class="l-footer__subnav-item"><a href="<?php echo esc_url( home_url( '/#message' ) ); ?>"> 会社案内 </a></li>
        </ul>
      </div>

      <div class="l-footer__access">
        <p>
          トラベル愛ランド株式会社<br />〒926-0811 石川県七尾市御祓町1番地 パトリア1階<br />
          <a href="tel:0767-53-7744"> TEL: 0767-53-7744 </a>
        </p>
        <a href="https://maps.app.goo.gl/8zB4VtnX8BrBKz6S8" target="_blank" class="l-footer__map"> Google Map </a>
      </div>
    </div>
  </div>
</footer>

<?php get_template_part( 'template-parts/modal' ); ?>

<?php wp_footer(); ?>
</body>
</html>
