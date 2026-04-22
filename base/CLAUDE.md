# CLAUDE.md - プロジェクト設定

日本語で回答してください。
WordPress ブロックテーマ開発プロジェクトです。
テーマディレクトリ: wp-content/themes/my-theme/

## コーディング規約

- PHP: WordPress コーディング標準に従う
- CSS: FLOCSS + BEM 記法（クラス接頭辞: l- / c- / p- / u-）
- JS: ES6+ / バニラ JS（必要最小限）
- インラインCSS禁止
- 推測による装飾禁止（デザイン構造に基づいて実装）

## CSS設計（FLOCSS）

- Foundation: リセット・変数・ミックスイン・ベース
- Layout: l-header / l-footer / l-main / l-container
- Object/Component: c-button / c-card など再利用パーツ
- Object/Project: p-article など特定ページ固有
- Object/Utility: u-text-center / u-mt-lg など補助クラス

## Sass構成

- src/scss/ がソース（@use でモジュール管理）
- Vite でビルド → assets/css/style.css, assets/js/main.js
- ネスト最大3階層
- グローバル変数: foundation/\_variables.scss
- ミックスイン: foundation/\_mixins.scss

## ブレークポイント（モバイルファースト）

- sm: 640px / md: 768px / lg: 1024px / xl: 1280px

## アクセシビリティ

- 全 img に alt 必須（装飾画像は alt=""）
- 見出し階層（h1〜h6）を適切に使用
- フォーカス管理: :focus-visible で対応
- aria-expanded / hidden でモーダル・ドロワー制御

## 開発環境

- ローカル URL: http://localhost:8080
- Docker Compose で管理
- ビルド: cd wp-content/themes/my-theme && npm run dev

