<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {
    //return $slug;

    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if(! file_exists($path)) {
        //dd('file does not exist');
        return redirect('/');
    }

    $post = file_get_contents($path);

    return view('post',[
        'post'=> $post
    ]);
})->where('post','[A-z_\-]+');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
