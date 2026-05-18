<?php get_header(); ?>

<main id="page">

  <section class="c-page-header">
    <div class="l-inner">
      <p class="c-page-header__subtitle">404 NOT FOUND</p>
      <h1 class="c-page-header__title">ページが見つかりません</h1>
      <nav class="c-page-header__breadcrumb">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></span>
        <span>404 NOT FOUND</span>
      </nav>
    </div>
  </section>

  <section class="p-404">
    <div class="l-inner">
      <p class="p-404__text">お探しのページは移動・削除されたか、URLが間違っている可能性があります。<br>お手数ですが、トップページよりお探しください。</p>
      <div class="p-404__btn">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-button c-button--reverse">
          <span class="c-button__text">トップページへ戻る</span>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
