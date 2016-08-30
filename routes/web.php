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


Route::get('/', function () {
    //$tasks = Task::orderBy('created_at', 'asc')->get();
    $post = DB::table('posts')->paginate(2);
    //return view('index');
    return view('index', [
        'post' => $post
    ]);
});
