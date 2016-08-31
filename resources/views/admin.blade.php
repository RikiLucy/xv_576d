@extends('layouts.main')
@section('content')


  <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
  <h4>Добавить статью</h4>

  <form action="/admin" method="post">
    {{ csrf_field() }}


      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input name="title" class="mdl-textfield__input" type="text" id="sample3">
        <label class="mdl-textfield__label" for="sample3">Название</label>
      </div>
      <textarea name="text" id="editor1" rows="10" cols="80">

            </textarea>
      <script>

        CKEDITOR.replace( 'editor1', {
          language: 'Russian',
          uiColor: '#F9F9F9'
        });
      </script>


    <br>
    <button type="submit" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
      <i class="material-icons">add</i>
    </button>
  </form>
@endsection
@section('admin_tab')
  <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
    <a href="#overview" class="mdl-layout__tab is-active">Добавить</a>
    <a href="#features" class="mdl-layout__tab">Редактировать</a>


  </div>
@endsection

@section('edit_articles')
  <div class="mdl-layout__tab-panel" id="features">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
      <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">Название</th>
        <th>Автор</th>
        <th>Дата создания</th>
        <th>Редактировать</th>
        <th>Удалить</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($post as $posts)
      <tr>
        <td class="mdl-data-table__cell--non-numeric">{{ $posts->title }}</td>
        <td>{{ $posts->author }}</td>
        <td>{{ $posts->created_at }}</td>
        <td> EDIT</td>
        <td>
          <form action="/admin/{{ $posts->id_post }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">Удалить</button>
          </form>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
