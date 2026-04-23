document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".js-hamburger");
  const nav = document.querySelector(".js-nav");

  hamburger.addEventListener("click", function () {
    // aria-expandedを更新（アクセシビリティ対応）
    const expanded = this.getAttribute("aria-expanded") === "true" || false;
    this.setAttribute("aria-expanded", !expanded);

    // クラスの付け外し
    hamburger.classList.toggle("is-open");
    nav.classList.toggle("is-open");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const accordionItems = document.querySelectorAll(".js-accordion-item");

  accordionItems.forEach((item) => {
    const trigger = item.querySelector(".js-accordion-trigger");
    const body = item.querySelector(".js-accordion-body");

    trigger.addEventListener("click", () => {
      const isOpen = item.classList.contains("is-open");

      // 他を閉じる（不要ならこのブロックを削除）
      accordionItems.forEach((otherItem) => {
        otherItem.classList.remove("is-open");
        otherItem.querySelector(".js-accordion-body").style.height = "0px";
      });

      if (!isOpen) {
        item.classList.add("is-open");
        body.style.height = body.scrollHeight + "px";
      }
    });
  });
});

window.addEventListener("scroll", function () {
  const cta = document.querySelector(".c-cta-side");

  // スクロール量が100pxを超えたら .is-show を付与
  if (window.scrollY > 100) {
    cta.classList.add("is-show");
  } else {
    cta.classList.remove("is-show");
  }
});



// ポップアップ

document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("js-modal");
  if (!modal) return;

  // すべての .js-popup-btn でモーダルを開く
  document.querySelectorAll(".js-popup-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      modal.classList.add("is-open");
    });
  });

  // 背景クリックで閉じる
  const overlay = document.getElementById("js-modal-close");
  if (overlay) {
    overlay.addEventListener("click", () => {
      modal.classList.remove("is-open");
    });
  }

  // × ボタンで閉じる
  const closeBtn = document.querySelector(".c-modal__close-btn");
  if (closeBtn) {
    closeBtn.addEventListener("click", () => {
      modal.classList.remove("is-open");
    });
  }
});

// プラン診断モーダル 検索
document.addEventListener("DOMContentLoaded", () => {
  const submitBtn = document.querySelector(".c-modal__submit-btn");
  if (!submitBtn) return;

  submitBtn.addEventListener("click", () => {
    const archiveUrl = submitBtn.dataset.archiveUrl;
    if (!archiveUrl) return;

    const destinationMap = { domestic: "国内旅行", overseas: "海外旅行" };

    const level = document.querySelector('input[name="level"]:checked')?.value || "1";
    const destinationKey = document.querySelector('input[name="destination"]:checked')?.value || "domestic";
    const members = document.querySelector(".c-modal__number-input")?.value || "1";

    const params = new URLSearchParams({
      plan_level: `level${level}`,
      travel: destinationMap[destinationKey],
      members,
    });

    window.location.href = `${archiveUrl}?${params.toString()}`;
  });
});

// スムーススクロール
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      const href = anchor.getAttribute("href");
      const hashIndex = href.indexOf("#");
      const hash = href.slice(hashIndex);
      const path = href.slice(0, hashIndex);

      // 別ページへのリンクは通常遷移
      if (path && path !== window.location.pathname && path !== window.location.href) return;

      const target = document.querySelector(hash);
      if (!target) return;

      e.preventDefault();

      const headerHeight = document.querySelector(".l-header")?.offsetHeight ?? 0;
      const top = target.getBoundingClientRect().top + window.scrollY - headerHeight;

      window.scrollTo({ top, behavior: "smooth" });
    });
  });
});