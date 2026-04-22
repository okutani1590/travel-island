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
  // 1. 要素を正確に取得
  const downloadBtn = document.querySelector(".js-popup-btn");
    const closeiconBtn = document.querySelector(".c-modal__close-btn");
  const modal = document.getElementById("js-modal");
  const closeBtn = document.getElementById("js-modal-close");

  // 2. ボタンが存在するか確認してからイベントをつける
  if (downloadBtn && modal) {
    downloadBtn.addEventListener("click", (e) => {
      e.preventDefault(); // 本来の送信（リロード）を止める
      modal.classList.add("is-open");
      console.log("Modal opened"); // ブラウザのコンソールで確認用
    });
  }

  // 3. 背景クリックで閉じる
  if (closeBtn) {
    closeBtn.addEventListener("click", () => {
      modal.classList.remove("is-open");
    });
  }

    if (closeiconBtn) {
    closeiconBtn.addEventListener("click", () => {
      modal.classList.remove("is-open");
    });
  }
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