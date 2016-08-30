@extends('layouts.main')
@section('articles')
  @foreach ($post as $posts)
  <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
    <div class="mdl-card mdl-cell mdl-cell--12-col">
      <div class="mdl-card__supporting-text">
        <h4>{{ $posts->title }}</h4>
        {{ $posts->text }}
      </div>
      <div class="mdl-card__actions">
        <a href="#" class="mdl-button">Читать полностью</a>
      </div>
    </div>

  </section>

  @endforeach
  {{ $post->links() }}
@endsection



