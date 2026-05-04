<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Filip Rastovic – Shopify Developer' }}</title>
  <meta name="description" content="@yield('description', 'Shopify developer building high-converting stores for ambitious brands.')" />
  <meta property="og:title" content="{{ $title ?? 'Filip Rastovic – Shopify Developer' }}" />
  <meta property="og:description" content="@yield('description', 'Shopify developer building high-converting stores for ambitious brands.')" />
  <meta property="og:type" content="website" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Syne:wght@700;800&display=swap" onload="this.rel='stylesheet'" />
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Syne:wght@700;800&display=swap" /></noscript>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #f9f9f8;
      --bg-2: #f2f2f0;
      --bg-3: #eaeae7;
      --bg-card: #ffffff;
      --border: rgba(0,0,0,0.10);
      --border-strong: rgba(0,0,0,0.18);
      --text: #0d0d0c;
      --text-muted: #3d4350;
      --text-dim: #555f6e;
      --accent: #d97706;
      --accent-2: #b45309;
      --green: #16a34a;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
      min-height: 100vh;
    }

    /* ── TICKER ── */
    .ticker {
      background: #0d0d0c;
      overflow: hidden;
      height: 32px;
      display: flex;
      align-items: center;
    }
    .ticker-track {
      display: flex;
      gap: 0;
      animation: ticker 28s linear infinite;
      white-space: nowrap;
      will-change: transform;
    }
    .ticker-track:hover { animation-play-state: paused; }
    .ticker-item {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 0 32px;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.65);
      flex-shrink: 0;
    }
    .ticker-item .ticker-dot {
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: #d97706;
      flex-shrink: 0;
    }
    @keyframes ticker { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

    /* ── NAV ── */
    nav {
      position: sticky;
      top: 0;
      z-index: 100;
      background: rgba(242,242,240,0.96);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
    }
    .nav-inner {
      max-width: 700px;
      margin: 0 auto;
      padding: 0 24px;
      height: 52px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .nav-name {
      font-family: 'Syne', sans-serif;
      font-size: 18px;
      font-weight: 700;
      color: var(--text);
      text-decoration: none;
      letter-spacing: -0.02em;
    }
    .nav-links {
      display: flex;
      align-items: center;
      gap: 28px;
      list-style: none;
    }
    .nav-links a {
      font-size: 16px;
      font-weight: 500;
      color: var(--text-muted);
      text-decoration: none;
      transition: color 0.15s ease;
    }
    .nav-links a:hover { color: var(--text); }

    /* ── WRAPPER ── */
    .wrap {
      max-width: 700px;
      margin: 0 auto;
      padding: 0 24px 100px;
    }

    /* ── HEADER ── */
    .header {
      padding: 64px 0 48px;
    }
    .avatar-row {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 20px;
      margin-bottom: 32px;
    }
    .avatar-wrap {
      position: relative;
      width: 288px;
      height: 288px;
      flex-shrink: 0;
    }
    .avatar-wrap img {
      width: 288px;
      height: 288px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      border: 2px solid var(--border-strong);
    }
    .avatar-meta { display: flex; flex-direction: column; gap: 6px; }
    .avatar-name {
      font-family: 'Syne', sans-serif;
      font-size: 26px;
      font-weight: 700;
      color: var(--text);
      letter-spacing: -0.02em;
    }
    .avatar-role {
      font-size: 16px;
      color: var(--text-muted);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .avatar-role::before {
      content: '';
      display: inline-block;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--green);
      animation: pulse 2s infinite;
      flex-shrink: 0;
    }
    @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.3} }

    .header-roles {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 20px;
    }
    .header-roles span {
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 0.04em;
      color: var(--text-muted);
      background: var(--bg-2);
      border: 1px solid var(--border-strong);
      border-radius: 6px;
      padding: 4px 10px;
    }
    .header p {
      font-size: 19px;
      color: var(--text-muted);
      line-height: 1.85;
    }
    .header p strong { color: var(--text); font-weight: 600; }

    /* ── DIVIDER ── */
    .divider { height: 1px; background: var(--border); margin: 52px 0; }

    /* ── SECTION LABEL ── */
    .section-label {
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 16px;
    }

    /* ── LINKS ── */
    .links-list {
      display: flex;
      flex-direction: column;
      border: 1px solid var(--border);
      border-radius: 14px;
      overflow: hidden;
      background: var(--bg-card);
      margin-bottom: 52px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    }
    .link-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 15px 20px;
      text-decoration: none;
      color: var(--text);
      border-bottom: 1px solid var(--border);
      transition: background 0.12s ease;
      gap: 14px;
    }
    .link-item:last-child { border-bottom: none; }
    .link-item:hover { background: var(--bg); }
    .link-item:hover .link-arrow { transform: translate(2px, -2px); opacity: 1; }
.link-text strong {
      display: block;
      font-size: 17px;
      font-weight: 600;
      color: var(--text);
      margin-bottom: 1px;
    }
    .link-text span { font-size: 14px; color: var(--text-dim); }
    .link-arrow {
      width: 14px;
      height: 14px;
      color: var(--text-dim);
      flex-shrink: 0;
      transition: transform 0.15s ease, opacity 0.15s ease;
      opacity: 0.4;
    }

    /* ── STACK ── */
    .stack-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1px;
      background: var(--border);
      border-radius: 14px;
      overflow: hidden;
      border: 1px solid var(--border);
      margin-bottom: 52px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    }
    .stack-item {
      background: var(--bg-card);
      padding: 22px 16px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      text-align: center;
      transition: background 0.12s ease;
    }
    .stack-item:hover { background: var(--bg); }
    .stack-emoji { font-size: 26px; line-height: 1; }
    .stack-name { font-size: 14px; font-weight: 600; color: var(--text-muted); }
    .stack-tag { font-size: 12px; color: var(--text-dim); font-weight: 500; }

    /* ── NOW ── */
    .now-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin-bottom: 52px;
    }
    .now-card {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 20px;
      transition: border-color 0.15s ease, box-shadow 0.15s ease;
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    .now-card:hover { border-color: var(--border-strong); box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
    .now-card.accent {
      background: rgba(217,119,6,0.04);
      border-color: rgba(217,119,6,0.20);
    }
    .now-card-label {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--text-dim);
      margin-bottom: 6px;
    }
    .now-card-value { font-size: 17px; font-weight: 600; color: var(--text); line-height: 1.4; }
    .now-card-sub { font-size: 14px; color: var(--text-muted); margin-top: 3px; }

    /* ── ABOUT ── */
    .about-block { margin-bottom: 52px; }
    .about-text { display: flex; flex-direction: column; gap: 14px; }
    .about-text p { font-size: 18px; color: var(--text-muted); line-height: 1.8; }
    .about-text strong { color: var(--text); font-weight: 600; }
    .skills-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 6px;
      margin-top: 4px;
    }
    .skills-list li {
      font-size: 16px;
      color: var(--text-muted);
    }

    /* ── SECTION NOTE ── */
    .section-note {
      font-size: 17px;
      color: var(--text-muted);
      line-height: 1.8;
      margin-bottom: 16px;
    }
    .section-note strong { color: var(--text); }

    /* ── ART GRID ── */
    .art-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-bottom: 52px;
    }
    .art-grid img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      display: block;
      border: 1px solid var(--border);
      transition: transform 0.2s ease, border-color 0.2s ease;
    }
    .art-grid img:hover {
      transform: scale(1.02);
      border-color: var(--border-strong);
    }

    /* ── NAV DROPDOWN ── */
    .nav-has-dropdown { position: relative; }
    /* Invisible bridge fills the gap between the nav item and dropdown panel */
    .nav-has-dropdown::after {
      content: '';
      position: absolute;
      top: 100%;
      left: -20px;
      right: -20px;
      height: 12px;
    }
    .nav-dropdown {
      position: absolute;
      top: calc(100% + 10px);
      left: 50%;
      transform: translateX(-50%) translateY(-6px);
      min-width: 260px;
      max-height: 80vh;
      overflow-y: auto;
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.10);
      padding: 6px;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.15s ease, transform 0.15s ease;
      z-index: 200;
    }
    .nav-has-dropdown:hover .nav-dropdown,
    .nav-has-dropdown:focus-within .nav-dropdown {
      opacity: 1;
      pointer-events: all;
      transform: translateX(-50%) translateY(0);
    }
    .nav-dropdown a {
      display: block;
      padding: 10px 14px;
      font-size: 15px !important;
      font-weight: 500 !important;
      color: var(--text-muted) !important;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.12s ease, color 0.12s ease !important;
      white-space: nowrap;
    }
    .nav-dropdown a:hover { background: var(--bg-2); color: var(--text) !important; }
    .nav-dropdown-group {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--text-dim);
      padding: 8px 14px 4px;
      margin-top: 2px;
    }
    .nav-dropdown-group:first-child { margin-top: 0; }

    /* ── ARTICLE LINKS ── */
    .article-body a { color: var(--accent); text-decoration: underline; text-underline-offset: 3px; transition: color 0.15s ease; }
    .article-body a:hover { color: var(--accent-2); }

    /* ── ARTICLE VIDEO ── */
    .article-video-wrap {
      border-radius: 12px;
      overflow: hidden;
      margin-bottom: 32px;
      border: 1px solid var(--border);
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      background: #000;
    }
    .article-video-wrap video { width: 100%; display: block; }

    .nav-chevron {
      font-size: 10px;
      opacity: 0.5;
      margin-left: 3px;
      display: inline-block;
      transition: transform 0.15s ease;
    }
    .nav-has-dropdown:hover .nav-chevron { transform: rotate(180deg); opacity: 0.8; }

    /* ── HAMBURGER ── */
    .nav-hamburger {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 6px 4px;
      color: var(--text);
      flex-direction: column;
      gap: 5px;
      align-items: flex-end;
    }
    .nav-hamburger span {
      display: block;
      height: 2px;
      background: currentColor;
      border-radius: 2px;
      transition: transform 0.2s ease, opacity 0.2s ease, width 0.2s ease;
    }
    .nav-hamburger span:nth-child(1) { width: 20px; }
    .nav-hamburger span:nth-child(2) { width: 13px; }
    .nav-hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
    .nav-hamburger.open span:nth-child(2) { width: 20px; transform: translateY(0) rotate(-45deg); margin-top: -2px; }

    /* ── MOBILE MENU ── */
    .nav-mobile {
      position: fixed;
      inset: 0;
      background: var(--bg);
      z-index: 150;
      padding: 0 24px 40px;
      transform: translateX(100%);
      transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
      overflow-y: auto;
    }
    .nav-mobile.open { transform: translateX(0); }
    .nav-mobile-header {
      height: 52px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--border);
      margin-bottom: 20px;
    }
    .nav-mobile-close {
      background: none;
      border: none;
      cursor: pointer;
      color: var(--text-dim);
      font-size: 20px;
      padding: 4px 8px;
      line-height: 1;
    }
    .nav-mobile-links { list-style: none; display: flex; flex-direction: column; }
    .nav-mobile-links > li > a,
    .nav-mobile-section {
      display: block;
      font-size: 22px;
      font-weight: 600;
      color: var(--text);
      text-decoration: none;
      padding: 14px 0;
      border-bottom: 1px solid var(--border);
    }
    .nav-mobile-sublinks {
      list-style: none;
      display: flex;
      flex-direction: column;
      padding-left: 14px;
      border-bottom: 1px solid var(--border);
    }
    .nav-mobile-sublinks a {
      display: block;
      font-size: 17px;
      font-weight: 500;
      color: var(--text-muted);
      text-decoration: none;
      padding: 11px 0;
    }
    .nav-mobile-sublinks a:hover { color: var(--text); }

    /* ── ARTICLE ── */
    .article { padding: 48px 0 0; }
    .article-header { margin-bottom: 40px; }
    .article-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 14px; }
    .article-tag {
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--accent);
      background: rgba(217,119,6,0.08);
      border: 1px solid rgba(217,119,6,0.22);
      border-radius: 6px;
      padding: 3px 8px;
    }
    .article-title {
      font-family: 'Syne', sans-serif;
      font-size: 32px;
      font-weight: 800;
      color: var(--text);
      letter-spacing: -0.02em;
      line-height: 1.25;
      margin-bottom: 10px;
    }
    .article-date { font-size: 14px; color: var(--text-dim); }
    .article-intro {
      font-size: 19px;
      color: var(--text-muted);
      line-height: 1.85;
      margin-bottom: 36px;
    }
    .article-figure { margin: 32px 0; }
    .article-figure img {
      width: 100%;
      border-radius: 12px;
      display: block;
      border: 1px solid var(--border);
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
    }
    .article-list {
      margin: 0 0 32px;
      padding-left: 22px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .article-list li { font-size: 18px; color: var(--text-muted); line-height: 1.7; }
    .article-footer {
      margin-top: 52px;
      padding-top: 32px;
      border-top: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }
    .article-back {
      font-size: 15px;
      font-weight: 500;
      color: var(--text-muted);
      text-decoration: none;
      transition: color 0.15s ease;
    }
    .article-back:hover { color: var(--text); }
    .article-gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-bottom: 32px;
    }
    .article-gallery-item { display: block; border-radius: 10px; overflow: hidden; border: 1px solid var(--border); transition: border-color 0.2s ease; }
    .article-gallery-item:hover { border-color: var(--border-strong); }
    .article-gallery-item img { width: 100%; display: block; transition: transform 0.2s ease; }
    .article-gallery-item:hover img { transform: scale(1.03); }
    @media (max-width: 600px) { .article-gallery { grid-template-columns: repeat(2, 1fr); } }

    /* ── FOOTER ── */
    .footer {
      padding-top: 40px;
      border-top: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 8px;
    }
    .footer p { font-size: 14px; color: var(--text-dim); }
    .footer a { color: var(--text-dim); text-decoration: none; transition: color 0.15s ease; }
    .footer a:hover { color: var(--text-muted); }

    /* ── MOBILE ── */
    @media (max-width: 600px) {
      .wrap { padding: 0 16px 80px; }
      .header { padding: 48px 0 44px; }
      .avatar-wrap, .avatar-wrap img { width: 180px; height: 180px; }
      .stack-grid { grid-template-columns: repeat(2, 1fr); }
      .now-grid { grid-template-columns: 1fr; }
      .art-grid { grid-template-columns: repeat(2, 1fr); }
      .nav-links { display: none; }
      .nav-hamburger { display: flex; }
      .article-title { font-size: 26px; }
      .article-list li { font-size: 16px; }
    }
  </style>
  @stack('head')
</head>
<body>

  @include('partials.nav')

  <div class="wrap">
    <main>
      @yield('content')
    </main>
    @include('partials.footer')
  </div>

  @stack('scripts')

</body>
</html>
