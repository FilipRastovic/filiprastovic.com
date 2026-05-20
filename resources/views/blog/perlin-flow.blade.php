@extends('layouts.app')

@section('description', 'Generative Perlin Flow programmer art - one of my old Processing sketches.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">Generative Art</span>
      <span class="article-tag">Creative Code</span>
    </div>
    <h1 class="article-title">Generative Perlin Flow – Programmer Art</h1>
    <time class="article-date" datetime="2024-01-01">2024</time>
  </header>

  <div class="article-body">
    <p class="article-intro">One of my old sketches.</p>

    <div class="article-video-wrap">
      <video controls preload="metadata" src="/images/blog/perlin-flow.mp4"></video>
    </div>
  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">Processing</span>
    </div>
  </div>

</article>

@endsection
