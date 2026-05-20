@extends('layouts.app')

@section('description', 'A generative animation done in Unity 2D using tools developed for Trial and Terror.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">Generative Art</span>
      <span class="article-tag">Unity 2D</span>
    </div>
    <h1 class="article-title">Generative Animation [Unity 2D]</h1>
    <time class="article-date" datetime="2024-01-01">2024</time>
  </header>

  <div class="article-body">
    <p class="article-intro">A generative animation done in Unity 2D using the tools we've developed for our game Trial and Terror.</p>

    <div class="article-video-wrap">
      <video controls preload="metadata" src="/images/blog/generative-animation.mp4"></video>
    </div>
  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">Unity</span>
    </div>
  </div>

</article>

@endsection
