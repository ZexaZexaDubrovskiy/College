<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

//главная страница
Route::group(['namespace' => 'App\\Http\\Controllers\\Main'], function (){
    Route::get('/', 'IndexController')->name('main.index');
});
//специальности
Route::group(['namespace' => 'App\\Http\\Controllers\\Specialization'], function (){
    Route::get('/specialization', 'IndexController')->name('specialization.index');
    Route::get('/specialization/{specialization}', 'ShowController')->name('specialization.show');
});



//посты(новости)
Route::group(['namespace' => 'App\\Http\\Controllers\\Post'], function (){
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
});


