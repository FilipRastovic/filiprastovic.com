@extends('layouts.app')

@section('description', 'Isometric 3D house renders.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">3D Modeling</span>
      <span class="article-tag">Art</span>
    </div>
    <h1 class="article-title">Isometric Houses 3D Art</h1>
    <time class="article-date" datetime="2024-01-01">2024</time>
  </header>

  <div class="article-body">
    <p class="article-intro">Some houses.</p>

    <div class="article-gallery">
      @foreach([
        ['iso-houses-1.png','Isometric house 1'],
        ['iso-houses-2.png','Isometric house 2'],
        ['iso-houses-3.png','Isometric house 3'],
        ['iso-houses-4.png','Isometric house 4'],
        ['iso-houses-5.jpg','Isometric house 5'],
        ['iso-houses-6.png','Isometric house 6'],
        ['iso-houses-7.jpg','Isometric house 7'],
        ['iso-houses-8.png','Isometric house 8'],
        ['iso-houses-9.png','Isometric house 9'],
      ] as [$file, $alt])
        <a href="/images/blog/{{ $file }}" class="article-gallery-item" target="_blank">
          <img src="/images/blog/{{ $file }}" alt="{{ $alt }}" loading="lazy" />
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
