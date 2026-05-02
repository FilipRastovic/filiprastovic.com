<nav id="nav">
  <div class="nav-inner">
    <a href="/" class="nav-name">Filip Rastovic</a>
    <ul class="nav-links">
      <li><a href="/#links">Links</a></li>
      <li><a href="/#about">About</a></li>
      <li><a href="/#stack">Stack</a></li>
      <li><a href="/#art">Art</a></li>
      <li><a href="/blog">Blog</a></li>
    </ul>
    <button class="nav-hamburger" id="nav-hamburger" aria-label="Open menu">
      <span></span>
      <span></span>
    </button>
  </div>
</nav>

{{-- Mobile menu --}}
<div class="nav-mobile" id="nav-mobile" aria-hidden="true">
  <div class="nav-mobile-header">
    <a href="/" class="nav-name">Filip Rastovic</a>
    <button class="nav-mobile-close" id="nav-mobile-close" aria-label="Close menu">✕</button>
  </div>
  <ul class="nav-mobile-links">
    <li><a href="/#links">Links</a></li>
    <li><a href="/#about">About</a></li>
    <li><a href="/#stack">Stack</a></li>
    <li><a href="/#art">Art</a></li>
    <li><a href="/blog">Blog</a></li>
  </ul>
</div>

@push('scripts')
<script>
  const nav = document.getElementById('nav');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 10);
  }, { passive: true });

  const hamburger = document.getElementById('nav-hamburger');
  const mobileMenu = document.getElementById('nav-mobile');
  const mobileClose = document.getElementById('nav-mobile-close');

  function openMenu() {
    mobileMenu.classList.add('open');
    mobileMenu.setAttribute('aria-hidden', 'false');
    hamburger.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    mobileMenu.classList.remove('open');
    mobileMenu.setAttribute('aria-hidden', 'true');
    hamburger.classList.remove('open');
    document.body.style.overflow = '';
  }

  hamburger.addEventListener('click', () => {
    mobileMenu.classList.contains('open') ? closeMenu() : openMenu();
  });
  mobileClose.addEventListener('click', closeMenu);

  mobileMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', closeMenu);
  });
</script>
@endpush
