@extends('layouts.app')

@section('description', 'Writing, art, tutorials and projects by Filip Rastovic.')

@section('content')

<header class="header" style="padding-bottom: 32px;">
  <h1 class="avatar-name" style="margin-bottom: 8px;">Blog</h1>
  <p style="font-size: 18px; color: var(--text-muted);">Writing, art, tutorials and projects.</p>
</header>

{{-- Design & CRO --}}
<div class="section-label">Design &amp; CRO</div>
<div class="links-list" style="margin-bottom: 32px;">
  <a href="/blog/dtc-ecommerce-cro" class="link-item">
    <div class="link-text">
      <strong>DTC E-Commerce CRO – Usability</strong>
      <span>How UI redesigns increase conversion rates without increasing ad spend</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/daily-ui" class="link-item">
    <div class="link-text">
      <strong>100 Daily UI Challenge</strong>
      <span>100 daily UI design exercises</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
</div>

{{-- 3D Art --}}
<div class="section-label">3D Art</div>
<div class="links-list" style="margin-bottom: 32px;">
  <a href="/blog/structure-3d-abstract" class="link-item">
    <div class="link-text">
      <strong>Structure – 3D Abstract Geometric Composition</strong>
      <span>9 abstract renders, 2022</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/funky-town" class="link-item">
    <div class="link-text">
      <strong>Funky Town – 3D Stylized House City</strong>
      <span>18 renders, Cinema 4D + Octane Render</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/isometric-houses" class="link-item">
    <div class="link-text">
      <strong>Isometric Houses 3D Art</strong>
      <span>9 isometric house renders</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/silvermoon-town" class="link-item">
    <div class="link-text">
      <strong>Silvermoon Town – Abstract Compositions</strong>
      <span>26 renders inspired by Peter Tarka and Omar Aqil</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/scifi-pi-enclosure" class="link-item">
    <div class="link-text">
      <strong>Sci-Fi Raspberry Pi Enclosure</strong>
      <span>CAD modeling practice</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
</div>

{{-- Motion & Creative Code --}}
<div class="section-label">Motion &amp; Creative Code</div>
<div class="links-list" style="margin-bottom: 32px;">
  <a href="/blog/retro-loop" class="link-item">
    <div class="link-text">
      <strong>Retro Loop Music Visual</strong>
      <span>Cinema 4D + Octane Render, following Kidmograph's course</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/perlin-flow" class="link-item">
    <div class="link-text">
      <strong>Generative Perlin Flow – Programmer Art</strong>
      <span>An old Processing sketch</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/generative-animation" class="link-item">
    <div class="link-text">
      <strong>Generative Animation [Unity 2D]</strong>
      <span>Built with tools developed for Trial and Terror</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
</div>

{{-- Tutorials --}}
<div class="section-label">Tutorials</div>
<div class="links-list" style="margin-bottom: 32px;">
  <a href="/blog/bootstrap-resume-tutorial" class="link-item">
    <div class="link-text">
      <strong>Bootstrap Resume Portfolio – Code-Along Tutorial</strong>
      <span>Bootstrap 4, HTML, SCSS, JavaScript &amp; jQuery</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/bootstrap-chat-tutorial" class="link-item">
    <div class="link-text">
      <strong>Bootstrap Chat App UI – Code-Along Tutorial</strong>
      <span>HTML, CSS, SCSS - June 2019</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
</div>

{{-- Games --}}
<div class="section-label">Games</div>
<div class="links-list" style="margin-bottom: 52px;">
  <a href="/blog/trial-and-terror" class="link-item">
    <div class="link-text">
      <strong>Trial And Terror – My Video Game</strong>
      <span>Puzzle-platformer on Steam, Newgrounds &amp; Armor Games</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
  <a href="/blog/leap-of-faith" class="link-item">
    <div class="link-text">
      <strong>Leap of Faith – My Video Game</strong>
      <span>Minimalist 2D memory puzzle, 2016</span>
    </div>
    <svg class="link-arrow" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 13L13 1M13 1H5M13 1v8"/></svg>
  </a>
</div>

@endsection
