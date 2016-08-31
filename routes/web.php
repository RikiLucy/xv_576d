<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    //$tasks = Task::orderBy('created_at', 'asc')->get();
    $post = DB::table('posts')->orderBy('created_at', 'DESC')->paginate(5);
    //return view('index');
    return view('index', [
        'post' => $post
    ]);
});

Route::get('/admin', function (){
    $post = DB::table('posts')->orderBy('created_at', 'DESC')->get();
    return view('admin', [
        'post' => $post
    ]);
});



Route::post('/admin', function (Request $request) {


    $task = new \App\Post();
    $task->text = $request->text;
    $task->title = $request->title;
    $task->author = "RikiLucy";

    $task->save();

    return redirect('/admin');
});

Route::delete('/admin/{id}', function ($id) {
    //\App\Post::($id)->delete();
    DB::table('posts')->where('id_post', '=', $id)->delete();


    return redirect('/admin#features');
});