<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TimeTable\EditController;
use App\Http\Middleware\AdminPanelMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//главная страница
Route::group(['namespace' => 'App\\Http\\Controllers\\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});
//профподготовка
Route::group(['namespace' => 'App\\Http\\Controllers\\ProfessionalTrainingCourse'], function () {
    Route::get('/professionaltrainingcourses', 'IndexController')->name('professionaltrainingcourses.index');
});
Route::group(['namespace' => 'App\\Http\\Controllers\\ProfessionalTrainingCourse', 'middleware' => 'admin'], function () {
    Route::patch('/professionaltrainingcourses/{id}', 'UpdateController')->name('professionaltrainingcourses.update');
});
//общежитие
Route::group(['namespace' => 'App\\Http\\Controllers\\Hostel'], function () {
    Route::get('/hostel', 'IndexController')->name('hostel.index');
});
Route::group(['namespace' => 'App\\Http\\Controllers\\Hostel', 'middleware' => 'admin'], function () {
    Route::patch('/hostel/{id}', 'UpdateController')->name('hostel.update');
});
//банковские реквизиты
Route::group(['namespace' => 'App\\Http\\Controllers\\Requisite'], function () {
    Route::get('/requisite', 'IndexController')->name('requisite.index');
});
Route::group(['namespace' => 'App\\Http\\Controllers\\Requisite', 'middleware' => 'admin'], function () {
    Route::patch('/requisite/{id}', 'UpdateController')->name('requisite.update');
});


////специальности
//Route::group(['namespace' => 'App\\Http\\Controllers\\Specialization'], function () {
//    Route::get('/specialties', 'IndexController')->name('specialization.index');
//    Route::get('/specialties/create', 'CreateController')->name('specialization.create');
//    Route::post('/specialties', 'StoreController')->name('specialization.store');
//    Route::get('/specialties/{specialization}', 'ShowController')->name('specialization.show');
//    Route::get('/specialties/{specialization}/edit', 'EditController')->name('specialization.edit');
//    Route::patch('/specialties/{specialization}', 'UpdateController')->name('specialization.update');
//    Route::delete('/specialties/{specialization}', 'DestroyController')->name('specialization.delete');
//    Route::get('/specialties/{specialization}', 'ShowController')->name('specialization.show');
//});

//специальности
Route::group(['namespace' => 'App\\Http\\Controllers\\Specialization', 'middleware' => 'admin'], function () {
    Route::get('/specialties/create', 'CreateController')->name('specialization.create');
    Route::post('/specialties', 'StoreController')->name('specialization.store');
    Route::get('/specialties/{specialization}/edit', 'EditController')->name('specialization.edit');
    Route::patch('/specialties/{specialization}', 'UpdateController')->name('specialization.update');
    Route::delete('/specialties/{specialization}', 'DestroyController')->name('specialization.delete');
    Route::get('/specialties/{specialization}', 'ShowController')->name('specialization.show');
});

Route::group(['namespace' => 'App\\Http\\Controllers\\Specialization'], function () {
    Route::get('/specialties', 'IndexController')->name('specialization.index');
    Route::get('/specialties/{specialization}', 'ShowController')->name('specialization.show');
});


////посты(новости)
//Route::group(['namespace' => 'App\\Http\\Controllers\\Post'], function () {
//    Route::get('/posts', 'IndexController')->name('post.index');
//    Route::get('/postsParent/{whom}', 'IndexParentController')->name('post.indexParent');
//    Route::get('/posts/create', 'CreateController')->name('post.create');
//    Route::post('/posts', 'StoreController')->name('post.store');
//    Route::get('/posts/{post}', 'ShowController')->name('post.show');
//    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
//    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
//    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
//    Route::get('/posts/{post}', 'ShowController')->name('post.show');
//});

//посты(новости)
Route::group(['namespace' => 'App\\Http\\Controllers\\Post', 'middleware' => 'admin'], function () {
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
});

Route::group(['namespace' => 'App\\Http\\Controllers\\Post'], function () {
    Route::get('/postsParent/{whom}', 'IndexParentController')->name('post.indexParent');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts', 'IndexController')->name('post.index');
});


//посты(удалить картинки)
Route::group(['namespace' => 'App\\Http\\Controllers\\PostPhoto', 'middleware' => 'admin'], function () {
    Route::delete('/postPhotos/{id}', 'DestroyController')->name('postPhoto.delete');
});

//Контакты
//Route::group(['namespace' => 'App\\Http\\Controllers\\Contact'], function () {
//    Route::get('/contacts', 'IndexController')->name('contact.index');
//    Route::get('/contacts/create', 'CreateController')->name('contact.create');
//    Route::post('/contacts', 'StoreController')->name('contact.store');
//    Route::get('/contacts/{contact}', 'ShowController')->name('contact.show');
//    Route::get('/contacts/{contact}/edit', 'EditController')->name('contact.edit');
//    Route::patch('/contacts/{contact}', 'UpdateController')->name('contact.update');
//    Route::delete('/contacts/{contact}', 'DestroyController')->name('contact.delete');
//    Route::get('/contacts/{contact}', 'ShowController')->name('contact.show');
//});

//Контакты
Route::group(['namespace' => 'App\\Http\\Controllers\\Contact', 'middleware' => 'admin'], function () {
    Route::get('/contacts/create', 'CreateController')->name('contact.create');
    Route::post('/contacts', 'StoreController')->name('contact.store');
    Route::get('/contacts/{contact}', 'ShowController')->name('contact.show');
    Route::get('/contacts/{contact}/edit', 'EditController')->name('contact.edit');
    Route::patch('/contacts/{contact}', 'UpdateController')->name('contact.update');
    Route::delete('/contacts/{contact}', 'DestroyController')->name('contact.delete');
});

Route::group(['namespace' => 'App\\Http\\Controllers\\Contact'], function () {
    Route::get('/contacts', 'IndexController')->name('contact.index');
    Route::get('/contacts/{contact}', 'ShowController')->name('contact.show');
});

//Расписание
//Route::group(['namespace' => 'App\\Http\\Controllers\\TimeTable'], function (){
//    Route::get('/timetables', 'IndexController')->name('timetable.index');
//    Route::get('/timetables/create', 'CreateController')->name('timetable.create');
//    Route::post('/timetables', 'StoreController')->name('timetable.store');
//    Route::get('/timetables/{timetable}', 'ShowController')->name('timetable.show');
//    Route::get('/timetables/{timetable}/edit/{currentGroupId}', 'EditController')->name('timetable.edit');
//    //Route::patch('/timetables/{timetable}', 'UpdateController')->name('timetable.update');
//    Route::delete('/timetables/{timetable}', 'DestroyController')->name('timetable.delete');
//    Route::get('/timetables/{timetable}', 'ShowController')->name('timetable.show');
//});

Route::group(['namespace' => 'App\\Http\\Controllers\\TimeTable', 'middleware' => 'admin'], function () {
    Route::get('/timetables', 'IndexController')->name('timetable.index');
    Route::get('/timetables/create', 'CreateController')->name('timetable.create');
    Route::post('/timetables', 'StoreController')->name('timetable.store');
    Route::get('/timetables/{timetable}/edit/{currentGroupId}', 'EditController')->name('timetable.edit');
    Route::patch('/timetables/{timetable}', 'UpdateController')->name('timetable.update');
    Route::delete('/timetables/{timetable}', 'DestroyController')->name('timetable.delete');
    Route::get('/timetables/{timetable}', 'ShowController')->name('timetable.show');
});

Route::group(['namespace' => 'App\\Http\\Controllers\\TimeTable'], function () {
    Route::get('/timetables/{timetable}', 'ShowController')->name('timetable.show');
});




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/register')->middleware('admin');

