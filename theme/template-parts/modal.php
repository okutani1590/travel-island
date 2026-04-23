<?php $dir = get_template_directory_uri(); ?>
<div class="c-modal" id="js-modal">
    <div class="c-modal__overlay" id="js-modal-close"></div>
    <div class="c-modal__content">
        <button class="c-modal__close-btn" aria-label="閉じる">
            <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/close-icon.svg" alt="" />
        </button>

        <div class="c-modal__header">
            <p class="c-modal__subtitle">30秒でわかる！</p>
            <h2 class="c-modal__main-title">
                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/check-icon.svg" alt=""
                    class="c-modal__title-icon" width="34" height="34" />
                あなたにおすすめプラン診断
            </h2>
        </div>

        <div class="c-modal__form">

            <div class="c-modal__form-item">
                <p class="c-modal__form-label">希望の旅行先</p>
                <div class="c-modal__btn-group">
                    <label class="c-modal__btn-radio">
                        <input type="radio" name="destination" value="domestic" checked />
                        <span class="c-modal__btn-face">国内旅行</span>
                    </label>
                    <label class="c-modal__btn-radio">
                        <input type="radio" name="destination" value="overseas" />
                        <span class="c-modal__btn-face">海外旅行</span>
                    </label>
                </div>
            </div>

            <div class="c-modal__form-item">
                <p class="c-modal__form-label">人数</p>
                <div class="c-modal__number-wrap">
                    <input type="number" value="1" min="1" class="c-modal__number-input" />
                    <span class="c-modal__number-unit">人</span>
                </div>
            </div>

            <div class="c-modal__form-item">
                <p class="c-modal__form-label">介助を必要とする方の介助レベル</p>
                <div class="c-modal__btn-group c-modal__btn-group--level">
                    <label class="c-modal__btn-radio">
                        <input type="radio" name="level" value="1" checked />
                        <span class="c-modal__btn-face">
                            <span class="c-modal__btn-label">自立</span>
                            <span class="c-modal__btn-icons">
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt=""
                                    width="14" height="18" />
                            </span>
                        </span>
                    </label>
                    <label class="c-modal__btn-radio">
                        <input type="radio" name="level" value="2" />
                        <span class="c-modal__btn-face">
                            <span class="c-modal__btn-label">一部介助</span>
                            <span class="c-modal__btn-icons">
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt=""
                                    width="14" height="18" />
                            </span>
                        </span>
                    </label>
                    <label class="c-modal__btn-radio">
                        <input type="radio" name="level" value="3" />
                        <span class="c-modal__btn-face">
                            <span class="c-modal__btn-label">半介助</span>
                            <span class="c-modal__btn-icons">
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_off.svg" alt=""
                                    width="14" height="18" />
                            </span>
                        </span>
                    </label>
                    <label class="c-modal__btn-radio">
                        <input type="radio" name="level" value="4" />
                        <span class="c-modal__btn-face">
                            <span class="c-modal__btn-label">全介助</span>
                            <span class="c-modal__btn-icons">
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                                <img src="<?php echo esc_url( $dir ); ?>/assets/img/common/level-icon_on.svg" alt=""
                                    width="14" height="18" />
                            </span>
                        </span>
                    </label>
                </div>
            </div>

            <div class="c-modal__submit">
                <button type="button" class="c-modal__submit-btn" data-archive-url="<?php echo esc_url( get_post_type_archive_link( 'plan' ) ); ?>">
                    <span>おすすめプランの結果を見る</span>

                </button>
            </div>

        </div>
    </div>
</div>