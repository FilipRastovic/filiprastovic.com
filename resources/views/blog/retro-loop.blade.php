@extends('layouts.app')

@section('description', 'Retro Loop Music Visual - made in Cinema 4D and Octane Render following the course from Kidmograph.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">Motion</span>
      <span class="article-tag">3D</span>
      <span class="article-tag">Music Visual</span>
    </div>
    <h1 class="article-title">Retro Loop Music Visual</h1>
    <p class="article-date">2024</p>
  </header>

  <div class="article-body">
    <p class="article-intro">Made in Cinema 4D and Octane Render following the course from Kidmograph.</p>

    <div class="article-video-wrap">
      <video controls preload="metadata" src="/images/blog/retro-loop.mp4"></video>
    </div>
  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">Cinema 4D</span>
      <span class="article-tag">Octane Render</span>
    </div>
  </div>

</article>

@endsection
