@extends('layouts.app')

@section('description', 'Trial And Terror - a puzzle-platformer 2D video game co-developed and self-published on Steam, Newgrounds and Armor Games.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">Game Dev</span>
      <span class="article-tag">Unity</span>
    </div>
    <h1 class="article-title">Trial And Terror – My Video Game</h1>
    <p class="article-date">2019</p>
  </header>

  <div class="article-body">
    <p class="article-intro">A puzzle-platformer 2D video game I co-developed and designed with my friend Jan Sulja while studying computer science at the University of Novi Sad. The game is self-published on <a href="https://store.steampowered.com/app/1131520/Trial_And_Terror/" target="_blank" rel="noopener">Steam</a> and <a href="https://www.newgrounds.com/portal/view/713592" target="_blank" rel="noopener">Newgrounds</a>, and was also published by <a href="https://armorgames.com/trial-and-terror-game/18409" target="_blank" rel="noopener">Armor Games</a>. We were invited to showcase the game at an expo at the Yugoslav Movie Museum. Here's the game trailer.</p>

    <div class="article-video-wrap">
      <video controls preload="metadata" src="/images/blog/trial-terror-trailer.mp4"></video>
    </div>
  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">Steam</span>
      <span class="article-tag">Newgrounds</span>
    </div>
  </div>

</article>

@endsection
