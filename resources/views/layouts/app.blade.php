<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Filip Rastovic – Senior Shopify Developer & Full-Stack Software Engineer | Serbia' }}</title>
  <meta name="description" content="@yield('description', 'Filip Rastovic is a Senior Shopify Developer and Full-Stack Software Engineer based in Novi Sad, Serbia, with 10+ years of web development experience and a Bachelor\'s degree in Software Engineering. Building high-converting Shopify stores for global brands including Google, Johnson & Johnson, and Cosy House Collection.')" />
  <meta name="author" content="Filip Rastovic" />
  <meta name="keywords" content="Senior Shopify Developer, Shopify Developer Serbia, Shopify Expert Serbia, Full-Stack Software Engineer, Shopify Plus Developer, Liquid Developer, Hydrogen, Remix, Laravel, E-Commerce Solutions Architect, Novi Sad Web Developer, Filip Rastovic" />
  <meta name="robots" content="index, follow, max-image-preview:large" />
  <meta name="language" content="English" />
  <meta name="revisit-after" content="7 days" />
  <meta name="geo.region" content="RS-06" />
  <meta name="geo.placename" content="Novi Sad, Serbia" />
  <meta name="geo.position" content="45.2671;19.8335" />
  <meta name="ICBM" content="45.2671, 19.8335" />
  @php
    $isArticle    = !empty($articleMeta);
    $canonicalUrl = 'https://filiprastovic.com' . ($currentPath ?? '/');
    $ogImage      = ($isArticle && !empty($articleMeta['image']))
                    ? 'https://filiprastovic.com' . $articleMeta['image']
                    : 'https://filiprastovic.com/images/filip.png';
  @endphp
  <link rel="canonical" href="{{ $canonicalUrl }}" />
  <meta property="og:title" content="{{ $title ?? 'Filip Rastovic – Senior Shopify Developer & Full-Stack Software Engineer | Serbia' }}" />
  <meta property="og:description" content="@yield('description', 'Senior Shopify Developer and Full-Stack Software Engineer based in Novi Sad, Serbia. 10+ years of web development experience. Bachelor\'s in Software Engineering.')" />
  <meta property="og:type" content="{{ $isArticle ? 'article' : 'website' }}" />
  <meta property="og:url" content="{{ $canonicalUrl }}" />
  <meta property="og:image" content="{{ $ogImage }}" />
  @if(!$isArticle || empty($articleMeta['image']))
  <meta property="og:image:width" content="308" />
  <meta property="og:image:height" content="308" />
  @endif
  <meta property="og:site_name" content="Filip Rastovic" />
  <meta property="og:locale" content="en_GB" />
  @if($isArticle)
  <meta property="article:published_time" content="{{ $articleMeta['date'] }}T00:00:00+02:00" />
  <meta property="article:modified_time" content="{{ $articleMeta['modified'] }}T00:00:00+02:00" />
  <meta property="article:author" content="https://filiprastovic.com/" />
  @endif
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{ $title ?? 'Filip Rastovic – Senior Shopify Developer & Full-Stack Software Engineer | Serbia' }}" />
  <meta name="twitter:description" content="@yield('description', 'Senior Shopify Developer and Full-Stack Software Engineer based in Novi Sad, Serbia. 10+ years of experience.')" />
  <meta name="twitter:image" content="{{ $ogImage }}" />
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Filip Rastovic",
    "alternateName": ["Filip Rastović", "Филип Растовић"],
    "url": "https://filiprastovic.com/",
    "image": "https://filiprastovic.com/images/filip.png",
    "jobTitle": "Senior Shopify Developer & Full-Stack Software Engineer",
    "description": "Senior Shopify Developer and Full-Stack Software Engineer based in Novi Sad, Serbia, with a Bachelor's degree in Software Engineering and 10+ years of professional web development experience.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Novi Sad",
      "addressRegion": "Vojvodina",
      "addressCountry": "Serbia"
    },
    "nationality": {
      "@type": "Country",
      "name": "Serbia"
    },
    "alumniOf": {
      "@type": "EducationalOrganization",
      "name": "Bachelor's degree in Software Engineering"
    },
    "hasCredential": {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "degree",
      "educationalLevel": "Bachelor's degree",
      "name": "Bachelor's degree in Software Engineering"
    },
    "knowsAbout": ["Shopify", "Shopify Plus", "Liquid", "Hydrogen", "Remix", "JavaScript", "TypeScript", "React", "Next.js", "Node.js", "PHP", "Laravel", "SQL", "Python", "GraphQL", "Storefront API", "Shopify Admin API", "Conversion Rate Optimization", "A/B Testing", "Full-Stack Web Development", "E-commerce Development", "Performance Optimization"],
    "knowsLanguage": ["English", "Serbian"],
    "sameAs": [
      "https://www.linkedin.com/in/rastovicfilip/",
      "https://github.com/FilipRastovic",
      "https://www.behance.net/rastovicfilip",
      "https://codepen.io/FilipRastovic"
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Filip Rastovic",
    "url": "https://filiprastovic.com/",
    "description": "Portfolio of Filip Rastovic, Senior Shopify Developer and Full-Stack Software Engineer based in Novi Sad, Serbia.",
    "inLanguage": "en-GB",
    "author": {
      "@type": "Person",
      "name": "Filip Rastovic",
      "url": "https://filiprastovic.com/"
    }
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Who is Filip Rastovic?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Filip Rastovic is a Senior Shopify Developer and Full-Stack Software Engineer based in Novi Sad, Serbia. He holds a Bachelor's degree in Software Engineering and has 10+ years of professional web development experience working with global brands including Google, Johnson & Johnson, Cosy House Collection, Bare Home, Linjer, and Hey Nutrition."
        }
      },
      {
        "@type": "Question",
        "name": "Where is Filip Rastovic based?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Filip Rastovic is based in Novi Sad, Serbia (GMT+2) and works remotely with clients worldwide. He is fluent in English and Serbian."
        }
      },
      {
        "@type": "Question",
        "name": "What does Filip Rastovic do?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Filip is a Senior Shopify Developer and Full-Stack Software Engineer. He builds high-converting custom Shopify stores, Shopify Plus implementations, headless Shopify (Hydrogen / Remix) builds, and bespoke web applications. His work blends software engineering, conversion rate optimization (CRO), and product thinking."
        }
      },
      {
        "@type": "Question",
        "name": "What is Filip Rastovic's tech stack?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shopify (Liquid, Hydrogen, Remix, Storefront and Admin GraphQL APIs), JavaScript, TypeScript, React, Next.js, Node.js, PHP, Laravel, Python, SQL, Tailwind CSS, Figma, and Cinema 4D for 3D work."
        }
      },
      {
        "@type": "Question",
        "name": "How many years of experience does Filip Rastovic have?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Filip Rastovic has 10+ years of professional web development experience and holds a Bachelor's degree in Software Engineering."
        }
      },
      {
        "@type": "Question",
        "name": "Is Filip Rastovic available for new Shopify projects?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Filip is currently accepting new Shopify development projects for Q3 and Q4 of 2026 and is available remotely worldwide from Novi Sad, Serbia."
        }
      }
    ]
  }
  </script>
  @if($isArticle)
  @php
    $articleSchema = array_filter([
      '@context'        => 'https://schema.org',
      '@type'           => $articleMeta['type'],
      'headline'        => $title ?? '',
      'description'     => $articleMeta['description'],
      'image'           => !empty($articleMeta['image']) ? 'https://filiprastovic.com' . $articleMeta['image'] : null,
      'datePublished'   => $articleMeta['date'],
      'dateModified'    => $articleMeta['modified'],
      'author'          => ['@type' => 'Person', 'name' => 'Filip Rastovic', 'url' => 'https://filiprastovic.com/'],
      'publisher'       => ['@type' => 'Person', 'name' => 'Filip Rastovic', 'url' => 'https://filiprastovic.com/'],
      'mainEntityOfPage'=> $canonicalUrl,
      'keywords'        => implode(', ', $articleMeta['tags']),
    ], fn($v) => $v !== null);
    $breadcrumbSchema = [
      '@context'        => 'https://schema.org',
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://filiprastovic.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://filiprastovic.com/blog'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $title ?? ''],
      ],
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($articleSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
  <script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
  @endif
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #F7F3ED;
      --bg-2: #EDEAE2;
      --bg-3: #E4E0D8;
      --bg-card: #FFFDF9;
      --border: rgba(28,26,23,0.10);
      --border-strong: rgba(28,26,23,0.18);
      --text: #1C1A17;
      --text-muted: #6B6459;
      --text-dim: #9E9287;
      --accent: #C8A882;
      --accent-2: #8B6F4E;
      --green: #16a34a;
      --serif: 'Playfair Display', Georgia, serif;
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
      background: linear-gradient(90deg, #2e1f0e 0%, #1C1A17 40%, #1a1a2e 100%);
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
      background: #C8A882;
      flex-shrink: 0;
    }
    @keyframes ticker { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

    /* ── NAV ── */
    nav {
      position: sticky;
      top: 0;
      z-index: 100;
      background: rgba(247,243,237,0.93);
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
      font-family: var(--serif);
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
      font-family: var(--serif);
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
      margin-bottom: 52px;
    }
    .link-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 0;
      text-decoration: none;
      color: var(--text);
      border-bottom: 1px solid var(--border);
      transition: color 0.15s ease;
      gap: 14px;
    }
    .link-item:first-child { border-top: 1px solid var(--border); }
    .link-item:hover { color: var(--accent-2); }
    .link-item:hover .link-text strong {
      text-decoration-color: var(--accent-2);
    }
    .link-item:hover .link-arrow { transform: translate(3px, -3px); opacity: 1; color: var(--accent-2); }
    .link-text strong {
      display: block;
      font-family: var(--serif);
      font-size: 18px;
      font-weight: 600;
      color: inherit;
      margin-bottom: 2px;
      text-decoration: underline;
      text-underline-offset: 3px;
      text-decoration-color: var(--border-strong);
      transition: text-decoration-color 0.15s ease;
    }
    .link-text span { font-size: 13px; color: var(--text-dim); }
    .link-arrow {
      width: 14px;
      height: 14px;
      color: var(--text-dim);
      flex-shrink: 0;
      transition: transform 0.15s ease, opacity 0.15s ease, color 0.15s ease;
      opacity: 0.5;
    }

    /* ── STACK ── */
    .stack-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1px;
      background: var(--border);
      border-radius: 8px;
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
      border-radius: 6px;
      padding: 20px;
      transition: border-color 0.15s ease, box-shadow 0.15s ease;
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }
    .now-card:hover { border-color: var(--border-strong); box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
    .now-card.accent {
      background: linear-gradient(145deg, #3a2a18 0%, #1C1A17 70%);
      border-color: #1C1A17;
    }
    .now-card.accent .now-card-label { color: rgba(247,243,237,0.45); }
    .now-card.accent .now-card-value { color: #F7F3ED; }
    .now-card.accent .now-card-sub { color: rgba(247,243,237,0.60); }
    .now-card-label {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.10em;
      text-transform: uppercase;
      color: var(--text-dim);
      margin-bottom: 8px;
    }
    .now-card-value { font-family: var(--serif); font-size: 17px; font-weight: 600; color: var(--text); line-height: 1.3; }
    .now-card-sub { font-size: 13px; color: var(--text-muted); margin-top: 4px; }

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
      border-radius: 6px;
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
      border-radius: 8px;
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
      border-radius: 6px;
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
      background: rgba(200,168,130,0.12);
      border: 1px solid rgba(200,168,130,0.32);
      border-radius: 6px;
      padding: 3px 8px;
    }
    .article-title {
      font-family: var(--serif);
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
      border-radius: 6px;
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
    .article-gallery-item { display: block; border-radius: 6px; overflow: hidden; border: 1px solid var(--border); transition: border-color 0.2s ease; }
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
      .header { padding: 36px 0 32px; }
      .avatar-wrap, .avatar-wrap img { width: 160px; height: 160px; }
      .avatar-name { font-size: 22px; }
      .avatar-role { font-size: 14px; }
      .header-roles span { font-size: 12px; }
      .header p { font-size: 15px; line-height: 1.7; }
      .stack-grid { grid-template-columns: repeat(2, 1fr); }
      .now-grid { grid-template-columns: 1fr; }
      .now-card-value { font-size: 15px; }
      .art-grid { grid-template-columns: repeat(2, 1fr); }
      .nav-links { display: none; }
      .nav-hamburger { display: flex; }
      .link-text strong { font-size: 15px; }
      .link-text span { font-size: 12px; }
      .about-text p { font-size: 15px; line-height: 1.7; }
      .skills-list li { font-size: 14px; }
      .section-note { font-size: 15px; }
      .article-title { font-size: 22px; }
      .article-intro { font-size: 15px; }
      .article-list li { font-size: 15px; }
      .divider { margin: 36px 0; }
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
