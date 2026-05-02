@extends('layouts.app')

@section('description', 'Bootstrap Chat App UI code-along tutorial in HTML, CSS and SCSS.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">Tutorial</span>
      <span class="article-tag">Bootstrap</span>
      <span class="article-tag">HTML/CSS</span>
    </div>
    <h1 class="article-title">Bootstrap Chat App UI – Code-Along Tutorial</h1>
    <p class="article-date">2019</p>
  </header>

  <div class="article-body">
    <p class="article-intro">A coding video lesson I shot on June 30, 2019. Code is available on <a href="https://codepen.io/FilipRastovic/pen/pXgqKK" target="_blank" rel="noopener">CodePen</a> and <a href="https://github.com/FilipRastovic/whatsapp-chat-app-ui" target="_blank" rel="noopener">GitHub</a>.</p>

    <div class="article-video-wrap">
      <video controls preload="metadata" src="https://filiprastovic.com/wp-content/uploads/2024/03/Bootstrap-Chat-App-UI-Codealong_Tutorial-HTML-CSS-SCSS-Web-Design-Development-.mp4"></video>
    </div>
  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">Bootstrap</span>
      <span class="article-tag">SCSS</span>
    </div>
  </div>

</article>

@endsection
