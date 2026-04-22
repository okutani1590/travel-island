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
        <p class="p-contact__note">送信後、自動配信メールをお送りします。</p>
      </div>

      <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" class="p-form">
        <?php wp_nonce_field( 'travel_island_contact', 'contact_nonce' ); ?>
        <input type="hidden" name="action" value="travel_island_contact" />

        <div class="p-form__item">
          <label class="p-form__label" for="name">
            お名前<span class="p-form__required">必須</span>
          </label>
          <div class="p-form__input-wrap">
            <input type="text" name="name" id="name" placeholder="山田　太郎" required />
          </div>
        </div>

        <div class="p-form__item">
          <label class="p-form__label" for="kana">
            フリガナ<span class="p-form__required">必須</span>
          </label>
          <div class="p-form__input-wrap">
            <input type="text" name="kana" id="kana" placeholder="ヤマダ　タロウ" required />
          </div>
        </div>

        <div class="p-form__item">
          <label class="p-form__label" for="tel">お電話番号</label>
          <div class="p-form__input-wrap">
            <input type="tel" name="tel" id="tel" placeholder="000-0000-0000" />
          </div>
        </div>

        <div class="p-form__item">
          <label class="p-form__label" for="email">
            メールアドレス<span class="p-form__required">必須</span>
          </label>
          <div class="p-form__input-wrap">
            <input type="email" name="email" id="email" placeholder="info@example.com" required />
          </div>
        </div>

        <div class="p-form__item">
          <label class="p-form__label" for="level">
            介助を必要とする方の<br class="pc">介助レベル
          </label>
          <div class="p-form__input-wrap">
            <select name="level" id="level">
              <option value="">選択してください</option>
              <option value="level1">自立</option>
              <option value="level2">要支援1〜2</option>
              <option value="level3">要介護1〜2</option>
              <option value="level4">要介護3〜5</option>
            </select>
          </div>
        </div>

        <div class="p-form__item">
          <label class="p-form__label">予定旅行期間</label>
          <div class="p-form__input-wrap p-form__input-wrap--date">
            <input type="date" name="date-start" aria-label="開始日" />
            <span>〜</span>
            <input type="date" name="date-end" aria-label="終了日" />
          </div>
        </div>

        <div class="p-form__item">
          <label class="p-form__label" for="message">
            お問い合わせ内容<span class="p-form__required">必須</span>
          </label>
          <div class="p-form__input-wrap">
            <textarea name="message" id="message" placeholder="お問い合わせ内容をご記入ください" required></textarea>
          </div>
        </div>

        <div class="p-form__policy">
          <div class="p-form__policy-box">
            <p class="p-form__policy-head">個人情報の取扱いについて</p>
            <p>当社は、「個人情報の保護に関する法律」、「番号法」及び「当社個人情報保護方針」に基づき、個人情報を以下のように取り扱い、保護に努めております。</p>
            <p class="p-form__policy-head">1. 当社が取得・保有する個人情報</p>
            <p>当社は、「個人情報の保護に関する法律」、「番号法」及び「当社個人情報保護方針」に基づき、個人情報を以下のように取り扱い、保護に努めております。</p>
          </div>
          <label class="p-form__policy-check">
            <input type="checkbox" name="policy" required />
            プライバシーポリシーに同意する
          </label>
        </div>

        <div class="p-form__submit">
          <button type="submit" class="c-button--submit">送信する</button>
        </div>
      </form>
    </div>
  </section>

  <?php get_template_part( 'template-parts/cta' ); ?>
</main>

<?php get_template_part( 'template-parts/cta-side' ); ?>

<?php get_footer(); ?>
