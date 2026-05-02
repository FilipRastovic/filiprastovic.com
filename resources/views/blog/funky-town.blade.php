@extends('layouts.app')

@section('description', '18 3D renders of a stylized house city - personal project modeled in Cinema 4D and rendered in Octane Render.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">3D Modeling</span>
      <span class="article-tag">Art</span>
      <span class="article-tag">Design</span>
    </div>
    <h1 class="article-title">Funky Town – 3D Stylized House City</h1>
    <p class="article-date">2024</p>
  </header>

  <div class="article-body">
    <p class="article-intro">Personal project. Took some house ideas from Angelo Fernandez. Modeled in Cinema 4D, rendered in Octane Render.</p>

    <div class="article-gallery">
      @foreach([
        ['funky-town-1.jpg','Funky Town render 1'],
        ['funky-town-2.png','Funky Town render 2'],
        ['funky-town-3.png','Funky Town render 3'],
        ['funky-town-4.jpg','Funky Town render 4'],
        ['funky-town-5.jpg','Funky Town render 5'],
        ['funky-town-6.jpg','Funky Town render 6'],
        ['funky-town-7.jpg','Funky Town render 7'],
        ['funky-town-8.jpg','Funky Town render 8'],
        ['funky-town-9.jpg','Funky Town render 9'],
        ['funky-town-10.jpg','Funky Town render 10'],
        ['funky-town-11.jpg','Funky Town render 11'],
        ['funky-town-12.jpg','Funky Town render 12'],
        ['funky-town-13.jpg','Funky Town render 13'],
        ['funky-town-14.png','Funky Town render 14'],
        ['funky-town-15.jpg','Funky Town render 15'],
        ['funky-town-16.jpg','Funky Town render 16'],
        ['funky-town-17.png','Funky Town render 17'],
        ['funky-town-18.png','Funky Town render 18'],
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
      <span class="article-tag">Octane Render</span>
    </div>
  </div>

</article>

@endsection
