<?php $dir = get_template_directory_uri(); ?>
<div class="c-modal" id="js-modal">
  <div class="c-modal__overlay" id="js-modal-close"></div>
  <div class="c-modal__content">
    <div class="c-modal__inner">
      <button class="c-modal__close-btn">
        <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/close-icon.svg" alt="閉じる" />
      </button>
      <h2 class="c-modal__title">
        <span class="c-modal__subtitle">30秒でわかる！</span>
        <div class="c-modal__main-title"><span class="p-icon-check"></span> あなたにおすすめプラン診断</div>
      </h2>

      <div class="simple-form">
        <div class="form-item">
          <label class="form-label">希望の旅行先</label>
          <div class="form-select-wrapper">
            <select name="destination" class="form-select">
              <option value="" disabled selected>選択してください</option>
              <option value="hokkaido">北海道</option>
              <option value="okinawa">沖縄</option>
            </select>
          </div>
        </div>

        <div class="form-item">
          <label class="form-label">介助を必要とする方の介助レベル</label>
          <div class="form-button-group form-button-group--level">
            <label class="btn-radio">
              <input type="radio" name="level" value="1" checked />
              <span class="btn-radio__face">
                <span class="btn-radio__icons" aria-hidden="true">
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt="" width="14" height="18" />
                </span>
                <span class="btn-radio__label">自立</span>
              </span>
            </label>
            <label class="btn-radio">
              <input type="radio" name="level" value="2" />
              <span class="btn-radio__face">
                <span class="btn-radio__icons" aria-hidden="true">
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt="" width="14" height="18" />
                </span>
                <span class="btn-radio__label">一部介助</span>
              </span>
            </label>
            <label class="btn-radio">
              <input type="radio" name="level" value="3" />
              <span class="btn-radio__face">
                <span class="btn-radio__icons" aria-hidden="true">
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt="" width="14" height="18" />
                </span>
                <span class="btn-radio__label">半介助</span>
              </span>
            </label>
            <label class="btn-radio">
              <input type="radio" name="level" value="4" />
              <span class="btn-radio__face">
                <span class="btn-radio__icons" aria-hidden="true">
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                  <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt="" width="14" height="18" />
                </span>
                <span class="btn-radio__label">全介助</span>
              </span>
            </label>
          </div>
        </div>

        <div class="form-item">
          <label class="form-label">人数</label>
          <div class="form-input-inline">
            <input type="number" value="1" min="1" class="form-input-number" />
            <span class="unit">人</span>
          </div>
        </div>

        <div class="form-submit">
          <button type="submit" class="btn-submit">おすすめプランの結果を見る</button>
        </div>
      </div>
    </div>
  </div>
</div>
