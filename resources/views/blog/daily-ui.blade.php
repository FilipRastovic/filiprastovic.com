@extends('layouts.app')

@section('description', '100 Daily UI Challenge - a collection of daily UI design exercises.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">UI Design</span>
      <span class="article-tag">Design</span>
    </div>
    <h1 class="article-title">100 Daily UI Challenge</h1>
    <p class="article-date">2024</p>
  </header>

  <div class="article-body">
    <p class="article-intro">100 daily UI design exercises.</p>

    @php
      $files = array_filter([
        '1.png','2.png','3.png','3a.png','4.png','4a.png','5.png','6.png','6a.png',
        '7.png','7a.png','8.png','9.png','10.png','11.png','12.png','13.png','14.png',
        '15.png','16.png','17.png','18.png','19.png','20.png','21.png','22.png',
        '23.jpg','24.png','25.png','26.png','27.png','28.png','29.png','30.png',
        '32.png','33.jpg','34.png','35.jpg','36.png','36a.png',
        '37.png','38.png','39.png','40.png','40a.png','42.png','43.png','44.png',
        '45.png','46.png','47.png','48.png','49.png','50.png',
        '51.png','52.png','53.png','54.png','55.png','56.png','57.png','58.png','59.png','60.png',
        '61.png','62.png','63.png','64.png','65.png','66.png','67.png','68.png','69.png','70.png',
        '71.png','72.png','73.png','74.png','75.png','76.png','77.png','78.png','79.png','80.png',
        '81.png','82.png','83.png','84.png','85.jpg','86.png','87.png','88.png','89.png','90.png',
        '91.png','92.jpg','93.jpg','94.png','95.png','96.png','97.png','98.png','99.png','100.png',
      ], fn($f) => file_exists(__DIR__ . '/../../../images/blog/daily-ui-' . $f));
    @endphp

    <div class="article-gallery">
      @foreach($files as $file)
        <a href="/images/blog/daily-ui-{{ $file }}" class="article-gallery-item" target="_blank">
          <img src="/images/blog/daily-ui-{{ $file }}" alt="Daily UI #{{ pathinfo($file, PATHINFO_FILENAME) }}" loading="lazy" />
        </a>
      @endforeach
    </div>
  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">UI Design</span>
    </div>
  </div>

</article>

@endsection
