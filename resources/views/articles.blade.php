@extends('layouts.main')
@section('content')
  @foreach ($post as $posts)
  <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
    <div class="mdl-card mdl-cell mdl-cell--12-col">

      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">{{ $posts->title }}</h2>
      </div>
      <div class="mdl-card__subtitle-text">
        &nbsp;&nbsp;{{ $posts->created_at}}
        <br>
        &nbsp;&nbsp;{{ $posts->author }}
      </div>
      <div class="mdl-card__supporting-text">

        {!!  $posts->text !!}

      </div>
      <div class="mdl-card__actions">
        <a href="#" class="mdl-button">Читать полностью</a>
      </div>
    </div>

  </section>

  @endforeach
  {{ $post->links() }}
@endsection



