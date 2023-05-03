<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

//главная страница
Route::group(['namespace' => 'App\\Http\\Controllers\\Main'], function (){
    Route::get('/', 'IndexController')->name('main.index');
});

//профподготовка
Route::group(['namespace' => 'App\\Http\\Controllers\\ProfessionalTrainingCourse'], function (){
    Route::get('/professionaltrainingcourses', 'IndexController')->name('professionaltrainingcourses.index');
});

//общежитие
Route::group(['namespace' => 'App\\Http\\Controllers\\Hostel'], function (){
    Route::get('/hostel', 'IndexController')->name('hostel.index');
});

//главная страница
//Route::group(['namespace' => 'App\\Http\\Controllers\\Main'], function (){
//    Route::get('/', 'IndexController')->name('main.index');
//});

//банковские реквизиты
Route::group(['namespace' => 'App\\Http\\Controllers\\Requisite'], function (){
    Route::get('/requisite', 'IndexController')->name('requisite.index');
});



//специальности
Route::group(['namespace' => 'App\\Http\\Controllers\\Specialization'], function (){
    Route::get('/specialties', 'IndexController')->name('specialization.index');
    Route::get('/specialties/create', 'CreateController')->name('specialization.create');
    Route::post('/specialties', 'StoreController')->name('specialization.store');
    Route::get('/specialties/{specialization}', 'ShowController')->name('specialization.show');
    Route::get('/specialties/{specialization}/edit', 'EditController')->name('specialization.edit');
    Route::patch('/specialties/{specialization}', 'UpdateController')->name('specialization.update');
    Route::delete('/specialties/{specialization}', 'DestroyController')->name('specialization.delete');
    Route::get('/specialties/{specialization}', 'ShowController')->name('specialization.show');
});


//посты(новости)
Route::group(['namespace' => 'App\\Http\\Controllers\\Post'], function (){
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
});

//посты(удалить картинки)
Route::group(['namespace' => 'App\\Http\\Controllers\\PostPhoto'], function (){
    Route::delete('/postPhotos/{id}', 'DestroyController')->name('postPhoto.delete');
});

//Контакты
Route::group(['namespace' => 'App\\Http\\Controllers\\Contact'], function (){
    Route::get('/contacts', 'IndexController')->name('contact.index');
    Route::get('/contacts/create', 'CreateController')->name('contact.create');
    Route::post('/contacts', 'StoreController')->name('contact.store');
    Route::get('/contacts/{contact}', 'ShowController')->name('contact.show');
    Route::get('/contacts/{contact}/edit', 'EditController')->name('contact.edit');
    Route::patch('/contacts/{contact}', 'UpdateController')->name('contact.update');
    Route::delete('/contacts/{contact}', 'DestroyController')->name('contact.delete');
    Route::get('/contacts/{contact}', 'ShowController')->name('contact.show');
});
