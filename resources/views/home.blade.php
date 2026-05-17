@extends('layouts.app')

@section('content')

  {{-- HEADER --}}
  <header class="header">
    <div class="avatar-row">
      <div class="avatar-wrap">
        <picture>
          <source srcset="/images/filip.webp" type="image/webp" />
          <img src="/images/filip.png" alt="Filip Rastovic – Senior Shopify Developer and Full-Stack Software Engineer based in Novi Sad, Serbia" width="308" height="308" fetchpriority="high" />
        </picture>
      </div>
      <div class="avatar-meta">
        <h1 class="avatar-name">Filip Rastovic</h1>
        <span class="avatar-role">Senior Shopify Developer · Novi Sad, Serbia</span>
      </div>
    </div>
    <div class="header-roles">
      <span>Senior Shopify Developer</span>
      <span>Full-Stack Software Engineer</span>
      <span>CRO Specialist</span>
    </div>
    <p>I'm a <strong>Senior Shopify Developer</strong> and <strong>Full-Stack Software Engineer</strong> based in <strong>Novi Sad, Serbia</strong>, with <strong>10+ years of professional web development experience</strong> and a <strong>Bachelor's degree in Software Engineering</strong>. I build high-converting Shopify stores, Shopify Plus implementations, headless Shopify (Hydrogen / Remix) builds, and custom web applications for global brands - working remotely worldwide. Outside of work I enjoy reading, music, guitar, gaming, gym, gardening &amp; landscaping. Used to live in the <strong>World of Warcraft</strong> as a teenager, defeating the Lich King with the guild <strong>&lt;Digital Crew&gt;</strong> that I led.</p>
  </header>

  {{-- NOW --}}
  <section id="now">
    <div class="section-label">Now</div>
    <div class="now-grid">
      <div class="now-card accent">
        <div class="now-card-label">Independent Contractor</div>
        <div class="now-card-value">Head of Web Dev</div>
        <div class="now-card-sub">Web dev & CRO</div>
      </div>
      <div class="now-card accent">
        <div class="now-card-label">Building</div>
        <div class="now-card-value">Lander.rs</div>
        <div class="now-card-sub">AI landing page builder for lead gen</div>
      </div>
      <div class="now-card">
        <div class="now-card-label">Location</div>
        <div class="now-card-value">Serbia</div>
        <div class="now-card-sub">GMT+2 · Available remotely</div>
      </div>
      <div class="now-card">
        <div class="now-card-label">Status</div>
        <div class="now-card-value">Open to projects</div>
        <div class="now-card-sub">Custom Shopify work</div>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  {{-- LINKS --}}
  <section id="links">
    <div class="section-label">Links</div>
    <div class="links-list">

      <a href="https://stargazerstudio.net/portfolio" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Web Development Portfolio</strong>
          <span>stargazerstudio.net/portfolio</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

       <a href="https://stargazerstudio.net/case-studies" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Case Studies (CRO)</strong>
          <span>stargazerstudio.net/case-studies</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

       <a href="https://lander.rs/" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Lander.rs</strong>
          <span>My no-code website builder app (Serbian)</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://github.com/FilipRastovic" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>GitHub</strong>
          <span>github.com/FilipRastovic</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://www.linkedin.com/in/rastovicfilip/" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>LinkedIn</strong>
          <span>linkedin.com/in/rastovicfilip</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://codepen.io/FilipRastovic" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Front-End Code Samples</strong>
          <span>codepen.io/FilipRastovic - Bootstrap experiments</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://www.newgrounds.com/portal/view/713592" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>My Video Game</strong>
          <span>newgrounds.com - Unity game dev</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://www.behance.net/rastovicfilip" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>3D Art Portfolio</strong>
          <span>behance.net/rastovicfilip - Cinema 4D work</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://filiprastovic.com/blog" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Blog</strong>
          <span>filiprastovic.com/blog</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

    </div>
  </section>

  <div class="divider"></div>

  {{-- ABOUT --}}
  <section id="about">
    <div class="section-label">About</div>
    <div class="about-block">
      <div class="about-text">
        <p>Senior Shopify Developer and full-stack software engineer with a <strong>Bachelor's degree in Software Engineering</strong> and <strong>10+ years of professional web development experience</strong>. I've worked with global brands including Google, Johnson &amp; Johnson, Cosy House Collection, Bare Home, Linjer, and Hey Nutrition. My work blends engineering, CRO principles, and product thinking - focusing on reliability, performance, and revenue impact.</p>
        <p>I work full-stack across the modern Shopify ecosystem (Liquid, Hydrogen, Remix, Storefront &amp; Admin GraphQL APIs) as well as PHP/Laravel, Node, SQL, and Python for tooling, migrations, and data work. Before specializing in Shopify and backend systems, I also worked in 3D (Cinema 4D, Octane Render) and shipped projects for major brands - which gives me an advantage on design-heavy builds and cross-functional teams.</p>
        <ul class="skills-list">
          <li>HTML, CSS, JavaScript, Liquid, Laravel, Next</li>
          <li>Python / JS scripting for migrations + tooling</li>
          <li>Database development + complex SQL</li>
          <li>Speed &amp; Performance Optimization</li>
          <li>CRO &amp; A/B Testing fundamentals</li>
          <li>UX/UI implementation from Figma</li>
          <li>Data-driven problem solving</li>
        </ul>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  {{-- STACK --}}
  <section id="stack">
    <div class="section-label">Stack</div>
    <div class="stack-grid">
      <div class="stack-item">
        <span class="stack-emoji">🛍️</span>
        <span class="stack-name">Shopify</span>
        <span class="stack-tag">Platform</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">💧</span>
        <span class="stack-name">Liquid</span>
        <span class="stack-tag">Templating</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">⚛️</span>
        <span class="stack-name">React</span>
        <span class="stack-tag">Hydrogen</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🎨</span>
        <span class="stack-name">CSS / Tailwind</span>
        <span class="stack-tag">Styling</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🔗</span>
        <span class="stack-name">GraphQL</span>
        <span class="stack-tag">Storefront API</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">⚡</span>
        <span class="stack-name">Remix</span>
        <span class="stack-tag">Framework</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🐘</span>
        <span class="stack-name">PHP</span>
        <span class="stack-tag">Backend</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🏗️</span>
        <span class="stack-name">Laravel</span>
        <span class="stack-tag">Framework</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🗄️</span>
        <span class="stack-name">SQL</span>
        <span class="stack-tag">Database</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🐍</span>
        <span class="stack-name">Python / Pandas</span>
        <span class="stack-tag">Data</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">📐</span>
        <span class="stack-name">Figma</span>
        <span class="stack-tag">Design</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🎬</span>
        <span class="stack-name">Cinema 4D</span>
        <span class="stack-tag">3D / Render</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">📝</span>
        <span class="stack-name">WordPress</span>
        <span class="stack-tag">CMS</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🟨</span>
        <span class="stack-name">JavaScript</span>
        <span class="stack-tag">Language</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🔌</span>
        <span class="stack-name">Shopify Apps</span>
        <span class="stack-tag">Extensions</span>
      </div>
      <div class="stack-item">
        <span class="stack-emoji">🖌️</span>
        <span class="stack-name">Photoshop</span>
        <span class="stack-tag">Design</span>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  {{-- MEDIA --}}
  <section id="media">
    <div class="section-label">Mentions in Media</div>
    <p class="section-note">I used to do 3D art a bit - it got kind of viral. Got offers from Google &amp; Microsoft.</p>
    <div class="links-list">

      <a href="https://www.growthsuite.net/conversion_masters/filip-rastovic" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Conversion Masters Interview</strong>
          <span>growthsuite.net</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://www.huntlancer.com/isometric-artists/#Filip_Rastovic_Serbia" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>26 Best Isometric Artists Across the Globe</strong>
          <span>huntlancer.com</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://everydaymonkey.com/serbian-artist-creates-3d-illustrations-that-look-like-they-were-made-in-the-60s/" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Serbian Artist Creates 3D Illustrations That Look Like They Were Made in the '60s</strong>
          <span>everydaymonkey.com</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://startit.rs/moderan-web-dizajn-workflow-u-sabackom-startit-centru/" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Kako izgleda proces rada modernog veb dizajnera?</strong>
          <span>startit.rs - meetup u šabačkom Startit Centru</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://loop.rs/glas-trzista/ko-su-frilenseri-i-kako-uspeti-u-frilensingu-successstory-by-filip/60dc6b8330370" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Ko Su Frilenseri i Kako Uspeti u Frilensingu?</strong>
          <span>loop.rs</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

      <a href="https://youtu.be/TRkVCAeisJk" class="link-item" target="_blank" rel="noopener">
        <div class="link-text">
          <strong>Kako do prvog klijenta na freelance platformama?</strong>
          <span>youtube.com</span>
        </div>
        <svg class="link-arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 13L13 3M13 3H7M13 3v6"/></svg>
      </a>

    </div>
  </section>

  <div class="divider"></div>

  {{-- 3D ART --}}
  <section id="art">
    <div class="section-label">3D Art</div>
    <p class="section-note">Rendered in <strong>Cinema 4D</strong> using <strong>Octane Render</strong> from 2020–2023. Google and Microsoft reached out off the back of this work. Traditional lighting &amp; composition throughout - one half lit, the other in shadow. <strong>Free to download</strong> - if you print it, send me a photo.</p>
    <div class="art-grid">
      <img src="/images/art-1.png" alt="3D Art 1" loading="lazy" width="819" height="1024" />
      <img src="/images/art-2.png" alt="3D Art 2" loading="lazy" width="819" height="1024" />
      <img src="/images/art-3.png" alt="3D Art 3" loading="lazy" width="1024" height="1024" />
      <img src="/images/art-4.png" alt="3D Art 4" loading="lazy" width="819" height="1024" />
      <img src="/images/art-5.png" alt="3D Art 5" loading="lazy" width="819" height="1024" />
      <img src="/images/art-6.png" alt="3D Art 6" loading="lazy" width="819" height="1024" />
      <img src="/images/art-7.png" alt="3D Art 7" loading="lazy" width="819" height="1024" />
      <img src="/images/art-8.png" alt="3D Art 8" loading="lazy" width="819" height="1024" />
      <img src="/images/art-9.png" alt="3D Art 9" loading="lazy" width="819" height="1024" />
      <img src="/images/art-10.png" alt="3D Art 10" loading="lazy" width="819" height="1024" />
    </div>
  </section>

@endsection
