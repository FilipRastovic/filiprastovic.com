@extends('layouts.app')

@section('description', '3D abstract composition renders inspired by Peter Tarka and Omar Aqil.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">3D Modeling</span>
      <span class="article-tag">Art</span>
      <span class="article-tag">Design</span>
    </div>
    <h1 class="article-title">Silvermoon Town – Abstract Compositions</h1>
    <time class="article-date" datetime="2024-01-01">2024</time>
  </header>

  <div class="article-body">
    <p class="article-intro">Some renders I did inspired by Peter Tarka and Omar Aqil.</p>

    <div class="article-gallery">
      @foreach([
        'silvermoon-1.jpg','silvermoon-2.jpg','silvermoon-3.jpg','silvermoon-4.jpg',
        'silvermoon-5.jpg','silvermoon-6.jpg','silvermoon-7.jpg','silvermoon-8.jpg',
        'silvermoon-9.jpg','silvermoon-10.jpg','silvermoon-11.jpg','silvermoon-12.jpg',
        'silvermoon-13.jpg','silvermoon-14.jpg','silvermoon-14b.jpg','silvermoon-15.jpg',
        'silvermoon-16.jpg','silvermoon-17.jpg','silvermoon-18.jpg','silvermoon-19.jpg',
        'silvermoon-20.jpg','silvermoon-21.jpg','silvermoon-22.jpg','silvermoon-23.jpg',
        'silvermoon-24.jpg','silvermoon-25.jpg',
      ] as $file)
        <a href="/images/blog/{{ $file }}" class="article-gallery-item" target="_blank">
          <img src="/images/blog/{{ $file }}" alt="Silvermoon Town render" loading="lazy" />
        </a>
      @endforeach
    </div>
  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">Cinema 4D</span>
    </div>
  </div>

</article>

@endsection
