<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [ PostController::class, 'index' ] );
Route::get('/post', [ PostController::class, 'post' ] );
Route::post('/post', [ PostController::class, 'store' ]);
Route::get('/posts/view/{id}', [ PostController::class, 'show' ] )->name('view.post');
Route::get('post/edit/{id}', [ PostController::class, 'edit' ])->name('edit.post');
Route::put('posts/{id}', [ PostController::class, 'update' ] )->name('update.post');
Route::delete('post/{id}', [ PostController::class, 'delete' ] )->name('delete.post');
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});