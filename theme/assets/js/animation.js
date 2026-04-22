gsap.registerPlugin(ScrollTrigger);

// 1. ヘッダー部分のふわっと表示

/**
 * 共通アニメーション：フェードアップ
 * HTMLで .js-fade-up をつけるだけで機能するようにします
 */
const fadeUpElements = document.querySelectorAll(".js-fade-up");
fadeUpElements.forEach((el) => {
  gsap.from(el, {
    y: 30,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
    scrollTrigger: {
      trigger: el,
      start: "top 90%",
      // 必要に応じて once: true を追加
    },
  });
});

// 2. リストアイテムの連続表示（スタッガー）
gsap.from(".js-trouble-item", {
  y: 50,
  opacity: 0,
  duration: 1.2,
  ease: "power3.out",
  stagger: 0.2, // 0.2秒ずつズレて登場
  scrollTrigger: {
    trigger: ".trouble__list",
    start: "top 80%",
  },
});

// 3. アイコンの「ひょこっ」とした動き
gsap.from(".js-trouble-icon", {
  scale: 0,
  rotation: -15,
  duration: 1,
  delay: 0.5, // カードが出てから少し遅らせる
  ease: "back.out(1.7)",
  stagger: 0.2,
  scrollTrigger: {
    trigger: ".trouble__list",
    start: "top 80%",
  },
});

gsap.registerPlugin(ScrollTrigger);

// ヘッダーのフェードイン

// 各特長アイテムのアニメーション
const featItems = document.querySelectorAll(".js-feat-item");

featItems.forEach((item) => {
  const content = item.querySelector(".js-feat-content");
  const imgWrapper = item.querySelector(".js-feat-img-wrap");
  const img = item.querySelector(".js-feat-img");

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: item,
      start: "top 75%", // アイテムが画面の75%の位置に来たら開始
    },
  });

  tl.from(content, {
    x: -40, // 左からスライド
    opacity: 0,
    duration: 1,
    ease: "power2.out",
  })
    .from(
      imgWrapper,
      {
        x: 40, // 右からスライド
        opacity: 0,
        duration: 1,
        ease: "power2.out",
      },
      "-=0.8",
    ) // テキストの動きが終わる0.8秒前から開始（重ねる）
    .from(
      img,
      {
        scale: 1.3, // 画像を大きくした状態から戻す（ズームアウト効果）
        duration: 1.5,
        ease: "power2.out",
      },
      "-=1.0",
    );
});

gsap.registerPlugin(ScrollTrigger);

const msgTl = gsap.timeline({
  scrollTrigger: {
    trigger: "#message",
    start: "top 70%", // 画面の7割くらいの高さに来たら開始
  },
});

// 写真：不透明度0 & 少し左からスライド & 1.1倍から等倍へ
msgTl
  .from(".js-msg-visual", {
    opacity: 0,
    x: -30,
    scale: 1.1,
    duration: 1.5,
    ease: "power2.out",
  })
  // テキスト要素（タイトル、本文、名義）：順番に下からふわっと
  .from(
    ".js-msg-item",
    {
      opacity: 0,
      y: 20,
      duration: 1.0,
      stagger: 0.3, // 0.3秒間隔で順番に
      ease: "power2.out",
    },
    "-=1.0",
  ); // 写真のアニメーションが終わる1秒前から開始（重ねる）

gsap.registerPlugin(ScrollTrigger);

const planTl = gsap.timeline({
  scrollTrigger: {
    trigger: "#plan",
    start: "top 70%",
  },
});

// 1. ヘッダー
planTl
  // 2. プランカード（グリッド表示に合わせてスタッガー）
  .from(
    ".js-plan-card",
    {
      scale: 0.8,
      opacity: 0,
      y: 30,
      duration: 0.8,
      ease: "back.out(1.2)", // 少しだけバウンドさせる
      stagger: {
        amount: 0.8, // 全体で0.8秒かけてバラバラに出す
        grid: "auto", // 画面幅に応じた列数を自動計算して綺麗に並べる
        from: "start", // 左上からスタート
      },
    },
    "-=0.4",
  );
// 3. もっと見るボタン（少し強調して登場）
// 全てのボタンを取得してループ処理
const btns = document.querySelectorAll(".js-btn");

btns.forEach((btn) => {
  gsap.from(btn, {
    scale: 0,
    opacity: 0,
    duration: 1.2,
    ease: "elastic.out(1, 0.5)",
    scrollTrigger: {
      trigger: btn, // ボタン自身をトリガーに設定
      start: "top 90%", // ボタンが画面の90%の位置（下の方）に来たら発火
      toggleActions: "play none none none", // 1回だけ再生
      // once: true,     // 完全に1回きりにしたい場合はこれでもOK
    },
  });
});
